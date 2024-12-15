<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function _construct(){
        $this->middleware('auth:api')->except(['index']);
     }
    
    // public function index()
    // {
    //     $blogs = Blog::all();

    //     return response()->json([
    //         'data' => $blogs
    //     ]);
    // }

    public function index()
    {   
        if (!Auth::guard('webmember')->check()) {
            return redirect()->route('login_member');
        }
    
        // Ambil data blog terkait user yang login
        $blogs = Blog::where('id_member', Auth::guard('webmember')->user()->id)->get();
    
        // Pastikan kita menerima koleksi atau array, dan tidak kosong
        return view('home.dashboard', compact('blogs'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image',
        ]);
    
        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        // Ambil data input
        $input = $request->all();
        $input['id_member'] = Auth::guard('webmember')->user()->id;
    
        // Proses gambar jika ada
        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        }
    
        // Simpan data blog
        $blog = Blog::create($input);
    
        // Kembalikan respons JSON dengan informasi pengalihan
        return redirect()->route('dashboard')->with('message', 'Sukses'); 

    }
    
    
    public function show(Blog $blog)
    {
        return response()->json([
            'data'=> $blog
        ]);
    }
    
    public function update(Request $request, Blog $blog)
    {
        $input['id_member'] = Auth::guard('webmember')->check();

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image',  // Handle optional image file
        ]);
    

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Menambahkan id_member dari pengguna yang sedang login
        $input = $request->all();

        // Handle file upload jika ada gambar baru
        if ($request->has('gambar')) {
            // Menghapus gambar lama jika ada
            File::delete('uploads/' . $blog->gambar);

            // Menangani upload gambar baru
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;  // Update gambar
        } else {
            unset($input['gambar']);  // Jika tidak ada gambar baru, hapus gambar dari input
        }

        // Update data blog dengan input baru
        $blog->update($input);

        // Respond with success message
        return redirect()->route('dashboard')->with('message', 'Blog berhasil disimpan');

    }

    public function destroy(Blog $blog)
    {
        // Periksa apakah file gambar ada
        if ($blog->gambar && File::exists(public_path('uploads/' . $blog->gambar))) {
            File::delete(public_path('uploads/' . $blog->gambar));
        }
    
        // Hapus data dari database
        $blog->delete();
    
        return redirect()->route('dashboard')->with('message', 'Blog deleted successfully.'); 
    }
    
}