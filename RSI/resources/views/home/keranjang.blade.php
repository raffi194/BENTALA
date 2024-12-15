@extends('layout.home')

@section('title', 'Keranjang')

@section('content')
<div class="flex-grow">
        <div class="space-y-10">
            <div class="mt-24 ml-12">
                <ul class="flex flex-nowrap space-x-3">
                    <li>
                        <a href="#" class="text-[--hitam] py-2 rounded no-underline text-lg">Home</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right fa-xs relative top-0.5"></i>
                    </li>
                    <li>
                        <a href="#" class="text-[--hitam] py-2 rounded no-underline text-lg font-semibold">Keranjang</a>
                    </li>
                </ul>    
            </div>
            <div class="ml-12">
                <span class="text-6xl uppercase font-bold">keranjang</span>    
            </div>
        </div>

        <div class="flex flex-col items-center w-full px-10 pb-32">
            <ul class="flex flex-nowrap my-10 space-x-10 w-full">
                <li class="justify-center space-y-5 w-[60%]"> 
                    @foreach ($carts as $cart)
                        <div class="rectangle rounded-2xl border-2 border-[--hitam] w-full h-32">
                            <div class="flex h-full w-full overflow-hidden">
                                <ul class="flex flex-nowrap items-center space-x-5 mx-2 h-full text-[--hitam] w-full"> 
                                    <li class="flex items-center h-full"> 
                                        <img src="{{ asset('uploads/'. $cart->product->gambar)}}" alt="" class="h-28 rounded-lg">                                
                                    </li>
                                    <li class="flex items-center h-full flex-grow"> 
                                        <div>
                                            <ul class="space-y-1">
                                                <li class="flex items-center justify-between">
                                                    <span class="text-3xl font-bold">{{$cart->product->nama_barang}}</span>
                                                </li>
                                                <li class="flex items-center font-medium">
                                                    <span>Ukuran :</span>
                                                    <span>{{$cart->size}}</span>
                                                </li>
                                                <li class="flex items-center font-medium">
                                                    <span>Warna :</span>
                                                    <div class="flex items-center justify-center w-5 h-5 rounded-full border-2 border-[--putih] relative pilihwarna">
                                                        <div class="absolute inset-0 rounded-full bg-[--{{$cart->color}}]"></div>
                                                    </div>
                                                </li>
                                                <li class="flex items-center font-medium">
                                                    <span>Jumlah :</span>
                                                    <span>{{$cart->jumlah}}</span>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </li>
                                    <li class="flex items-center h-full"> 
                                        <div class="flex flex-col items-end space-y-10">
                                            <div class="flex justify-end">
                                                <a href="/hapus_keranjang/{{$cart->id}}">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </div>
                                            <span class="font-bold text-4xl">Rp{{ number_format($cart->total, 0, ',', '.') }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    
                    <div class="rectangle2 rounded-2xl h-20 border-2 border-[--hitam] mb-2" id="rectangle1">
                        <div class="flex h-full w-full overflow-hidden">
                            <ul class="flex flex-nowrap items-center space-x-5 mx-2 h-full text-[--hitam] w-full"> 
                                <li class="flex items-center h-full"> 
                                    <i class="fa-solid fa-location-dot fa-2xl" style="color: black;"></i>
                                </li>
                                <li class="flex items-center h-full flex-grow"> 
                                    <div>
                                        <span class="text-2xl font-bold text-[--hitam]">Lokasi Pengiriman</span>
                                    </div>
                                </li>
                                <li class="flex items-center h-full"> 
                                    <div class="flex flex-col items-end">
                                        <i class="fa-solid fa-angle-down fa-2xl cursor-pointer" style="color: black;" onclick="toggleDropdown('dropdown1', 'rectangle1', this)"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="dropdown1" class="dropdown border-2 border-[--hitam] bg-transparent p-2 rounded-lg">
                            <div class="flex">
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Informasi pribadi</span>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Nama Lengkap</span>
                                    <input type="text" id="addressInput1" class="mt-2 p-1 rounded mx-1 w-full border-b-2 border-[--hitam] focus:outline-none focus:border-[--hitam]" placeholder="Nama Lengkap">                                
                                </div>
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">No Telepon</span>
                                    <input type="text" id="countryInput" class="mt-2 p-1 rounded mx-1 w-full border-b-2 border-[--hitam] focus:outline-none focus:border-[--hitam]" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="flex mt-3">
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Detail Pengiriman</span>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Alamat</span>
                                <input type="text" id="recipientNameInput" class="mt-2 p-1 rounded mx-1 w-full border-b-2 border-[--hitam] focus:outline-none focus:border-[--hitam]" placeholder="Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur">
                                </div>
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Informasi Lebih Detail (Optional)</span>
                                    <input type="text" id="phoneInput" class="mt-2 p-1 rounded mx-1 w-full border-b-2 border-[--hitam] focus:outline-none focus:border-[--hitam]" placeholder="Edutech">
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Negara</span>
                                    <input type="text" id="recipientNameInput" class="mt-2 p-1 rounded mx-1 w-full border-b-2 border-[--hitam] focus:outline-none focus:border-[--hitam]" placeholder="Indonesia">
                                </div>
                                <div class="w-1/2 p-2">
                                    <span class="block font-bold text-xl">Kode Pos</span>
                                    <input type="text" id="phoneInput" class="mt-2 p-1 rounded mx-1 w-full border-b-2 border-[--hitam] focus:outline-none focus:border-[--hitam]" placeholder="65113">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rectangle2 rounded-2xl h-20 border-2 border-[--hitam] mb-2" id="rectangle2">
                        <div class="flex h-full w-full overflow-hidden">
                            <ul class="flex flex-nowrap items-center space-x-5 mx-2 h-full text-[--hitam] w-full"> 
                                <li class="flex items-center h-full"> 
                                    <i class="fa-solid fa-truck-fast fa-lg" style="color: black;"></i>
                                </li>
                                <li class="flex items-center h-full flex-grow"> 
                                    <div>
                                        <span class="text-2xl font-bold text-[--hitam]">Metode Pengiriman</span>
                                    </div>
                                </li>
                                <li class="flex items-center h-full"> 
                                    <div class="flex flex-col items-end">
                                        <i class="fa-solid fa-angle-down fa-2xl cursor-pointer" style="color: black;" onclick="toggleDropdown('dropdown2', 'rectangle2', this)"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="dropdown2" class="dropdown border-2 border-[--hitam] bg-transparent p-2 rounded-lg">
                            <div class="flex">
                                <div class="w-1/2 p-2 flex items-center">
                                    <input type="radio" id="shippingStandard" name="shipping" class="mr-2 square-radio appearance-none w-5 h-5 border-2 border-[--hitam] rounded-none cursor-pointer checked:bg-[--hitam] checked:border-transparent"/>                                    
                                    <div>
                                        <span class="block font-bold text-xl">Standard Shipping</span>
                                        <span class="block font-medium text-sm">Pengiriman reguler</span>
                                    </div>
                                </div>
                                <div class="w-1/2 p-2 flex items-center">
                                    <input type="radio" id="shippingEcoFriendly" name="shipping" class="mr-2 square-radio appearance-none w-5 h-5 border-2 border-[--hitam] rounded-none cursor-pointer checked:bg-[--hitam] checked:border-transparent"/>                                    
                                    <div>
                                        <span class="block font-bold text-xl">Eco-Friendly Shipping</span>
                                        <span class="block font-medium text-sm">Pengiriman dengan fokus pada metode yang lebih hijau</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-1/2 p-2 flex items-center">
                                    <input type="radio" id="shippingExpress" name="shipping" class="mr-2 square-radio appearance-none w-5 h-5 border-2 border-[--hitam] rounded-none cursor-pointer checked:bg-[--hitam] checked:border-transparent"/>                                    
                                    <div>
                                        <span class="block font-bold text-xl">Express Shipping</span>
                                        <span class="block font-medium text-sm">Pengiriman cepat yang menggunakan rute khusus</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rectangle2 rounded-2xl h-20 border-2 border-[--hitam] mb-2" id="rectangle3">
                        <div class="flex h-full w-full overflow-hidden">
                            <ul class="flex flex-nowrap items-center space-x-5 mx-2 h-full text-[--hitam] w-full"> 
                                <li class="flex items-center h-full"> 
                                    <i class="fa-solid fa-credit-card fa-lg" style="color : black;"></i>
                                </li>
                                <li class="flex items-center h-full flex-grow"> 
                                    <div>
                                        <span class="text-2xl font-bold text-[--hitam]">Detail Pembayaran</span>
                                    </div>
                                </li>
                                <li class="flex items-center h-full"> 
                                    <div class="flex flex-col items-end">
                                        <i class="fa-solid fa-angle-down fa-2xl cursor-pointer" style="color: black;" onclick="toggleDropdown('dropdown3', 'rectangle3', this)"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="dropdown3" class="dropdown border-2 border-[--hitam] bg-transparent p-2 rounded-lg">
                            <div class="flex">
                                <div class="p-2 items-center  flex h-full w-full">
                                    <ul class="flex flex-nowrap items-center space-x-5 mx-2 h-full text-[--hitam] w-full"> 
                                        <li class="flex items-center h-full"> 
                                            <img src="img/Logo_bca.png" class="w-32 h-auto" alt="Logo BCA">
                                        </li>
                                        <li class="flex items-center h-full flex-grow"> 
                                            <div>
                                                <span class="text-2xl font-bold text-[--hitam]">BCA</span>
                                            </div>
                                        </li>
                                        <li class="flex items-center h-full"> 
                                            <div class="flex flex-col items-end">
                                                <input type="radio" id="shippingExpress" name="shipping" class="square-radio appearance-none w-5 h-5 border-2 border-[--hitam] rounded-none cursor-pointer checked:bg-[--hitam] checked:border-transparent"/>                                    
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-2 items-center  flex h-full w-full">
                                    <ul class="flex flex-nowrap items-center space-x-5 mx-2 h-full text-[--hitam] w-full"> 
                                        <li class="flex items-center h-full"> 
                                            <img src="img/Logo_PayPal.png" class="w-32 h-auto"></img>
                                        </li>
                                        <li class="flex items-center h-full flex-grow"> 
                                            <div>
                                                <span class="text-2xl font-bold text-[--hitam]">PayPal</span>
                                            </div>
                                        </li>
                                        <li class="flex items-center h-full"> 
                                            <div class="flex flex-col items-end">
                                                <input type="radio" id="shippingExpress" name="shipping" class="square-radio appearance-none w-5 h-5 border-2 border-[--hitam] rounded-none cursor-pointer checked:bg-[--hitam] checked:border-transparent"/>                                    
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        function toggleDropdown(dropdownId, rectangleId, iconElement) {
                            const dropdown = document.getElementById(dropdownId);
                            const isOpen = dropdown.classList.contains('hidden');
                    
                            if (isOpen) {
                                dropdown.classList.remove('hidden');
                                iconElement.classList.remove('fa-angle-down');
                                iconElement.classList.add('fa-angle-up');
                            } else {
                                dropdown.classList.add('hidden');
                                iconElement.classList.remove('fa-angle-up');
                                iconElement.classList.add('fa-angle-down');
                            }
                        }

                        function toggleInput(inputId) {
                            const inputElement = document.getElementById(inputId);
                            if (inputElement.classList.contains('hidden')) {
                                inputElement.classList.remove('hidden'); 
                            } else {
                                inputElement.classList.add('hidden'); 
                            }
                        }

                        function toggleDropdown(dropdownId, rectangleId, iconElement) {
                            const dropdown = document.getElementById(dropdownId);
                            const isOpen = dropdown.classList.contains('dropdown-open');
                    
                            const initialMargins = {
                                'rectangle1': '20px',
                                'rectangle2': '20px',
                                'rectangle3': '20px'
                            };
                    
                            if (isOpen) {
                                dropdown.classList.remove('dropdown-open');
                    
                                const rectangles = ['rectangle1', 'rectangle2', 'rectangle3'];
                                rectangles.forEach(id => {
                                    document.getElementById(id).style.marginTop = initialMargins[id]; 
                                });
                    
                                iconElement.classList.remove('fa-angle-up');
                                iconElement.classList.add('fa-angle-down');
                            } else {
                                const rectangles = ['rectangle1', 'rectangle2', 'rectangle3'];
                                rectangles.forEach(id => {
                                    document.getElementById(id).style.marginTop = initialMargins[id]; 
                                    document.getElementById(id).querySelector('.dropdown').classList.remove('dropdown-open');
                                });
                    
                                dropdown.classList.add('dropdown-open');
                    
                                if (rectangleId === 'rectangle1') {
                                    document.getElementById('rectangle2').style.marginTop = '390px'; 
                                } else if (rectangleId === 'rectangle2') {
                                    document.getElementById('rectangle3').style.marginTop = '170px';
                                }
                    
                                iconElement.classList.remove('fa-angle-down');
                                iconElement.classList.add('fa-angle-up');
                            }
                        }
                    
                    </script>
                
                    <style>
                        .dropdown {
                            display: none;
                        }
                        .dropdown-open {
                            display: block;
                        }
                    </style>
                </li>
                <li class="justify-center space-y-5 w-[40%] relative">
                    <div class="rectangle rounded-2xl h-fit border-2 border-[--hitam]">
                        <div>
                            <div class="flex w-full">
                                <ul class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start pt-5 border-b-2 border-[--hitam] py-5"> 
                                    <li class="flex items-start"> 
                                        <div>
                                            <span class="text-2xl font-bold text-[--hitam]">Subtotal</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-grow"> 
                                        <div>
                                            <span class="text-2xl font-bold text-[--hitam]">(2 Produk)</span>
                                        </div>
                                    </li>
                                    <li class="flex items-end"> 
                                        <div class="flex flex-col items-end">
                                            <span class="text-2xl font-bold text-[--hitam]">Rp1.158.000</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <div class="flex w-full overflow-hidden">
                                    <ul class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start border-b-2 border-[--hitam] py-5"> 
                                        <li class="flex items-start h-full flex-grow"> 
                                            <div>
                                                <span class="text-2xl font-bold text-[--hitam]">Pengiriman</span>
                                            </div>
                                        </li>
                                        <li class="flex items-end h-full"> 
                                            <div class="flex flex-col items-end">
                                                <span class="text-2xl font-bold text-[--hitam]">Rp0</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex w-full overflow-hidden">
                                    <ul class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start pt-5"> 
                                        <li class="flex items-start h-full flex-grow"> 
                                            <div>
                                                <span class="text-4xl uppercase font-bold text-[--hitam]">Total</span>
                                            </div>
                                        </li>
                                        <li class="flex items-end h-full"> 
                                            <div class="flex flex-col items-end">
                                                <span class="text-4xl font-bold text-[--hitam]">Rp1.158.000</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex justify-center items-center pt-10">
                                    <a href="#" class="w-[80%] py-2 bg-[--ijo] text-[--putih] border-2 border-[--hitam] no-underline rounded-xl text-center hover:bg-[--hoverijo]">Buy Now</a>
                                </div>
                                <div class="flex justify-center items-center py-3">
                                    <span class="w-[80%] text-[--hitam] font-medium text-center">Pengiriman gratis diatas  Rp.1.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle rounded-2xl h-fit border-2 border-[--hitam]">
                        <div>
                            <div class="flex w-full">
                                <div class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start pt-5 border-b-2 border-[--hitam]"> 
                                    <div class="flex items-start"> 
                                        <div>
                                            <span class="text-2xl font-bold text-[--hitam]">Kalkulator Emisi Karbon</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex w-full overflow-hidden">
                                    <ul class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start mt-5"> 
                                        <li class="flex items-start h-full flex-grow"> 
                                            <div>
                                                <span class="text-2xl font-bold text-[--hitam]">Produksi</span>
                                            </div>
                                        </li>
                                        <li class="flex items-end h-full"> 
                                            <div class="flex flex-col items-end">
                                                <span class="text-2xl font-bold text-[--hitam]">15 kg CO2</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex w-full overflow-hidden">
                                    <div class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-1/2 justify-start"> 
                                        <div class="flex items-start flex-grow"> 
                                            <div>
                                                <span class="text-md font-medium text-[--hitam]">Bahan daur ulang menghasilkan emisi 15 kg CO2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full overflow-hidden">
                                    <ul class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start mt-3"> 
                                        <li class="flex items-start h-full flex-grow"> 
                                            <div>
                                                <span class="text-2xl font-bold text-[--hitam]">Pengiriman</span>
                                            </div>
                                        </li>
                                        <li class="flex items-end h-full"> 
                                            <div class="flex flex-col items-end">
                                                <span class="text-2xl font-bold text-[--hitam]">0.08 kg CO2</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex w-full overflow-hidden">
                                    <div class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-1/2 justify-start mb-2"> 
                                        <div class="flex items-start flex-grow"> 
                                            <div>
                                                <span class="text-md font-medium text-[--hitam]">0.01 kg CO2 per km</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full">
                                    <div class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start border-b-2 border-[--hitam] mt-4"> 
                                        <div class="flex items-start"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full overflow-hidden">
                                    <ul class="flex flex-nowrap space-x-5 mx-5 h-auto text-[--hitam] w-full justify-start my-5"> 
                                        <li class="flex items-start h-full flex-grow"> 
                                            <div>
                                                <span class="text-4xl uppercase font-bold text-[--hitam]">Total</span>
                                            </div>
                                        </li>
                                        <li class="flex items-end h-full"> 
                                            <div class="flex flex-col items-end">
                                                <span class="text-4xl font-bold text-[--hitam]">15.08 kg CO2</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex justify-center items-center mb-5">
                                    <span class="w-[100%] text-[--hitam] font-medium text-center">Emisi Karbon sudah dibulatkan sesuai dengan perhitungan kami.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection

