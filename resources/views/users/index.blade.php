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

    .table {
      border-spacing: 0 15px;
    }

    i {
      font-size: 1rem !important;
    }

    .table tr {
      border-radius: 20px;
    }

    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
      border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
      border-radius: .625rem 0 0 .625rem;
    }
  </style>
</head>

<body class="antialiased">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- component -->
  <main class="bg-gray-200 w-full h-screen text-gray-900 px-12 py-5">
    <section>
      <div class="py-2 px-4 flex justify-between">
        <h1 class="text-2xl">
          Users
        </h1>
        <a href="{{ url('/users/create') }}" class="bg-transparent hover:bg-green-500 text-gray-500 font-semibold hover:text-white py-2 px-4 border border-green-400 hover:border-transparent rounded" >Add new user</a>
      </div>
      <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
          <tbody>
            <tr class="border-b">
              <th class="text-left p-3 px-5">Name</th>
              <th class="text-left p-3 px-5">Email</th>
              <th class="text-left p-3 px-5">Phone</th>
              <th class="text-left p-3 px-5">Action</th>
              <th></th>
            </tr>
            @if ($users->count() === 0)
              <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5 bg-transparent">Empty</td>
                <td class="p-3 px-5 bg-transparent">Empty</td>
                <td class="p-3 px-5 bg-transparent">Empty</td>
                <td class="p-3 px-3">
                  <a href="#" class="text-gray-500 hover:text-gray-700  mx-2">
                    <i class="material-icons-outlined text-base">edit</i>
                  </a>
                  <a href="#" class="text-gray-500 hover:text-gray-700  ml-2">
                    <i class="material-icons-round text-base">delete_outline</i>
                  </a>
                </td>
              </tr>
            @else   
              @foreach($users as $user)
              <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5 bg-transparent">{{ $user->name }}</td>
                <td class="p-3 px-5 bg-transparent">{{ $user->email }}</td>
                <td class="p-3 px-5 bg-transparent">{{ $user->phone }}</td>
                <td class="p-3 px-5 flex justify-end">
                  <a href="/users/{{ $user->id }}/edit" class="text-gray-500 hover:text-gray-700  mx-2">
                    <i class="material-icons-outlined text-base">edit</i>
                  </a>
                  <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button href="#" class="text-red-500 hover:text-red-700  ml-2 bg-transparent">
                      <i class="material-icons-round text-base">delete_outline</i>
                    </button>
                  </form>

                </td>
              </tr>
              @endforeach 
            @endif
            
          </tbody>
        </table>
      </div>
    </section>
  </main>
</body>

</html>