@extends('layout.home')

@section('content')

<div class="imgatas">
    <div class="relative h-screen sm:h-screen lg:h-screen xl:h-screen 2xl:h-screen sm:w-full lg:w-full xl:w-full 2xl:w-full">
        <img src="front/img/img sepatu atas.png" class="h-screen w-screen object-cover object-top" alt="Gambar Sepatu">
    </div>
    <div class="relative">
        <p class="text-start text-7xl text-[--putih] text-title absolute bottom-40 left-10 roboto-bold">ITS YOUR TIME TO</p>
        <p class="text-start text-7xl text-[--putih] text-title absolute bottom-20 left-10 roboto-bold">MAKING A DIFFERENCE.</p> 
    </div>
    <div class="relative cursor-pointer">
            <a href="front/#" class="bg-transparent text-[--putih] border-2 px-1 py-2 no-underline rounded-lg absolute bottom-32 right-10">Discover your lifestyle</a>
    </div>
</div>

    <div class="text-center mx-20 my-10 uppercase max-w-full">
        <div class="text-4xl roboto-bold text-[--item]">
          <span>We creates </span>
            <span class="text-[--ijo]">eco-friendly products</span>
            <span> using sustainable materials like kenaf canvas, recycled plastic leather, and rubber soles. With solar-powered, water-saving production, they offer modern, casual shoes, bags, sandals, and clothing for all activities.</span>
        </div>
    </div>
        <div class="wrapper">
            <div class="uppercase grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 max-w-screen mx-auto">
                @foreach ($categories->shuffle()->take(4) as $category)
                    <div class="relative group">
                        <img src="{{ asset('uploads/' . $category->gambar) }}" class="h-screen w-full object-cover shadow-lg transition-transform duration-300 transform">
                        <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                        <div class="absolute inset-0">
                            <span class="text-3xl font-bold text-[--putih] absolute top-0 right-3 opacity-100 transition-opacity duration-300 group-hover:opacity-0">{{$category->nama_kategori}}</span>
                            <span class="text-3xl font-bold text-[--hitam] absolute top-0 right-3 opacity-0 transition-opacity duration-300 group-hover:opacity-100">{{$category->nama_kategori}}</span>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>

        <div class="Koleksi">
            <div class="">
              <span class="text-3xl font-bold text-[--hitam] flex justify-center my-10">KOLEKSI TERBARU</span>
            </div>
            
        </div>

<div class="content w-full mx-auto">
            <div class="relative">
                <div class="slider overflow-hidden"> 
                    <div class="slide hidden" id="slide1">
                            <div class="wrapper">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-2/3 mx-auto">
                                @foreach($products->shuffle()->take(9) as $product)
                                    <div class="relative">
                                        <a href="{{ route('produk', ['id' => $product->id]) }}">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="{{ asset('uploads/' . $product->gambar) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">{{ $product->rating }}/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">{{ $product->nama_barang }}</h2>
                                            <p class="text-[--hitam] font-semibold">{{ $product->category->nama_kategori }}</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </a>
                                        <div class="relative">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                        </div>
                                        </div>
                                    </div>

                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="slide hidden" id="slide2">
                        <div class="wrapper">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-2/3 mx-auto">
                                    <!-- Card 1 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card11.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp999.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 2 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card12.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Pijakbumi</h2>
                                            <p class="text-[--hitam] font-semibold">Kotta Hybrid</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp519.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 3 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card13.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Pijakbumi</h2>
                                            <p class="text-[--hitam] font-semibold">Tiga Slip-On</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp549.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 4 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card14.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Aile</h2>
                                            <p class="text-[--hitam] font-semibold">Short-Sleeve Shirt</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp285.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 5 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card15.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Pijakbumi</h2>
                                            <p class="text-[--hitam] font-semibold">Naya Sandal</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp460.625</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 6 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card16.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">H&M</h2>
                                            <p class="text-[--hitam] font-semibold">Regular Fit Textured-Weave Resort Shirt</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp349.900</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 7 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card17.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">HARA - Everyday Pants</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp2.490.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 8 -->
                                    <div class="relative">
                                        <a href="front/Corduroy Cap.html">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card18.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Aile</h2>
                                            <p class="text-[--hitam] font-semibold">Sweater Polo Long-Sleeve</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 9 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                    <img src="front/img/card09.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">HARA - Everyday Shorts </p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp1.999.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slide hidden" id="slide3">
                        <div class="wrapper">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-2/3 mx-auto">
                                    <!-- Card 1 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card01.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp999.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 2 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card02.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Pijakbumi</h2>
                                            <p class="text-[--hitam] font-semibold">Bumisocks Signature Mid-Quarter Socks</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp169.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 3 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card03.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Flannel Shirt Long-Sleeve</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 4 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card04.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">H&M</h2>
                                            <p class="text-[--hitam] font-semibold">Draped lyocell-blend skirt</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp380.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 5 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card05.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Packable Bag</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp299.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 6 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card06.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">HARA - Accent Scarf</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp790.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 7 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card07.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">ANGKASA Jacquard</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp2.890.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 8 -->
                                    <div class="relative">
                                        <a href="front/Corduroy Cap.html">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card8.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Aile</h2>
                                            <p class="text-[--hitam] font-semibold">Corduroy Cap</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp159.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 9 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                    <img src="front/img/card09.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Slim Fit Jeans</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slide hidden" id="slide4">
                        <div class="wrapper">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-2/3 mx-auto">
                                    <!-- Card 1 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card01.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp999.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 2 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card02.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Pijakbumi</h2>
                                            <p class="text-[--hitam] font-semibold">Bumisocks Signature Mid-Quarter Socks</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp169.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 3 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card03.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Flannel Shirt Long-Sleeve</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 4 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card04.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">H&M</h2>
                                            <p class="text-[--hitam] font-semibold">Draped lyocell-blend skirt</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp380.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 5 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card05.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Packable Bag</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp299.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 6 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card06.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">HARA - Accent Scarf</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp790.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 7 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card07.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">ANGKASA Jacquard</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp2.890.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 8 -->
                                    <div class="relative">
                                        <a href="front/Corduroy Cap.html">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card8.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Aile</h2>
                                            <p class="text-[--hitam] font-semibold">Corduroy Cap</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp159.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 9 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                    <img src="front/img/card09.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Slim Fit Jeans</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="slide hidden" id="slide5">
                        <div class="wrapper">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-2/3 mx-auto">
                                    <!-- Card 1 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card01.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp999.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 2 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card02.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Pijakbumi</h2>
                                            <p class="text-[--hitam] font-semibold">Bumisocks Signature Mid-Quarter Socks</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp169.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                                    
                                    <!-- Card 3 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card03.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Flannel Shirt Long-Sleeve</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 4 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card04.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">H&M</h2>
                                            <p class="text-[--hitam] font-semibold">Draped lyocell-blend skirt</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp380.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 5 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card05.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Packable Bag</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp299.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 6 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card06.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">HARA - Accent Scarf</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp790.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 7 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card07.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Sukkha Citta</h2>
                                            <p class="text-[--hitam] font-semibold">ANGKASA Jacquard</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp2.890.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 8 -->
                                    <div class="relative">
                                        <a href="front/Corduroy Cap.html">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="front/img/card8.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                            </div>
                                            <div class="absolute top-2 left-20 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">Aile</h2>
                                            <p class="text-[--hitam] font-semibold">Corduroy Cap</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp159.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            
                                    <!-- Card 9 -->
                                    <div class="relative">
                                        <a href="front/#">
                                        <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                    <img src="front/img/card09.png" alt="Product 9" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none"> <!-- Menghilangkan bayangan saat di-hover -->
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                            </div>
                                            <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                <i class="fa-regular fa-star text-[--hitam]"></i>
                                                <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4">
                                            <h2 class="text-lg font-bold">UNIQLO</h2>
                                            <p class="text-[--hitam] font-semibold">Slim Fit Jeans</p>
                                            <div class="flex justify-between items-center w-full mt-2">
                                                <span class="text-xl font-bold">Rp255.000</span>
                                            </div>
                                        </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        function toggleHeart(element) {
                                            if (element.classList.contains('fa-regular')) {
                                                element.classList.remove('fa-regular');
                                                element.classList.add('fa-solid');
                                                element.style.color = '#e81756';
                                            } else {
                                                element.classList.remove('fa-solid');
                                                element.classList.add('fa-regular');
                                                element.style.color = 'var(--hitam)'; 
                                            }
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
        
                <div class="flex justify-center items-center mt-4 space-x-card my-10">
                    <div class="slider-dots flex space-x-2">
                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
                    </div>
                    <div class="slider-buttons flex space-x-4">
                        <div class="buttonpag cursor-pointer flex items-center justify-center w-10 h-10 border-2 border-black rounded-full hover:bg-gray-200 transition duration-300" onclick="plusSlides(-1)">
                            <i class="icon fa-solid fa-arrow-left"></i>
                        </div>
                        <div class="buttonpag cursor-pointer flex items-center justify-center w-10 h-10 border-2 border-black rounded-full hover:bg-gray-200 transition duration-300" onclick="plusSlides(1)">
                            <i class="icon fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                const slides = document.querySelectorAll('.slide');
                const dots = document.querySelectorAll('.dot');

                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }

                slides.forEach((slide, index) => {
                    slide.classList.add('hidden');
                    if (index + 1 === slideIndex) {
                        slide.classList.remove('hidden');
                    }
                });

                dots.forEach((dot, index) => {
                    dot.classList.remove('bg-gray-700');
                    if (index + 1 === slideIndex) {
                        dot.classList.add('bg-gray-700');
                    } else {
                        dot.classList.add('bg-gray-400');
                    }
                });
            }
        </script>

<div class="relative flex flex-col md:flex-row">
    <div class="flex flex-col justify-center max-w-full ml-5 mb-10 h-full w-full md:w-2/3 lg:w-3/4 xl:w-2/3">
        <div class="w-auto h-auto ml-10 mt-24">
            <div class="max-w-xl ml-2 mt-5 mb-10">
                <span class="text-5xl font-bold">Pilihan Hijau Hari Ini, Masa Depan Cerah nanti</span>
            </div>
            <div class="max-w-xl ml-2">
                <span class="text-lg">Dengan memilih produk ramah lingkungan, Anda turut menjaga bumi sekaligus menyiapkan masa depan yang lebih cerah. Setiap langkah kecil hari ini adalah investasi besar untuk generasi mendatang.</span>
            </div>
            <div class="max-w-xl ml-2 mt-5">
                <ul class="flex flex-col md:flex-row md:space-x-8">
                    <li class="flex flex-col items-center mb-5 md:mb-0">
                        <div class="flex items-center space-x-40">
                            <span class="text-[--hitam] py-2 font-semibold text-4xl">50%</span>
                            <i class="fa-solid fa-recycle fa-2xl text-4xl"></i>
                        </div>
                        <span class="text-[--hitam] py-2 text-left">Produk ramah lingkungan, terutama yang terbuat dari bahan daur ulang atau berkelanjutan, dapat mengurangi emisi karbon hingga 50% dibandingkan produk konvensional dalam siklus produksinya. (Environmental Protection Agency)</span>
                    </li>
                    <li class="flex flex-col items-center">
                        <div class="flex items-center space-x-24">
                            <span class="text-[--hitam] py-2 font-semibold text-4xl">20%-25%</span>
                            <i class="fa-solid fa-store fa-2xl text-4xl"></i>
                        </div>
                        <span class="text-[--hitam] py-2 text-left">Produk lokal berbasis lingkungan sering kali melibatkan produsen lokal dan dapat meningkatkan pendapatan masyarakat hingga 20-25% dibandingkan rantai pasokan global berbasis bahan mentah. (International Trade Centre)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 my-10 mr-24 w-full md:w-1/3 lg:w-1/4 xl:w-1/3">
        <img src="front/img/gambarbwh.png" alt="Deskripsi Gambar" class="h-full object-cover" />
    </div>
</div>

@endsection