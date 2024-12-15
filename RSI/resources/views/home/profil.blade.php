@extends('layout.home')

@section('title', 'Profil')

@section('content')
<div class="h-fit">
        <div class="mt-24 ml-10 mb-5">
            <div class="flex flex-nowrap">
                <ul class="flex flex-nowrap space-x-1">
                    <li>
                        <a href="koleksi.html" class="text-[--hitam] px-3 py-2 rounded no-underline text-lg cursor-pointer">Home</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right fa-xs relative top-0.5"></i>
                    </li>
                    <li>
                        <a href="#" class="text-[--hitam] px-3 py-2 rounded no-underline text-lg cursor-pointer font-semibold">Profile</a>
                    </li>
                </ul>
            </div>    
        </div>

        <div class="w-1/3 mb-5">
            <div class="ml-12">
                <div class="flex flex-nowrap">
                    <span class="text-[--hitam] rounded no-underline text-6xl font-bold uppercase">Profile</span>
                </div>    
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center w-full px-10 pb-32 h-fit">
        <ul class="flex flex-nowrap my-10 space-x-10 w-full">
            <li class="justify-center space-y-5 w-[30%] border-2 border-[--hitam]"> 
                <div class="rectangle w-full h-fit ">
                    <div class="flex items-center w-full">
                        <ul class="flex h-fit w-full">
                            <li class="w-full">
                                <div class="flex h-full w-full border-b-2 border-[--hitam]">
                                    <ul class="flex flex-nowrap items-center space-x-3 mx-2 h-full text-[--hitam] w-full"> 
                                        <li class="flex items-center h-full my-3"> 
                                            <div class="h-16 w-16 rounded-full overflow-hidden border-2 border-[--hitam]">
                                                <img src="{{ auth()->guard('webmember')->user()->profile_picture_url }}" alt="Profile Picture" class="h-full w-full object-cover">
                                            </div>
                                        </li>
                                        <li class="flex items-center h-full w-full"> 
                                            <div class="flex flex-nowrap items-center">
                                                <span class="font-medium text-xl">{{$members->nama_member}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="flex items-center w-full">
                        <ul class="flex h-fit w-full">
                            <li>
                                <div class="flex h-full w-full">
                                    <ul class="flex flex-col space-y-3 mx-10 my-3 h-full text-[--hitam] w-full"> 
                                        <li class="flex flex-col h-full"> 
                                            <div class="flex">
                                                <span class="font-semibold text-xl">Kotak Masuk</span>
                                            </div>
                                            <ul class="flex flex-col space-y-3 mx-10 my-3 h-full text-[--hitam] w-full"> 
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Chat</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Diskusi Produk</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Ulasan</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Pesan Bantuan</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Pesanan Dikomplain</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Update</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="flex flex-col h-full"> 
                                            <div class="flex">
                                                <span class="font-semibold text-xl">Pembelian</span>
                                            </div>
                                            <ul class="flex flex-col space-y-3 mx-10 my-3 h-full text-[--hitam] w-full"> 
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Menunggu Pembayaran</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Diskusi Produk</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="flex flex-col h-full"> 
                                            <div class="flex">
                                                <span class="font-semibold text-xl">Daftar Transaksi</span>
                                            </div>

                                            <ul class="flex flex-col space-y-3 mx-10 my-3 h-full text-[--hitam] w-full"> 
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Wishlist</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Toko Favorit</span>
                                                    </div>
                                                </li>
                                                <li class="flex h-full"> 
                                                    <div class="flex">
                                                        <span class="font-medium text-lg cursor-pointer">Pengaturan</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="justify-center space-y-5 w-[70%] relative">
                <div class="h-fit w-full">
                    <ul class="flex flex-nowrap space-x-10 p-4 w-full"> 
                        <li class="flex items-center text-center">
                            <span class="font-medium text-lg cursor-pointer hover:underline hover:font-bold">Biodata Diri</span>
                        </li>
                        <li class="flex items-center text-center">
                            <span class="font-medium text-lg cursor-pointer hover:underline hover:font-bold">Daftar Alamat</span>
                        </li>
                        <li class="flex items-center text-center">
                            <span class="font-medium text-lg cursor-pointer hover:underline hover:font-bold">Pembayaran</span>
                        </li>
                        <li class="flex items-center text-center">
                            <span class="font-medium text-lg cursor-pointer hover:underline hover:font-bold">Rekening Bank</span>
                        </li>
                        <li class="flex items-center text-center">
                            <span class="font-medium text-lg cursor-pointer hover:underline hover:font-bold">Notifikasi</span>
                        </li>
                        <li class="flex items-center text-center">
                            <span class="font-medium text-lg cursor-pointer hover:underline hover:font-bold">Keamanan</span>
                        </li>
                        <li class="flex items-center text-center hover:bg-[--hitam] hover:text-[--putih] p-2" onclick="openAdminProduk()">
                            <span class="font-medium text-lg cursor-pointer">Toko Anda</span>
                        </li>
                        <li class="flex items-center text-center hover:bg-[--hitam] hover:text-[--putih] p-2" onclick="openAdminBlog()">
                            <span class="font-medium text-lg cursor-pointer">Upload Blog</span>
                        </li>
                    </ul>

                    <script>
                        function openAdminProduk() {
                            window.location.href = 'admin produk.html';
                        }

                        function openAdminBlog() {
                            window.location.href = '/dashboard';
                        }
                    </script>

                </div>
            
                <div class="flex flex-nowrap justify-between mx-3 space-x-10">
                    <div class="h-fit p-4 w-[40%]">
                        <div class="space-y-10">
                            <div class="border-2 border-[--hitam] rounded-2xl space-y-3">
                                <div class="bg-[--putih] rounded-2xl overflow-hidden border-b-2 border-[--hitam]">
                                    <div class="group">
                                        <img src="{{ auth()->guard('webmember')->user()->profile_picture_url }}" alt="Profile Picture" class="w-full h-96 object-cover"> 
                                    </div>
                                </div>
                                <div class="flex flex-col p-4 space-y-5">
                                    <form id="uploadForm" action="{{ route('upload_profile_picture') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <label class="flex items-center justify-center text-lg h-fit p-2 hover:bg-[--hitamkurang] rounded-3xl border-2 border-[--hitam] cursor-pointer">
                                        Pilih Foto
                                            <input 
                                            type="file" 
                                            name="profile_picture" 
                                            accept="image/*" 
                                            required 
                                            onchange="submitForm()" 
                                            class="hidden"
                                            >
                                        </label>   
                                    </form>   
                                    <script>
                                        function submitForm() {
                                            // Submit the form immediately when a file is selected
                                            document.getElementById('uploadForm').submit();
                                        }
                                    </script>                          
                                    <span class="text-sm text-[--hitam]">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</span>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <div class="flex items-center justify-center text-lg h-fit p-2 hover:bg-[--hitamkurang] rounded-3xl border-2 border-[--hitam] cursor-pointer">
                                    Buat Kata Sandi
                                </div>
                                <div class="flex items-center justify-center text-lg h-fit p-2 hover:bg-[--hitamkurang] rounded-3xl border-2 border-[--hitam] cursor-pointer">
                                    PIN Bentala
                                </div>
                                <a href="/logout_member" class="flex items-center justify-center text-lg h-fit p-2 hover:bg-[--hitamkurang] rounded-3xl border-2 border-[--hitam] cursor-pointer">
                                   Logout
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <div class="h-fit p-2 w-[60%] space-y-5">
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start pt-5 border-t-2 border-[--hitam]"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Biodata diri</span>
                                    </div>
                                </li>
                                <li class="flex items-end"> 
                                    <div class="flex flex-col items-end">
                                    <button onclick="openEditForm()">
                                        <span class="text-sm text-[--hitam]">Ubah</span>
                                    </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Nama</span>
                                    </div>
                                </li>
                                <li class="flex items-end"> 
                                    <div class="flex flex-col items-end">
                                        <span class="text-sm text-[--hitam]">{{$members->nama_member}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Tanggal Lahir</span>
                                    </div>
                                </li>
                                <li class="flex items-end"> 
                                    <div class="flex flex-col items-end">
                                        <span class="text-sm text-[--hitam]">{{$members->lahir}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start mb-5"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Jenis Kelamin</span>
                                    </div>
                                </li>
                                <li class="flex items-end"> 
                                    <div class="flex flex-col items-end">
                                        <span class="text-sm text-[--hitam]">{{$members->kelamin}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start pt-5 border-t-2 border-[--hitam]"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Kontak</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Email</span>
                                    </div>
                                </li>
                                <li class="flex items-end"> 
                                    <div class="flex flex-col items-end">
                                        <span class="text-sm text-[--hitam]">{{$members->email}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full">
                            <ul class="flex flex-nowrap space-x-5 mx-2 h-fit text-[--hitam] w-full justify-start"> 
                                <li class="flex items-start flex-grow"> 
                                    <div>
                                        <span class="text-base font-bold text-[--hitam]">Nomor HP</span>
                                    </div>
                                </li>
                                <li class="flex items-end"> 
                                    <div class="flex flex-col items-end">
                                        <span class="text-sm text-[--hitam]">{{$members->no_hp}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="editForm" class="hidden fixed inset-0 bg-[--hitamkurang] bg-opacity-50 z-[9999] flex justify-center items-center">
                            <div class="bg-[--putih] rounded-lg p-6 w-96">
                                <span class="text-xl font-semibold mb-4">Edit Data</span>
                                <form action="{{ route('update_member') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label for="nama-member" class="block text-sm font-medium text-[--hitam]">Nama Member</label>
                                        <input type="text" name="nama_member" placeholder="Nama" value="{{ auth()->guard('webmember')->user()->nama_member }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-[--hitam]">Email</label>
                                        <input type="email" name="email" placeholder="Email" value="{{ auth()->guard('webmember')->user()->email }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="no_hp" class="block text-sm font-medium text-[--hitam]">Nomor Handphone</label>
                                        <input type="text" name="no_hp" placeholder="No HP" value="{{ auth()->guard('webmember')->user()->no_hp }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="lahir" class="block text-sm font-medium text-[--hitam]">Tanggal Lahir</label>
                                        <input type="date" name="lahir" value="{{ auth()->guard('webmember')->user()->lahir }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="kelamin" class="block text-sm font-medium text-[--hitam]">Kelamin</label>
                                        <select name="kelamin" required>
                                            <option value="Pria" {{ auth()->guard('webmember')->user()->kelamin == 'Pria' ? 'selected' : '' }}>Pria</option>
                                            <option value="Wanita" {{ auth()->guard('webmember')->user()->kelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="block text-sm font-medium text-[--hitam]">Ubah Password(opsional)</label>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="mb-4">
                                        <label for="password_confirmation" class="block text-sm font-medium text-[--hitam]">Konfirmasi Password Baru</label>
                                        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">
                                    </div>

                                    <div class="flex justify-end space-x-2">
                                        <button type="button" onclick="closeEditForm()" class="px-4 py-2 bg-[--merah] rounded-lg text-[--putih] hover:bg-[--hitam] hover:text-[--putih]">Batal</button>
                                        <button type="submit" class="px-4 py-2 bg-[--ijo] text-[--putih] rounded-lg hover:bg-[--hitam]">Update Profil</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Success Animation -->
                        <div id="success-animation" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                <h2 class="text-2xl font-bold text-[--ijo] mb-4">Data Berhasil Disimpan!</h2>
                                <button onclick="closeSuccessAnimation()" class="px-4 py-2 bg-[--ijo] text-white rounded-lg hover:bg-[--hitam]">Tutup</button>
                            </div>
                        </div>
                
                        <div id="success-animation1" class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                <h2 class="text-2xl font-bold text-[--ijo] mb-4">Data Berhasil Disimpan!</h2>
                                <button onclick="closeSuccessAnimation1()" class="px-4 py-2 bg-[--ijo] text-white rounded-lg hover:bg-[--hitam]">Tutup</button>
                            </div>
                        </div>
                    
                        <!-- Delete Success Animation -->
                        <div id="delete-success-animation" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                <h2 class="text-2xl font-bold text-[--hitam] mb-4">Data Berhasil Dihapus!</h2>
                                <button onclick="closeDeleteSuccessAnimation()" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-[--hitam]">Tutup</button>
                            </div>
                        </div>

                        <script>
                    
                            function openEditForm() {
                                document.getElementById("editForm").classList.remove("hidden");
                            }
                    
                            function closeEditForm() {
                                document.getElementById("editForm").classList.add("hidden");
                            }
                    
                            function handleSubmit(event) {
                                event.preventDefault(); 
                                closeEditForm();
                                setTimeout(() => {
                                    document.getElementById('successAnimation1').classList.remove('hidden');
                                }, 300); 
                            }
                    
                            function closeSuccessAnimation1() {
                                document.getElementById("successAnimation1").classList.add("hidden");
                            }
                    
                        </script>
        
                    </div>
                </div>
            </li>
        </ul>     
    </div>
@endsection