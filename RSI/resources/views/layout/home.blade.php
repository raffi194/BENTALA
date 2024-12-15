<!DOCTYPE html>
<html lang="en" >
<head>
    <title>@yield('title', 'Home')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="Width=device-width initial-sccale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="stylesheet" href="{{ asset('front/css/styleguide.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'>
    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
    <link rel="icon" type="png" src="{{ asset('front/img/logo bentala putih.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body>
    <nav class="fixed top-0 w-full h-14 z-10 bg-[--putih]">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-1">
                <div class="absolute left-10 top-4 h-16 w-16 space-x-10">
                    <ul class="sm:flex space-x-10">
                        <li><a class="text-[--hitam] hover:bg-[--hitam] hover:text-[--putih] px-3 py-2 rounded no-underline cursor-pointer" onclick="openKoleksi()">Koleksi</a></li>
                        <li><a class="text-[--hitam]  hover:bg-[--hitam] hover:text-[--putih] px-3 py-2 rounded no-underline cursor-pointer" onclick="openBlog()">Blog</a></li>
                        <li><a class="text-[--hitam]  hover:bg-[--hitam] hover:text-[--putih] px-3 py-2 rounded no-underline cursor-pointer" onclick="openTentang()">Tentang</a></li>
                    </ul>
                    <script>
                        function openKoleksi() {
                            window.location.href = '/koleksi';
                        }
                        
                        function openBlog() {
                            window.location.href = '/blog';
                        }
                        
                        function openTentang() {
                            window.location.href = '/tentang';
                        }
                    </script>
                </div>
                <div class="absolute top-2.5 left-1/2 transform -translate-x-1/2">
                    <a href="/" id="logo">
                        <img src="{{ asset('front/img/Logo BENTALA.png') }}" alt="BENTALA" class="w-15 h-9">
                    </a>
                </div>
                <div class="absolute top-2.5 right-5">
                    <form class="space-x-10 flex items-center">
                        <div class="relative">
                            <input type="text" placeholder="Search" class="bg-transparent text-[--item] border-2 border-[--hitam] rounded-lg py-1 pl-10 pr-3">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <button class="btn" type="button">
                            <div onclick="openCart()">
                                <i class="fa-solid fa-bag-shopping fa-lg" style="color: var(--hitam);"></i>
                            </div>
                        </button>
                        <button class="btn" type="button">
                            @if (Auth::guard('webmember')->check())
                            <a onclick="openProfile()">
                                <div class="h-8 w-8 rounded-full overflow-hidden border-2 border-[--hitam]">
                                    <img src="{{ auth()->guard('webmember')->user()->profile_picture_url }}" alt="Profile Picture" class="h-full w-full object-cover">
                                </div>
                            </a>
                            @else
                            <a href="/login_member">
                                <i class="fa-regular fa-user fa-lg" style="color: var(--hitam);"></i>
                            </a>
                            @endif
                        </button>

                        <script>
                            function openCart() {
                                window.location.href = '/keranjang';
                            }

                            function openProfile() {
                                window.location.href = '/profil';
                            }
                        </script>

                    </form>
                </div>
            </div>
        </div>
    </nav>
  
@yield('content')

<footer class="bg-[--hitam] text-[--putih] py-8">
    <div class="mx-auto px-4">
               <div class="relative">
                   <div class="logo mb-4 md:mb-0 absolute left-0">
                        <img class="company-logo-icon h-10" alt="Logo" src="{{ asset('front/img/logo bentala putih.png') }}">
                   </div>
               </div>
               <div class="flex md:flex-row justify-center items-center">
                   <div class="flex flex-row space-x-14 mb-4 md:mb-0">
                       <a href="/koleksi" class="hover:underline">Koleksi</a>
                       <a href="/tentang" class="hover:underline">FAQ</a>
                       <a href="/tentang" class="hover:underline">Customer Service</a>
                       <a href="/tentang" class="hover:underline">Pengembalian</a>
                       <a href="/tentang" class="hover:underline">Shipping Policy</a>
                   </div>
               </div>
               <div class="relative">
                   <div class="social-links flex space-x-4 absolute right-0 ">
                       <i class="fa-brands fa-facebook fa-lg cursor-pointer" onclick="openVideo()"></i>
                       <i class="fa-brands fa-instagram fa-lg cursor-pointer" onclick="openInstagram()"></i>
                       <i class="fa-brands fa-twitter fa-lg cursor-pointer" onclick="openX()"></i>
                       <i class="fa-brands fa-linkedin fa-lg cursor-pointer" onclick="openlinkedin()"></i>
                       <i class="fa-brands fa-youtube fa-lg cursor-pointer" onclick="openyt()"></i>
                   </div>
                   <script>
                       const logo = document.getElementById('logo');
                       logo.addEventListener('click', function() {
                           window.location.href =front/ 'index.html'; 
                       });
               
                       function openInstagram() {
                           window.open('https://www.instagram.com/raffi1__/', '_blank');
                       }
               
                       function openX() {
                           window.open('https://x.com/Raffi1__', '_blank');
                       }
               
                       function openlinkedin() {
                           window.open('https://www.linkedin.com/in/muhamadraffi/', '_blank');
                       }
               
                       function openyt() {
                           window.open('admin produk.html', '_blank');
                       }
               
                       function openVideo() {
                           const videoPopup = document.getElementById('videoPopup');
                           const myVideo = document.getElementById('myVideo');
                           videoPopup.style.display = 'flex'; 
                           myVideo.play(); 
                       }
               
                       function answer(response) {
                           const videoPopup = document.getElementById('videoPopup');
                           videoPopup.style.display = 'none'; 
                           const myVideo = document.getElementById('myVideo');
                           myVideo.pause(); 
                           myVideo.currentTime = 0; 
                       }
                   </script>
               </div>
               <div class="credits mt-8">
                   <div class="divider border-t border-gray-600 mb-4"></div>
                   <div class="flex flex-col md:flex-row justify-center items-center">
                       <div class="flex space-x-4 text-sm mt-2 md:mt-0">
                           <div class="text-sm">© 2024 Relume. All rights reserved.</div>
                           <a href="#" class="hover:underline">Privacy Policy</a>
                           <a href="#" class="hover:underline">Terms of Service</a>
                           <a href="#" class="hover:underline">Cookies Settings</a>
                       </div>
                   </div>
               </div>
               </footer>
               
               <div id="videoPopup" class="fixed inset-0 bg-black bg-opacity-75 items-center justify-center hidden">
                   <div id="videoContent" class="relative w-screen h-screen flex items-center justify-center">
                       <video id="myVideo" class="w-full h-full object-cover" loop>
                           <source src="front/img/You are an idiot!! - Zuhuk (480p, h264, youtube).mp4" type="video/mp4">
                       </video>
                       <div id="question" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white rounded-lg transition-all duration-300 inline-flex flex-col items-center">
                           <p class="text-lg font-semibold text-center">Raffi ganteng? Yes or No</p>
                           <div class="flex justify-center mt-4 space-x-4">
                               <button id="yesButton" class="bg-[--hitam] text-white px-4 py-2 rounded transition duration-200">Yes</button>
                               <button id="noButton" class="bg-[--hitam] text-white px-4 py-2 rounded transition duration-200">No</button>
                           </div>
                       </div>
                   </div>
               </div>
               
               <script>
                   function moveQuestion() {
                       const question = document.getElementById('question');
                       const videoContent = document.getElementById('videoContent');
                       
                       if (!question || !videoContent) return;
                   
                       const containerWidth = videoContent.clientWidth;
                       const containerHeight = videoContent.clientHeight;
                   
                       const questionWidth = question.offsetWidth;
                       const questionHeight = question.offsetHeight;
                   
                       const randomX = Math.max(0, Math.min(containerWidth - questionWidth, Math.random() * containerWidth));
                       const randomY = Math.max(0, Math.min(containerHeight - questionHeight, Math.random() * containerHeight));
                   
                       question.style.left = `${randomX}px`;
                       question.style.top = `${randomY}px`;
                       question.style.transform = 'translate(0, 0)'; 
                   }
               
                   const yesButton = document.getElementById('yesButton');
                   const noButton = document.getElementById('noButton');
               
                   noButton.addEventListener('mouseenter', () => {
                       moveQuestion(); 
                   });
               
                   yesButton.addEventListener('click', () => {
                       window.location.href ='index.html';
                   });
               </script>


    <script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>
    <script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>
    <script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('js')

    </body>
</html>

