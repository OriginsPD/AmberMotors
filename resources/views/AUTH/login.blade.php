<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/app.css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- component -->
<div class="flex items-center justify-center">
  <div class="w-full max-w-md">
    <form action ="{{ route('login') }}" method="POST" class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
      @csrf 
      <div
        class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
      >
       Login
      </div>
      <div class="mb-4">
        <label
          class="block text-gray-700 text-sm font-normal mb-2"
          for="username"
        >
          Email
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="email"
          v-model="form.email"
          type="email"
          required
          autofocus
          placeholder="Email"
        />
      </div>
      <div class="mb-6">
        <label
          class="block text-gray-700 text-sm font-normal mb-2"
          for="password"
        >
          Password
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          v-model="form.password"
          type="password"
          placeholder="Password"
          name="password"
          required
          autocomplete="current-password"
        />
      </div>
      <div class="flex items-center justify-between">
        <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">Sign In</button>
        
      </div>
     <div class="mt-4 "> <a href="{{ route('register.show') }}" class="no-underline text-gray-500 hover:text-gray-700">Don't have an Account?</a></div>
    </form>
    <p class="text-center text-gray-500 text-xs">
      {{-- &copy;2020 Gau Corp. All rights reserved. --}}
    </p>
  </div>
</div>
</body>
</html>