<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Member;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = Product::with('category')->get(); // Eager load kategori
        $categories = Category::all();
        return view('home.index', compact('categories', 'products'));
    }
    
    public function koleksi()
    {
        $products = Product::all();
        $products = Product::with('category')->get(); // Eager load kategori
        $categories = Category::all();
        return view('home.koleksi', compact('categories', 'products'));
    }

    public function produk($id_product)
    {
        $product = Product::with('category')->find($id_product);
        $latest_product = Product::orderByDesc('created_at')->limit(3)->get();
        if (!$product) {
            abort(404, 'Product not found'); // Jika tidak ditemukan, tampilkan halaman 404
        }
        return view('home.produk', compact('product', 'latest_product'));
    }

    public function tambah_keranjang(Request $request)
    {
        $input = $request->all();
        Cart::create($input);
    }

    public function keranjang()
    {
        $carts = Cart::where('id_member', Auth::guard('webmember')->user()->id)->get();
        return view('home.keranjang', compact('carts'));
    }

    public function hapus_keranjang(Cart $cart)
    {
        $cart->delete();
        return redirect('/keranjang');
    }


    public function pembayaran()
    {
        return view('home.pembayaran');
    }

    public function pesanan()
    {
        return view('home.pesanan');
    }

    public function tentang()
    {
        return view('home.tentang');
    }
    
    public function blog()
    {
        $blogs = Blog::all(); // Ambil semua data blog
        return view('home.blog', compact('blogs'));
    }

    public function profil()
    {
        $members = Auth::guard('webmember')->user(); // Pastikan ini mengembalikan objek tunggal
        return view('home.profil', compact('members'));
    }

}
