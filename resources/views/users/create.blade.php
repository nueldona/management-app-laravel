<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- component -->
  <div class="flex justify-center items-center h-screen w-full antialiased bg-gradient-to-br from-gray-200 to-white">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Add new user</h1>
            <form action="/users" method="POST">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                    <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="phone">Phone</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="phone" id="phone">
                </div>
                <div class="flex mb-4">
                  <button class="block bg-blue-500 hover:bg-blue-600 text-white uppercase text-lg mx-auto py-2 px-4 rounded" type="submit">Save</button>
                  <a href="/users" class="block bg-gray-500 hover:bg-gray-600 text-white uppercase text-lg mx-auto py-2 px-4 rounded" type="submit">cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>