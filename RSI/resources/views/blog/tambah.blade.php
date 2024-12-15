@extends('layout.home')

@section('title', 'Dashboard')

@section('content')
<div class="h-fit flex-wrap flex justify-center mt-12">
    <div class="w-[80%] p-4 h-screen flex flex-col">
        <div class="">
            <div class="text-4xl font-bold uppercase mb-4">
                <div>Edit Blog</div>
            </div>
            <div class="flex justify-end">
                <div id="pilihButton" data-state="pilih" class="text-[--hitam] p-2 px-4 rounded-2xl border-2 hover:bg-[--hitam] hover:text-[--putih] cursor-pointer border-[--hitam] w-fit" onclick="openAdminBlog()">Submit Blog</div>
            </div>
        </div>

        <!-- Container untuk semua section -->
        <div class="mt-5 w-full">
            <div class="flex justify-around w-full"> 
                <div class="min-h-[calc(100vh-200px)] max-h-[calc(100vh-140px)] overflow-y-auto scrollbar-thin scrollbar-thumb-[--hitam] scrollbar-track-gray-100 w-full">
                    <!-- Section 1 -->
                    <div class="border-t-2 border-[--hitam] mt-4 pt-4 flex flex-col items-center">
                        <span class="mb-2 w-[80%] text-left">Judul Blog</span>
                        <input type="text" placeholder="cth. Budidaya Kain dari Kulit Kaki" class="border border-[--abuabu] rounded-2xl p-2 w-[80%]" />
                    </div>
                
                    <!-- Section 2 -->
                    <div class="mt-4 pt-4 flex flex-col items-center">
                        <span class="mb-2 w-[80%] text-left">Isi Blog</span>
                        <input type="text" placeholder="cth. Ada suatu cara membudidaya kain dari bahan yang berkelanjutan" class="border border-[--abuabu] rounded-2xl p-2 w-[80%]" />
                    </div>
                
                    <!-- Section 3 -->
                    <div class="mt-4 pt-4 flex flex-col items-center">
                        <span class="mb-2 w-[80%] text-left">Foto</span>
                        <label class="flex items-center border border-[--abuabu] rounded-2xl p-2 w-[80%] cursor-pointer">
                            <i class="fa-solid fa-upload fa-xs mr-2"></i>
                            <span>Masukkan</span>
                            <input type="file" class="hidden" />
                        </label>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection