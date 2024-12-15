<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleguide.css">
    <link rel="stylesheet" href="css/output.css">  
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Background Image -->
    <div 
        class="absolute inset-0 bg-cover bg-center blur-sm" 
        style="background-image: url('{{ asset('uploads/background_login.png') }}'); z-index: -1;">
    </div>

    <!-- Registration Form Container -->
    <div class="bg-white shadow-lg rounded-3xl w-96 max-w-md p-8">

        <!-- Header -->
        <header class="text-2xl font-bold text-center mb-6" style="color: var(--ijo)">
            Create an Account
        </header>

        <!-- Registration Form -->
        <form action="/register_member" method="POST">
            @csrf

            <!-- Nama Field -->
            <div class="mb-4">
                <span>Nama Lengkap</span>
                <input required type="text" name="nama_member" id="nama_member" 
                       placeholder="Budi" 
                       required 
                       class="w-80 mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <span>Email</span>
                <input required type="email" name="email" id="email" 
                       placeholder="yourname@example.com" 
                       required 
                       class="w-80 mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none">
            </div>

            <!-- Tanggal Lahir Field -->
            <div class="mb-4">
                <span>Tanggal Lahir</span>
                <input required type="date" name="lahir" id="lahir" 
                       placeholder="17-08-1945" 
                       required 
                       class="w-80 mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none">
            </div>

            <!-- HP Field -->
            <div class="mb-4">
                <span>Nomor Handphone</span>
                <input required type="text" name="no_hp" id="no_hp" 
                       placeholder="081234567890" 
                       required 
                       class="w-80 mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none">
            </div>

            <!-- HP Field -->
            <div class="mb-4">
                <span>Jenis Kelamin</span>
                <select required name="kelamin" id="kelamin" required 
                    class="w-full px-4 py-5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-400 focus:outline-none">
                    <option class="gr" value="" disabled selected>Jenis Kelamin</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
               </select>
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <span>Password</span>
                <input required type="password" name="password" id="password" 
                       placeholder="Password" 
                       required 
                       class="w-80 mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <span>Konfirmasi Password</span>
                <input required type="password" name="konfirmasi_password" id="konfirmasi_password" 
                       placeholder="Password" 
                       required 
                       class="w-80 mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none">
            </div>

            <!-- Register Button -->
            <div class="mb-6">
                <button type="submit"  
                        class="w-80 bg-teal-500 text-white font-medium py-2 rounded-md hover:bg-teal-600 focus:ring-2 focus:ring-teal-400">
                    Register
                </button>
            </div>
            
            @if (Session::has('errors'))
            <ul>
                @foreach (Session::get('errors') as $error)
                <li style="color:red"> {{$error[0]}} </li>
               @endforeach
            </ul>
            @endif
            

            <!-- Links -->
            <div class="text-center text-sm text-gray-600">
                Already a member? 
                <a href="/login_member" class="text-teal-600 font-medium hover:underline hover:font-bold">Sign In</a>
            </div>

            <!-- Footer -->
            <div class="text-center text-xs text-gray-500 mt-6">
                By continuing, you agree to the 
                <a href="#" class="text-teal-600 hover:underline hover:font-bold">Terms of Service</a> 
                and acknowledge the 
                <a href="#" class="text-teal-600 hover:underline hover:font-bold">Privacy Policy</a>.
            </div>
        </form>
    </div>
</body>
</html>
