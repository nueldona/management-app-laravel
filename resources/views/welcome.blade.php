<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <main class="relative antialiased bg-gradient-to-br from-gray-200 to-white w-full h-screen overflow-hidden">
            <section class="absolute top-1/3 left-1/3 w-full">
                <div>
                    <svg
                      class="w-20 h-20 mx-auto md:float-left fill-stroke text-gray-800"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                      ></path>
                    </svg>
                    <h1 class="text-5xl text-gray-800 font-bold">Users Area</h1>
                    <p class="mx-auto md:mx-0 text-gray-500">
                      Simple User Management system using Laravel MVC
                    </p>
                    <div class="mx-20 my-4">
                        <a href="{{ url('/users') }}" class="bg-transparent hover:bg-blue-400 text-gray-500 font-semibold hover:text-white py-2 px-4 border border-blue-200 hover:border-transparent rounded" >view all users</a>
                        <a href="{{ url('/users/create') }}" class="bg-transparent hover:bg-green-500 text-gray-500 font-semibold hover:text-white py-2 px-4 border border-green-200 hover:border-transparent rounded" >Add new user</a>
                    </div>
                  </div>
            </section>
        </main>
    </body>
</html>
