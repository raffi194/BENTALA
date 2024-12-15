<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index ()
    {
        return view('auth.login');
    }


    public function login() 
    {
        $credentials = request(['email', 'password']);

        if(! $token = auth()->attempt($credentials)) {
            return response()->json(['Email or Password is wrong'], 401);
        }

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_member' => 'required',
            'no_hp' => 'required',
            'email'=> 'required|email',
            'lahir'=> 'required|date',
            'kelamin'=> 'required',
            'password' => 'required|same:konfirmasi_password',
            'konfirmasi_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        unset($input['konfirmasi_password']);
        $Member = Member::create($input);

        return response()->json([
            'data' => $Member
        ]);
    }  

    public function login_member()
    {
        return view('auth.login_member');
    }

    public function login_member_action(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('errors', $validator->errors()->toArray());
            return redirect('/login_member');
        }

        $credentials = $request->only('email', 'password');
        $member = Member::where('email', $request->email)->first();
        
        if($member) {
            if (Auth::guard('webmember')->attempt($credentials)) {
                $request->session()->regenerate();
            
                // Cek apakah URL sebelumnya adalah login atau halaman yang tidak perlu akses otentikasi
                $previousUrl = url()->previous();
                if (strpos($previousUrl, '/login_member') !== false) {
                    // Jika URL sebelumnya adalah login, arahkan ke '/'
                    return redirect('/');
                }
            
                // Arahkan ke URL sebelumnya jika bukan login
                return redirect()->intended($previousUrl);
            } else {
                Session::flash('failed', "Password salah");
                return redirect('/login_member');
            }     
        } else {
            Session::flash('failed', "Email tidak ditemukan");
            return redirect('/login_member');
        }
    }

    public function register_member()
    {
        return view('auth.register_member');
    }

    public function register_member_action(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'nama_member' => 'required',
            'no_hp' => 'required',
            'email'=> 'required|email',
            'lahir'=> 'required|date',
            'kelamin'=> 'required',
            'password' => 'required|same:konfirmasi_password',
            'konfirmasi_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            Session::flash('errors', $validator->errors()->toArray());
            return redirect('/register_member');
        }

        // Check if email already exists
        if (Member::where('email', $request->email)->exists()) {
            Session::flash('errors', ['email' => ['Email already registered']]);
            return redirect('/register_member');
        }

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        unset($input['konfirmasi_password']);

        try {
            Member::create($input);
            Session::flash('success', "Account successfully created");
            return redirect('/login_member');
        } catch (\Exception $e) {
            Session::flash('errors', ['general' => ['An error occurred while creating the account']]);
            return redirect('/register_member');
        }
    }


    public function logout()
    {
        auth()->logout();

        return response()->json(['message'=>'Succesfully logged out']);
    }

    public function logout_member()
    {
        // Log out the user from the 'webmember' guard
        Auth::guard('webmember')->logout();
        
        // Clear the session
        Session::flush();
        
        // Redirect the user to the login page
        return redirect('/login_member');
    }

    public function updateMember(Request $request)
    {
        $user = Auth::guard('webmember')->user();

        $request->validate([
            'nama_member' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'lahir' => 'required|date',
            'kelamin' => 'required|in:Pria,Wanita',
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user->nama_member = $request->input('nama_member');
        $user->email = $request->input('email');
        $user->no_hp = $request->input('no_hp');
        $user->lahir = $request->input('lahir');
        $user->kelamin = $request->input('kelamin');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }    

    public function uploadProfilePicture(Request $request)
    {
        // Validasi file gambar
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::guard('webmember')->user();

        // Upload gambar
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '_' . $user->id . '.' . $file->getClientOriginalExtension();

            // Simpan ke direktori 'uploads/profile_pictures'
            $file->move(public_path('uploads/profile_pictures'), $filename);

            // Hapus gambar lama jika ada
            if ($user->profile_picture && file_exists(public_path('uploads/profile_pictures/' . $user->profile_picture))) {
                unlink(public_path('uploads/profile_pictures/' . $user->profile_picture));
            }

            // Simpan nama file ke database
            $user->profile_picture = $filename;
            $user->save();

            $previousUrl = url()->previous();

            return redirect()->intended($previousUrl);

        }

        return response()->json(['message' => 'Tidak ada file yang diunggah.'], 400);
    }

}