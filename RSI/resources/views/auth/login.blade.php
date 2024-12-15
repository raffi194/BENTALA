<!-- <?php 
   session_start();
   ?> -->
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/styleguide.css">
       <link rel="stylesheet" href="css/output.css">   
       <script src="https://cdn.tailwindcss.com"></script>
       <title>Login</title>
   </head>
   <body class="flex items-center justify-center h-screen bg-gray-200">
       <!-- Background Image -->
       <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('/auth/img/background_login.png');"></div>
   
       <!-- Login Form -->
       <div class="bg-white rounded-3xl shadow-lg p-8 w-full max-w-sm">
           <header class="text-2xl font-bold text-center mb-6" style="color: var(--ijo);">Sign In</header>
           <form action="" method="post">
               <div class="mb-4">
                   <input type="text" name="email" id="email" placeholder="Email" autocomplete="on" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-400 focus:outline-none">
               </div>
   
               <div class="mb-4">
                   <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-400 focus:outline-none">
               </div>
   
               <div class="mb-6">
                   <input type="submit" class="w-full bg-teal-500 font-medium text-white py-2 rounded-lg hover:bg-teal-700 cursor-pointer" name="submit" value="Login">
               </div>
   
               <div class="text-center">
                   <a href="register.htm" class="text-xs font-medium text-teal-600 hover:underline hover:font-bold">New to Bentala?</a>
               </div>
           </form>
       </div>
   </body>
   </html>
   