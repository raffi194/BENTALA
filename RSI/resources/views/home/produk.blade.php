@extends('layout.home')

@section('title', 'Produk')

@section('content')
<div class="flex flex-col items-center">
        <ul class="flex flex-nowrap md:flex-nowrap space-y-10 md:space-y-0 md:space-x-20 mx-4 w-[90%]">
            <!-- Koleksi Section (Left) -->
            <li class="flex-1 justify-center">
                <div class="flex flex-col max-w-screen mt-20">
                    <div class="w-auto space-x-1">
                        <ul class="flex flex-nowrap space-x-1">
                            <li>
                                <a href="/koleksi" class="text-[--hitam] px-3 py-2 rounded no-underline text-lg">Koleksi</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-xs relative top-0.5"></i>
                            </li>
                            <li>
                                <a href="#" class="text-[--hitam] px-3 py-2 rounded no-underline text-lg font-semibold">{{ $product->nama_barang }}</a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <span class="uppercase text-5xl font-bold">{{ $product->nama_barang }}</span>
                        </div>
                        <div class="mt-3 flex items-start">
                            <span class="uppercase text-4xl font-bold">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                            <div class="flex flex-col items-start ml-4 mt-1">
                                <div class="flex space-x-1">
                                    <span class="uppercase text-xs font-light"><i class="fa-solid fa-star"></i></span>
                                    <span class="uppercase text-xs font-light"><i class="fa-solid fa-star"></i></span>
                                    <span class="uppercase text-xs font-light"><i class="fa-solid fa-star"></i></span>
                                    <span class="uppercase text-xs font-light"><i class="fa-solid fa-star"></i></span>
                                    <span class="uppercase text-xs font-light"><i class="fa-solid fa-star"></i></span>
                                </div>
                                <span class="text-sm font-medium mt-1">{{ $product->rating }} stars • 10 reviews</span>
                            </div>
                        </div>
                        <div class="my-2 space-x-5">
                            <span id="detail" class="text-lg cursor-pointer hover:underline" onclick="showDetail()">Detail</span>
                            <span id="jejakKarbon" class="text-lg cursor-pointer hover:underline" onclick="showJejakKarbon()">Jejak Karbon</span>
                        </div>
    
                        <div>
                            <span class="text-lg font-bold uppercase">{{ $product->category->nama_kategori }}</span>
                        </div>
                        
                        <div id="detailContent" class="my-5 visible">
                            <span class="text-lg">{{ $product->deskripsi }}</span>
                        </div>
                        
                        <div id="carbonFootprint" class="my-5 pr-14 hidden">
                            <span class="text-lg" id="carbonText">{{ $product->karbon }}</span>
                        </div>
                        
                        <script>
                            function showDetail() {
                                document.getElementById('carbonFootprint').classList.add('hidden');
                                document.getElementById('detailContent').classList.remove('hidden');
                            }
                        
                            function showJejakKarbon() {
                                document.getElementById('detailContent').classList.add('hidden');
                                document.getElementById('carbonFootprint').classList.remove('hidden');
                            }
                        </script>
                        
                        
                    </div>
                </div>
            </li>
            <!-- Product Image Section (Center) -->
            <li class="flex-1 flex justify-center">
                <div class="mt-20 flex flex-col items-center justify-center">
                    <img src="{{ asset('uploads/' . $product->gambar) }}" alt="Product 9" class="w-full h-80 object-cover border-2 border-[--hitam] rounded-lg cursor-pointer">
                    
                    <div class="flex justify-center mt-5 space-x-1 h-36">
                        <img src="img/CC01.png" alt="Product 1" class="w-32 h-20 object-cover border-2 border-[--hitam] rounded-lg cursor-pointer">
                        <img src="img/CC02.png" alt="Product 2" class="w-32 h-20 object-cover border-2 border-[--hitam] rounded-lg cursor-pointer">
                        <img src="img/CC03.png" alt="Product 3" class="w-32 h-20 object-cover border-2 border-[--hitam] rounded-lg cursor-pointer">
                    </div>
                </div>
            </li>
            <!-- Ukuran Section (Right) -->
            <li class="flex-1 flex justify-center">
                <div class="mt-20">
                    <div>
                        <div class="flex items-center justify-between cursor-pointer">
                            <h2 class="text-lg font-medium">Ukuran</h2>
                        </div>
                        <div class="flex mt-2">
                            <ul class="flex flex-nowrap">
                                <li>
                                    <div class="ukuranlist flex space-x-4">
                                        @php
                                            $sizes = explode(',', $product->ukuran)
                                        @endphp

                                        @foreach ($sizes as $size)
                                        <div class="ukuran-list">
                                            <div class="ukuran-card bg-transparent border-2 border-[--hitam] p-2 px-4 rounded-xl text-center cursor-pointer" onclick="selectSize(this)">
                                                <span class="font-semibold">{{$size}}</span>
                                                <input type="radio" name="size" id="{{$size}}" value="{{$size}}" class="hidden size">
                                                <label for="{{$size}}" ></label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <div class="ml-8 relative bottom-7">
                                        <span class="block font-semibold mb-1">Stock</span>
                                        <div class="py-2 p-2 border-2 border-[--hitam] rounded-xl w-14 text-center flex items-center justify-center">
                                            <span class="font-semibold">1</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                        <script>
                            function selectSize(element) {
                                const sizeCards = document.querySelectorAll('.ukuran-card');
                                const isSelected = element.classList.contains('bg-[--hitam]');
                        
                                sizeCards.forEach(card => {
                                    card.classList.remove('bg-[--hitam]');
                                    card.classList.remove('text-[--putih]');
                                    card.classList.add('bg-transparent');
                                    card.classList.add('border-[--hitam]');
                                });
                        
                                if (!isSelected) {
                                    element.classList.remove('bg-transparent');
                                    element.classList.add('bg-[--hitam]');
                                    element.classList.add('text-[--putih]');
                                    element.classList.remove('border-[--hitam]');
                                }
                            }
                        </script>
                    
    
                    <div class="">
                        <div class="flex items-center justify-between cursor-pointer">
                            <h2 class="text-lg font-medium">Warna</h2>
                        </div>
                        
                        <div class="mt-2 flex items-start space-x-4 relative">
                            @php
                                $colours = explode(',', $product->warna)
                            @endphp

                            @foreach ($colours as $colour)
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-[--putih] relative cursor-pointer pilihwarna" onclick="toggleSelect(this)">
                                <div class="absolute inset-0 rounded-full bg-[--{{$colour}}]"></div>
                                <input type="radio" name="color" id="{{$colour}}" value="{{$colour}}" class="color">
                                <label for="{{$colour}}" ></label>
                            </div>
                            <script>
                                function toggleSelect(element) {
                                    const sizeCards = document.querySelectorAll('.pilihwarna');
                            
                                    const isSelected = element.classList.contains('border-[--hitam]');
                            
                                    if (isSelected) {
                                        element.classList.remove('border-[--hitam]');
                                        element.classList.add('border-[--putih]');
                                    } else {
                                        sizeCards.forEach(card => {
                                            card.classList.remove('border-[--hitam]');
                                            card.classList.add('border-[--putih]');
                                        });
                            
                                        element.classList.remove('border-[--putih]');
                                        element.classList.add('border-[--hitam]');
                                    }
                                }
                            </script>
                            @endforeach
                            <div class="flex flex-col items-start absolute bottom-0 left-60">
                                <span class="font-semibold mb-2">Qty</span>
                                <div class="py-2 p-2 border-2 border-[--hitam] rounded-xl w-14 text-center flex items-center justify-center]">
                                    <input type="number" min="1" value="1" class="input-text jumlah qty text font-semibold text-center w-full bg-transparent border-none outline-none" />
                                </div>
                            </div>
                        </div>
                    
                        <div class="mt-8 space-y-2 max-w-[315   px]">
                            <div class="flex flex-nowrap cursor-pointer" onclick="openCustomize()">
                                <span class="w-full py-2 bg-transparent text-[--hitam] border-2 border-[--hitam] no-underline rounded-xl text-center font-semibold hover:bg-[--hitamkurang]">Customize</span>
                            </div>
                            
                            <div class="flex flex-nowrap cursor-pointer">
                                <a href="#" class="w-full py-2 bg-[--hitam] text-[--putih] border-2 border-[--hitam] no-underline rounded-xl text-center tambah_keranjang">Add To Cart</a>
                            </div>
                            
                            <div class="flex flex-nowrap cursor-pointer" onclick="add_Cart()">
                                <span class="w-full py-2 bg-[--ijo] text-[--putih] border-2 border-[--hitam] no-underline rounded-xl text-center">Buy Now</span>
                            </div>
                        
                            <div class="flex justify-center mt-2">
                                <span class="text-nowrap text-center">Free shipping over Rp 150.000</span>
                            </div>

                            <script>
                                function add_Cart() {
                                    window.location.href = '/keranjang';
                                }
                                
                                function openCustomize() {
                                    window.location.href = 'Customize.html';
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="content mx-auto">
            <div class="relative">
                <div class="">
                    <span class="text-3xl font-bold text-[--hitam] flex justify-center mb-5">REKOMENDASI PRODUK</span>
                </div>                
                <div class="">
                    <div class="slide " id="slide1">
                            <div class="">
                                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 w-2/3 mx-auto my-5 flex flex-nowrap">
                                    @foreach ($latest_product as $produk)
                                    <div class="relative">
                                        <a href="{{ route('produk', ['id' => $produk->id]) }}">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                    <div class="relative group">
                                                        <img src="{{ asset('uploads/' . $produk->gambar) }}" alt="{{ $produk->name }}" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                        <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                    </div>
                                                    <div class="absolute top-2 left-2 flex items-center bg-[--putih] border border-[--hitam] rounded-2xl px-2 py-1">
                                                        <i class="fa-regular fa-star text-[--hitam]"></i>
                                                        <span class="ml-1 text-xs font-bold text-[--hitam]">{{ $produk->rating }}/5</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col p-4">
                                                    <h2 class="text-lg font-bold">{{ $produk->nama_barang }}</h2>
                                                    <p class="text-[--hitam] font-semibold">{{ $produk->category->nama_kategori }}</p>
                                                    <div class="flex justify-between items-center w-full mt-2">
                                                        <span class="text-xl font-bold">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="relative">
                                                <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute bottom-17 right-0" style="color: #0a090b; cursor: pointer;" onclick="toggleHeart(this)"></i>
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
                                    @endforeach
                                </div>        
                            </div>        
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(function(){
    $('.tambah_keranjang').click(function(e){
        e.preventDefault(); // Prevent default button behavior

        @if(Auth::guard('webmember')->check())
            let id_member = {{ Auth::guard('webmember')->user()->id }};
            let id_barang = {{$product->id}};
            let jumlah = $('.jumlah').val();
            let size = $('.size').val();
            let color = $('.color').val();
            let total = {{$product->harga}} * jumlah;
            let is_checkout = 0;

            // AJAX request to add the item to the cart
            $.ajax({
                url: '/tambah_keranjang',
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                data: {
                    id_member,
                    id_barang,
                    jumlah,
                    size,
                    color,
                    total,
                    is_checkout,
                },
                success: function(data) {
                    window.location.href = '/keranjang'; // Redirect to cart page
                },
                error: function(error) {
                    console.error("Error adding to cart:", error);
                    alert('Gagal menambahkan ke keranjang. Silakan coba lagi.');
                }
            }); 
        @else
            // Redirect to login page if not logged in
            alert('Anda harus login untuk menambahkan ke keranjang.');
            window.location.href = "{{ route('login') }}";
        @endif
    });
});
</script>
@endpush