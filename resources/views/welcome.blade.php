

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
                 <nav class="flex justify-between  h-[80px] text-white w-[96.55rem]">

                    <div class="px-5 xl:px-12 py-6 flex w-full items-center ">
                        <a  href="#">
                            <img class="flex flex-shrink-0 text-gray-800 mr-16" src="./images/logo.png"
                            alt="" width="100" height="100">
                    
                        </a>
                        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                            <li><a class="text-white" href="#">HOME</a></li>
                            <li><a class="text-white" href="#">SERVICE</a></li>
                            <li><a class="text-white" href="#">NEWEST CARS</a></li>
                            <li><a class="text-white" href="#">BRANDS</a></li>
                            <li><a class="text-white" href="/register">CONTACT US</a></li>

                        </ul>
                    
                        <!-- <a href="/login"class="p-2 mr-4 px-10 bg-blue-800 hover:bg-black hover:text-white rounded-lg">login</button>
                        <a href="/registerr" class="p-2 px-10 bg-blue-800 hover:bg-black hover:text-white rounded-lg">register</a> -->
                    </div>
                    
                    <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>
                    
                    </nav>
   
                    <div class="banner fixed inset-0 z-[-40]"> <video autoplay muted loop> <source src="images/car3.mp4" type="video/mp4"> </video> </div>

                    <div class=" inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 justify-center items-center">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <div class="bg-black bg-opacity-50 p-6 rounded">
                    <h1 class="text-2xl font-extrabold sm:text-3xl text-white">
                    
                        <strong class="block font-extrabold text-[#00008B] text-4xl mt-2"> WELCOME TO AUTOKAW .
                        </strong>
                    </h1>

                    <p class="mt-2 max-w-lg sm:text-xl/relaxed text-white">
                    you can rent your car easily,so hurry up!
                    </p>

                    <div class="mt-4 text-center">
                        <a href="/login"
                            class="block rounded bg-[#00008B] px-12 py-3 text-sm font-medium text-white shadow hover:bg-[#00008B] focus:outline-none focus:ring active:bg-[#00008B] sm:w-auto">
                            LOGIN
                        </a>
                    </div>
                </div>
            </div>
        </div>
                    <script src="https://cdn.tailwindcss.com"></script>
                </body>
                
                </html>

