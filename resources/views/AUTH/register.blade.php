<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/app.css" rel="stylesheet">
  <title>Document</title>
</head>
<!-- component -->
<body class="font-mono bg-gray-500">
  <!-- Container -->
  <div class="container mx-auto">
    <div class="flex justify-center px-6 my-12">
      <!-- Row -->
      <div class="w-full xl:w-3/4 lg:w-11/12 flex">
        <!-- Col -->
        <div
          class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
          style="background-image: url('http://www.hdcarwallpapers.in/hdwallpapers/bmw-motorcycle-sport-wallpapers.jpg')"
        ></div>
        <!-- Col -->
        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
          <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
          <form action ="{{ route('register') }} "method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" >
            @csrf
            <div class="mb-4 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                  Full Name
                </label>
                <input
                  class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id=""
                  name="fullname"
                  type="text"
                  placeholder="Full Name"
                  required
                />
              </div>
              <div class="mb-4 md:mr-2 md:mb-0">
               <span class="text-red-500">
                  @error('email')
                  {{ $message }}
                @enderror
              </span>
                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                  Email
                </label>
                <input
                  class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id=""
                  required
                  name="email"
                  type="email"
                  placeholder="example@gmail.com"
                />
              </div>
            </div>
            
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
           Phone.no
              </label>
              <input
                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                name="phone_info"
                type="number"
                required
                placeholder="telephone #"
              />
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                Address
          </label>
          <input
            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="address"
            type="text"
            required
            placeholder="Address"
          />
        </div>
            <div class="mb-4 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                  Password
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="password"
                  type="password"
                  name="password"
                  required
                  placeholder="******************"
                />
              </div>
              <div class="md:ml-2">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                  Confirm Password
                </label>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="c_password"
                  type="password"
                  name="password_confirm"
                  required
                  placeholder="******************"
                />
              </div>
              
            </div>
            <div>
              <span class="text-red-500">
                @error('password_confirm')
                {{ $message }}
              @enderror
            </span></div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                Usertype
          </label>
          <select
            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="usertype"
            placeholder=""
          >
<option value="usertype">Customer</option>
<option value="usertype">Employee</option>
          </select>
        </div>
            <div class="mb-6 text-center">
              <button
                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="submit"
              >
                Register Account
              </button>
            </div>
            <hr class="mb-6 border-t" />
            
            <div class="text-center">
              <a
                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                href="{{ route('login.show') }}"
              >
                Already have an account? Login!
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

