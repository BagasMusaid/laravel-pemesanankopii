@extends('layouts.main')
@section('navbar')
    {{-- halaman utamaaa --}}
    <div class="p-8 lg:w-1/2 mx-auto mt-28">
        <div class="bg-gray-100 rounded-lg py-12 px-4 lg:px-24 shadow-lg">
            <h2 class="text-center text-3xl uppercase text-amber-800 font-bold"> register </h2>
            <form class="mt-10" action="/register" method="POST">
                @csrf
                <div class="relative">
                    <input id="name" type="text" name="name"
                        class="appearance-none border pl-12 peer border-gray-100 shadow-sm @error('name') focus:border-ring-pink-500 @enderror focus:shadow-md focus:placeholder-gray-600  transition  rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline"
                        placeholder="Nama" required value="{{ old('name') }}" />
                    <div class="absolute left-0 inset-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    @error('nama')
                        <span role="alert" class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-3">
                    <input
                        class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition  rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline"
                        id="username" type="text" placeholder="Username" name="username" required />
                    <div class="absolute left-0 inset-y-0 flex items-center">
                        <svg class="feather feather-user-plus h-7 w-7 ml-3 text-gray-400 p-1" fill="currentColor"
                            height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="8.5" cy="7" r="4" />
                            <line x1="20" x2="20" y1="8" y2="14" />
                            <line x1="23" x2="17" y1="11" y2="11" />
                        </svg>
                    </div>
                </div>
                <div class="relative mt-3">
                    <input
                        class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition  rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline"
                        id="email" name="email" type="email" placeholder="Email" required />
                    <div class="absolute left-0 inset-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </div>
                </div>
                <div class="relative mt-3">
                    <input
                        class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition  rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="Password" required />
                    <div class="absolute left-0 inset-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-gray-500"> <input type="checkbox" id="remember" name="remember"
                        class="mx-1" /> <label class="text-sm" for="remember">I agree with the <a
                            class="text-indigo-400 hover:text-indigo-500">Privacy Policy</a></p>
                </div>
                <div class="flex items-center justify-center mt-8"> <button type="submit"
                        class="text-white py-2 px-4 uppercase rounded bg-indigo-500 hover:bg-indigo-600 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Create Account </button> </div>
                <p class="text-center text-sm text-gray-500 mt-5">
                    Sudah punya akun?
                    <a class="underline text-indigo-600" href="/login">Login sekarang</a>
                </p>
            </form>
        </div>
    </div>
    </div>
@endsection
