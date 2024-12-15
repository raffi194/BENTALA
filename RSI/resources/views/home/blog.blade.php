@extends('layout.home')

@section('title', 'Blog')

@section('content')
<div class="h-fit">
    <div class="mt-24 ml-12 mb-5">
        <div class="flex flex-nowrap">
            <span class="text-[--hitam] rounded no-underline text-3xl font-bold uppercase">Blog</span>
        </div>
    </div>

    <div class="w-1/3 mb-5">
        <div class="ml-12">
            <div class="flex flex-nowrap">

            </div>
        </div>
    </div>

    <div class="ml-12 mb-5 w-1/4">
        <div class="flex flex-nowrap">
            <span class="text-[--hitam] rounded no-underline text-xs font-medium uppercase">Discover a world of
                inspiration, spirituality, and practical insights tailored for the ECO Fashion.</span>
        </div>
    </div>
    <div class="h-fit flex-grow flex justify-center mt-5">
    <div class="w-[80%] space-y-10">
        <div id="viewallcontent" class="visible">
            <div class="content w-full mx-auto">
                <div class="relative">
                    <div class="slider overflow-hidden">
                        <div class="slide" id="slide1">
                            <div class="wrapper">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full mx-auto">
                                    <!-- Card 1 -->
                                    @foreach ($blogs as $blog)
                                    <div class="relative">
                                        <div
                                            class="bg-[--putih] rounded-lg shadow-lg overflow-hidden border-2 border-[--hitam]">
                                            <div class="relative group">
                                                <img src="{{ asset('uploads/'. $blog->gambar)}}" alt="Product 1"
                                                    class="w-full h-72 object-cover shadow-lg transition-shadow duration-300 hover:shadow-none">
                                                <div
                                                    class="absolute inset-0 bg-[--hitam] opacity-30 transition-opacity duration-300 group-hover:opacity-0">
                                                </div>
                                            </div>
                                            <div class="flex flex-col my-4 mx-2">
                                                <span class="text-3xl font-bold uppercase">{{ $blog->judul }}</span>
                                                <span class="text-[--hitam] font-semibold">{{ Str::words($blog->isi, 10) }}...</span>
                                                <div class="flex justify-between items-center w-full mt-2">
                                                    <div class="flex h-full w-full overflow-hidden">
                                                        <div
                                                            class="flex flex-nowrap items-center space-x-3 mx-2 h-full text-[--hitam] w-full">
                                                            <div class="h-8 w-8 rounded-full overflow-hidden border-2 border-[--hitam]">
                                                                <img src="{{ asset('uploads/profile_pictures/'. $blog->member->profile_picture)}}" alt="Profile Picture" class="h-10 rounded-full">
                                                            </div>
                                                            <div class="flex items-center h-full">
                                                                <div>
                                                                    <span class="text-xs font-bold">{{$blog->member->nama_member}}</span>
                                                                    <div class="">
                                                                        <div
                                                                            class="flex flex-nowrap items-center space-x-2">
                                                                            <div class="flex items-center">
                                                                                <span class="font-medium text-xs">{{$blog->created_at}}</span>
                                                                            </div>
                                                                            <div class="flex items-center">
                                                                                <i class="fa-solid fa-circle"
                                                                                    style="font-size: 5px;"></i>
                                                                            </div>
                                                                            <div class="flex items-center">
                                                                                <span class="font-medium text-xs">5
                                                                                    min read</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            function getFirstTenWords($text) {
                                                // Menggunakan explode untuk memecah teks menjadi array kata
                                                $words = explode(' ', $text);
                                                
                                                // Ambil hanya 10 kata pertama
                                                $firstTenWords = array_slice($words, 0, 10);
                                                
                                                // Gabungkan kembali kata-kata tersebut menjadi string
                                                return implode(' ', $firstTenWords);
                                            }
                                        </script>
                                    </div>
                                    @endforeach
                        
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

                                <div class="flex justify-center items-center mb-10 mt-10">
                                    <div class="slider-dots flex justify-start flex-grow space-x-2">
                                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"
                                            onclick="currentSlide(1)"></div>
                                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"
                                            onclick="currentSlide(2)"></div>
                                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"
                                            onclick="currentSlide(3)"></div>
                                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"
                                            onclick="currentSlide(4)"></div>
                                        <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"
                                            onclick="currentSlide(5)"></div>
                                    </div>
                                    <div class="slider-buttons flex justify-end space-x-4">
                                        <div class="buttonpag cursor-pointer flex items-center justify-center w-10 h-10 border-2 border-black hover:text-white rounded-full hover:bg-[--hitam] transition duration-300"
                                            onclick="plusSlides(-1)">
                                            <i class="icon fa-solid fa-arrow-left"></i>
                                        </div>
                                        <div class="buttonpag cursor-pointer flex items-center justify-center w-10 h-10 border-2 border-black hover:text-white rounded-full hover:bg-[--hitam] transition duration-300"
                                            onclick="plusSlides(1)">
                                            <i class="icon fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection