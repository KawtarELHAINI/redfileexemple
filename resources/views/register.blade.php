
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">
    {{-- <div class="flex h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/image1.jpg');"> --}}
        {{-- <div class="w-full flex items-center justify-center"> --}}
            {{-- <div class="max-w-2xl m-auto bg-slate-100 rounded p-5 w-4/5 text-white">  --}}
                <div class="banner fixed inset-0 z-[-40]"> <video autoplay muted loop> <source src="images/car3.mp4" type="video/mp4"> </video> </div>

<div class="min-h-screen  flex justify-center items-center">
  
    <div class="py-12 px-12 bg--300  rounded-2xl shadow-xl z-20">
    
        <h1 class="text-3xl text-white font-bold text-center mb-4 cursor-pointer ">Create An Account</h1>
        {{-- <img src="images/logo.png" alt="Logo" class="w-16 h-16 ml-4"> --}}

       
        <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex mb-6">
                <div class="w-1/3 pr-2">
                    <label class="block mb-2 text-[#0037AE]" for="firstname">FirstName</label>
                    <input id="firstname"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500"
                        type="text" name="firstname" value="{{old('firstname')}}">
                </div>
                <div class="w-1/3 px-2">
                    <label class="block mb-2 text-[#0037AE]" for="lastname">LastName</label>
                    <input id="lastname"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500"
                        type="text" name="lastname" value="{{old('lastname')}}">
                </div>
                <div class="w-1/3 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="email">Email</label>
                    <input id="email"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500"
                        type="email" name="email" value="{{old('email')}}">
                </div>
            </div>                    
            <div class="flex mb-6">
                <div class="w-1/2 pr-2">
                    <label class="block mb-2 text-[#0037AE]" for="password">Password</label>
                    <input
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500"
                        type="password" name="password" value="{{old('password')}}">
                </div>
                <div class="w-1/2 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="cpassword"> Confirm Password</label>
                    <input
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500"
                        type="password" name="password_confirmation">
                </div>
            </div>
            
            <div class="flex mb-6">
                <div class="w-2/5 pr-2">
                    <label class="block mb-2 text-[#0037AE] " for="image">Your Profile</label>
                    <input type="file" name="image" accept="image/*" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500">
                </div>
                <div class="w-2/5 px-2">
                    <label class="block mb-2 text-[#0037AE]" for="phone">Phone</label>
                    <input id="phone" class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500" type="number" name="phone" value="{{old('phone')}}">
                </div>
                <div class="w-1/5 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="role">Role</label>
                    <select name="role" class="block text-sm py-3 px-4 rounded-lg w-full border outline-blue-500">
                        <option>Selection of roles:</option>
                        <option value="utilisateur">Renter</option>
                        <option value="organisateur">client</option>
                    </select>
                </div>
            </div>
            <div>
                <input class="w-full py-2 text-xl text-white bg-blue-400 rounded-lg hover:bg-blue-500 transition-all" type="submit" value="REGISTER"> <!-- Updated color to #0037AE and hover color to #004DBB -->
            </div>
        </form>
        <div class="text-center">
            <p class="text-[#0037AE]">Already have an account? <a href="/login" class="font-bold text-[#0037AE]">LOGIN HERE </a><a href="/" class="font-bold text-[#0037AE]">OR JUST Go BACK</a></p>
        </div>
    </div>
</div>
</div>
    
  </div>
  
   