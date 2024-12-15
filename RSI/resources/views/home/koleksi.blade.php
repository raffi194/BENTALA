@extends('layout.home')

@section('title', 'Koleksi')

@section('content')

    <div class="flex-grow">
        <div class="mt-14 p-4 px-10 space-y-5">
            <div>    
                <ul class="flex flex-nowrap space-x-5">
                    <li>
                        <a class="hover:underline" href="#">Home</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="hover:underline" href="#">Koleksi</a>
                    </li>
                </ul>
            </div>
            <div>
                <div>
                    <span class="text-6xl font-bold mt-4">KOLEKSI</span>
                </div>
            </div>
        </div>

        <div class="flex w-full">
            <div class="w-[20%] p-4 space-y-5">
                <div class="flex items-center">
                    <div class="justify-start flex-grow">
                        <span class="text-4xl font-bold">FILTER</span>
                    </div>
                    <div class="justify-end">
                        <button class="text-[--hitam] hover:border-2 border-[--hitam] p-2 rounded-xl">Clear all</button>
                    </div>
                </div>
                <div>
                    <span class="font-medium">Showing 18 of 18</span>
                </div>
                <div>
                    <ul class="space-y-3">
                        <li>
                            <div class="text-[--hitam] hover:underline cursor-pointer" onclick="openSemua()">Semua</div>
                        </li>
                        <li>
                            <div class="text-[--hitam] hover:underline cursor-pointer" onclick="openWanita()">Wanita</div>
                        </li>
                        <li>
                            <div class="text-[--hitam] hover:underline cursor-pointer" onclick="openPria()">Pria</div>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3 border-t-2 border-[--hitam]">
                    <div class="mt-3">
                        <span class="font-bold text-xl">Brand</span>
                    </div>
                    <div>
                        <div class="relative w-full">
                            <input type="text" placeholder="Search" class="bg-transparent text-[--item] border-2 border-[--hitam] rounded-2xl py-2 pl-10 pr-3 w-full max-w-full">
                            <svg class="absolute left-3 top-3 transform text-[--hitam] h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="space-y-3 border-t-2 border-[--hitam]">
                    <div class="font-bold text-xl mt-3">
                        <span>Warna</span>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <div class="choice flex items-center border border-[--hitam] rounded-full px-4 py-2 transition-transform transform hover:scale-105 hover:shadow-lg" data-color="red">
                            <div class="w-6 h-6 bg-red-500 rounded-full mr-2"></div>
                            <span class="text-[--hitam] font-semibold">Red</span>
                        </div>
                        <div class="choice flex items-center border border-[--hitam] rounded-full px-4 py-2 transition-transform transform hover:scale-105 hover:shadow-lg" data-color="blue">
                            <div class="w-6 h-6 bg-blue-500 rounded-full mr-2"></div>
                            <span class="text-[--hitam] font-semibold">Blue</span>
                        </div>
                        <div class="choice flex items-center border border-[--hitam] rounded-full px-4 py-2 transition-transform transform hover:scale-105 hover:shadow-lg" data-color="purple">
                            <div class="w-6 h-6 bg-purple-500 rounded-full mr-2"></div>
                            <span class="text-[--hitam] font-semibold">Purple</span>
                        </div>
                        <div class="choice flex items-center border border-[--hitam] rounded-full px-4 py-2 transition-transform transform hover:scale-105 hover:shadow-lg" data-color="yellow">
                            <div class="w-6 h-6 bg-yellow-500 rounded-full mr-2"></div>
                            <span class="text-[--hitam] font-semibold">Yellow</span>
                        </div>
                        <div class="choice flex items-center border border-[--hitam] rounded-full px-4 py-2 transition-transform transform hover:scale-105 hover:shadow-lg" data-color="green">
                            <div class="w-6 h-6 bg-green-500 rounded-full mr-2"></div>
                            <span class="text-[--hitam] font-semibold">Green</span>
                        </div>
                        <div class="choice flex items-center border border-[--hitam] rounded-full px-4 py-2 transition-transform transform hover:scale-105 hover:shadow-lg" data-color="amber">
                            <div class="w-6 h-6 bg-amber-950 rounded-full mr-2"></div>
                            <span class="text-[--hitam] font-semibold">Brown</span>
                        </div>
                    </div>
                    
                    <script>
                        document.querySelectorAll('.choice').forEach(choice => {
                            choice.addEventListener('click', function () {
                                if (this.classList.contains('selected')) {
                                    this.classList.remove('selected');
                                    this.style.borderColor = "var(--hitam)";
                                } else {
                                    this.classList.add('selected');
                                    const color = this.getAttribute('data-color');
                                    const color500 = this.querySelector(`.bg-${color}-500`);
                                    const color950 = this.querySelector(`.bg-${color}-950`);
                                    this.style.borderColor = color950 ? getComputedStyle(color950).backgroundColor : getComputedStyle(color500).backgroundColor;
                                }
                            });
                        });
                    </script>
                </div>
                <div class="space-y-3 border-t-2 border-[--hitam]">
                    <div class="font-bold text-xl mt-3">
                        <span>Harga</span>
                    </div>
                    <div>
                        <ul>
                          <li>
                            <div class="flex items-center flex-nowrap">
                              <input type="radio" id="price1" name="price" class="hidden peer" />
                              <label for="price1" class="cursor-pointer w-3 h-3 border-2 border-[--hitam] rounded-full block mr-2 peer-checked:bg-[--hitam] peer-checked:border-[--hitam] relative"></label>
                              <span class="text-sm">Rp 0 - Rp 100.000</span>
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center flex-nowrap">
                              <input type="radio" id="price2" name="price" class="hidden peer" />
                              <label for="price2" class="cursor-pointer w-3 h-3 border-2 border-[--hitam] rounded-full block mr-2 peer-checked:bg-[--hitam] peer-checked:border-[--hitam] relative"></label>
                              <span class="text-sm">Rp 100.000 - Rp 250.000</span>
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center flex-nowrap">
                              <input type="radio" id="price3" name="price" class="hidden peer" />
                              <label for="price3" class="cursor-pointer w-3 h-3 border-2 border-[--hitam] rounded-full block mr-2 peer-checked:bg-[--hitam] peer-checked:border-[--hitam] relative"></label>
                              <span class="text-sm">Rp 250.000 - Rp 500.000</span>
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center flex-nowrap">
                              <input type="radio" id="price4" name="price" class="hidden peer" />
                              <label for="price4" class="cursor-pointer w-3 h-3 border-2 border-[--hitam] rounded-full block mr-2 peer-checked:bg-[--hitam] peer-checked:border-[--hitam] relative"></label>
                              <span class="text-sm">Rp > 500.000</span>
                            </div>
                          </li>
                        </ul>
                    </div>

                    <script>
                        const listItems = document.querySelectorAll("li");

                        listItems.forEach((item) => {
                        item.addEventListener("dblclick", () => {
                            const radioInput = item.querySelector("input[type='radio']");

                            if (radioInput) {
                            radioInput.checked = false;
                            }
                        });
                        });
                    </script>

                </div>
                <div class="space-y-3 border-t-2 border-[--hitam]">
                    <div class="font-bold text-xl mt-3">
                        <span>Ukuran</span>
                    </div>
                    <div>
                        <ul class="flex flex-nowrap">
                            <li>
                                <div class="ukuranlist flex space-x-4">
                                    <div class="ukuran-list">
                                        <div class="ukuran-card bg-transparent border-2 border-[--hitam] p-2 px-4 rounded-xl text-center cursor-pointer" onclick="selectSize(this)">
                                            <span class="font-semibold">S</span>
                                        </div>
                                    </div>
                                    <div class="ukuran-list">
                                        <div class="ukuran-card bg-transparent border-2 border-[--hitam] p-2 px-3 rounded-xl text-center cursor-pointer" onclick="selectSize(this)">
                                            <span class="font-semibold">M</span>
                                        </div>
                                    </div>
                                    <div class="ukuran-list">
                                        <div class="ukuran-card bg-transparent border-2 border-[--hitam] p-2 px-4 rounded-xl text-center cursor-pointer" onclick="selectSize(this)">
                                            <span class="font-semibold">L</span>
                                        </div>
                                    </div>
                                    <div class="ukuran-list">
                                        <div class="ukuran-card bg-transparent border-2 border-[--hitam] p-2 px-3 rounded-xl text-center cursor-pointer" onclick="selectSize(this)">
                                            <span class="font-semibold">XL</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

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
                    </div>
                </div>
            </div>
            <div class="w-[80%] p-4 h-full">
                <div class="h-fit">
                  <div class="p-2 px-4 flex flex-nowrap">
                        <div class="flex-grow">
                            <div class="flex flex-nowrap items-center space-x-2 border-2 border-[--hitam] rounded-xl w-fit p-2 px-4 cursor-pointer">
                                <div>
                                    <span>Tag</span>
                                </div>    
                                <div>
                                    <i class="fa-solid fa-x fa-xs"></i>
                                </div>    
                            </div>
                        </div>
                        <div class="flex flex-nowrap items-center space-x-2 rounded-xl w-fit p-2 px-4 cursor-pointer">
                            <div>
                                <span>Sort by</span>
                            </div>    
                            <div>
                                <i class="fa-solid fa-angle-down fa-xs"></i>
                            </div>   
                        </div>
                  </div>
                </div>
              
                <div class="mt-2">
                    <div class="slide hidden" id="slide1">
                        <div class="wrapper">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto">
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

                                <!-- Card 2 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card02.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Pijakbumi</span>
                                                <span class="text-[--hitam] font-semibold">Bumisocks Signature Mid-Quarter Socks</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp169.900</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 3 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card03.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Flannel Shirt Long-Sleeve</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp255.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 4 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card04.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">H&M</span>
                                                <span class="text-[--hitam] font-semibold">Draped lyocell-blend skirt</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp380.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 5 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card05.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Packable Bag</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp299.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 6 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card06.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Accent Scarf</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp790.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 7 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card07.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">ANGKASA Jacquard</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.890.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 8 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.7/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card 08.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">PAGISENJA - Weekend Shirt</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.690.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 9 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card09.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Slim Fit Jeans</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp255.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                    <div class="slide hidden" id="slide2">
                        <div class="wrapper">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto">
                                <!-- Card 1 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card08.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Aile</span>
                                                <span class="text-[--hitam] font-semibold">Corduroy Cap</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp159.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 2 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card12.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Pijakbumi</span>
                                                <span class="text-[--hitam] font-semibold">Kotta Hybrid</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp519.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 3 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card13.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Pijakbumi</span>
                                                <span class="text-[--hitam] font-semibold">Tiga Slip-On</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp549.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 4 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card14.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Aile</span>
                                                <span class="text-[--hitam] font-semibold">Short-Sleeve Shirt</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp285.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 5 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card15.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Pijakbumi</span>
                                                <span class="text-[--hitam] font-semibold">Naya Sandal</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp460.625</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 6 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card16.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">H&M</span>
                                                <span class="text-[--hitam] font-semibold">Regular Fit Textured-Weave Resort Shirt</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp 349.900</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 7 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card17.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Everyday Pants</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.490.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 8 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card18.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Aile</span>
                                                <span class="text-[--hitam] font-semibold">Sweater Polo Long-Sleeve</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp255.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 9 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card19.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Everyday Shorts </span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp1.990.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                    <div class="slide hidden" id="slide3">
                        <div class="wrapper">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto">
                                <!-- Card 1 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card07.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">ANGKASA Jacquard</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.890.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 2 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.7/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card 08.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">PAGISENJA - Weekend Shirt</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.690.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 3 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.1/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card06.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Accent Scarf</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp790.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 4 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/Cap Pa Green Pe Grey 2.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Aile</span>
                                                <span class="text-[--hitam] font-semibold">Corduroy Cap</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp159.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 5 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card17.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Everyday Pants</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.490.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 6 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.4/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card25.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Parka Jacket</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp3.290.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 7 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card26.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Everyday Shorts </span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp1.990.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 8 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card27.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">PLANTS - Denim Jacket</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp4.290.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 9 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.5/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="img/card28.png" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">Sukkha Citta</span>
                                                <span class="text-[--hitam] font-semibold">HARA - Vest</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp2.490.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                    <div class="slide hidden" id="slide4">
                        <div class="wrapper">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto">
                                <!-- Card 1 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 2 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 3 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 4 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 5 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 6 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 7 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 8 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 9 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                    <div class="slide hidden" id="slide5">
                        <div class="wrapper">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto">
                                <!-- Card 1 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 2 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 3 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 4 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 5 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 6 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 7 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 8 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                        <div class="flex justify-end items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-regular fa-pen-to-square text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">Customise</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                                <!-- Card 9 -->
                                <div class="relative">
                                    <div>
                                        <div class="cursor-pointer" onclick="openaaaa()">
                                            <div class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                                <div class="relative group">
                                                    <div class="flex flex-nowrap absolute p-2 space-x-5">
                                                        <div class="flex justify-start items-center bg-[--putih] w-fit border border-[--hitam] rounded-2xl px-2 py-1">
                                                            <i class="fa-regular fa-star text-[--hitam]"></i>
                                                            <span class="ml-1 text-xs font-bold text-[--hitam]">4.3/5</span>
                                                        </div>
                                                    </div>
                                                    <img src="uniqlo1.jpg" class="w-full h-96 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                    <div class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col p-4">
                                                <span class="text-lg font-bold">UNIQLO</span>
                                                <span class="text-[--hitam] font-semibold">Blouson Jacket Short Utility</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <span class="text-xl font-bold">Rp999.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <i id="heart-icon" class="fa-regular fa-heart fa-xl absolute top-[410px] cursor-pointer" onclick="toggleHeart(this)"></i>
                                        </div>

                                        <script>
                                            function openaaaa() {
                                            window.location.href = 'aaaa.html';
                                            }
                                        </script>

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
                        
                    <div class="flex w-full items-center mt-4 justify-between my-10">
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
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection