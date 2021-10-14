@extends('layout.app')

@section('page_title', 'New Employee')

@section('content')
    <section class="text-gray-600 body-font">
        <div 
            class="w-full h-full bg-no-repeat bg-cover py-8 bg-blend-darken" 
            style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url('/img/bike-closeup.jpg')">
        <div class=" px-5  mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-6xl text-4xl font-bold uppercase title-font mb-4 text-white">Our Journey<br>Begins</h1>
                {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor st amet, consectetur adipisicing
                    elit. Atque consequuntur esse nihil possimus quisquam quod repudiandae veniam vero? Adipisci
                    aspernatur exercitationem totam.</p> --}}
            </div>
                <form class="rounded-lg py-12" 
                    style="background-color:white;width:60%;margin:auto"
                    action="{{ route('RegisterEmployee.store') }}" method="POST">
                    @csrf
                    <div
                        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end ">
                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600">Full Name:
                                <span class="text-xs ml-4 text-red-700">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border @error('name') border-red-700 @enderror  border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email
                                <span class="text-xs ml-4 text-red-700">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border @error('email') border-red-700 @enderror  border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>

                    </div>

                    <div
                        class="flex lg:w-2/3 my-4 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="phone_nbr" class="leading-7 text-sm text-gray-600">Phone Number
                                <span class="text-xs ml-4 text-red-700">
                                    @error('phone_nbr')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </label>
                            <input type="tel" id="phone_nbr" name="phone_nbr"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border @error('phone_nbr') border-red-700 @enderror border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="address" class="leading-7 text-sm text-gray-600">Address
                                <span class="text-xs ml-4 text-red-700">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </label>
                            <input type="text" id="address" name="address"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border @error('address') border-red-700 @enderror border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>

                    <div
                        class="flex lg:w-2/3 w-full my-4 sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="password" class="leading-7 text-sm text-gray-600">Password
                                <span class="text-xs ml-4 text-red-700">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </label>
                            <input type="password" id="password" name="password"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border @error('password') border-red-700 @enderror border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="password_confirmation" class="leading-7 text-sm text-gray-600">Re-Enter
                                Password
                                <span class="text-xs ml-4 text-red-700">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 @error('password_confirmation') border-red-700 @enderror focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div
                        class="flex lg:w-2/3 w-full sm:flex-row my-8 flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <button
                            class="text-white bg-blue-500 w-8/12 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">
                            Register
                        </button>
                    </div>

                </div>


                <div
                    class="flex lg:w-2/3 w-full my-4 sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                    <div class="relative flex-grow w-full">

                        <div>
                            <label for=""> Copy of Resume </label>
                            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 w-full inline-flex items-center">
                                <svg fill="#FFF" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
                                </svg>
                                <span class="ml-2">Upload Resume</span>

                            <input
                                class="cursor-pointer absolute block py-2 px-4 w-full opacity-0 pin-r pin-t"
                                type="file"
                                name="documents[]">
                            </button>
                        </div>

                    </div>
                    <div class="relative flex-grow w-full">
                        <label for="password_confirmation" class="leading-7 text-sm text-gray-600">Re-Enter
                            Password
                            <span class="text-xs ml-4 text-red-700">
                                @error('password_confirmation')
                                {{ $message }}
                                @enderror
                            </span>
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 @error('password_confirmation') border-red-700 @enderror focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                </div>


                <div
                    class="flex lg:w-2/3 w-full sm:flex-row my-8 flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                    <button
                        class="text-white bg-blue-500 w-8/12 mx-auto border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">
                        Register
                    </button>
                </div>

            </form>
        </div>
        </div>
    </section>
@endsection
