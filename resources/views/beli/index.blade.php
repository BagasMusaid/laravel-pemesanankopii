@extends('layouts.main')
@section('navbar')
    <!-- component -->
    <div class="container max-w-md mt-36 mx-auto xl:max-w-3xl  rounded-lg overflow-hidden">
        <a href="{{ url('/') }}"
            class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2 mb-2.5 w-40 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 flex justify-center">
            <svg class="feather feather-corner-up-left" fill="none" height="18" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <polyline points="9 14 4 9 9 4" />
                <path d="M20 20v-7a4 4 0 0 0-4-4H4" />
            </svg>kembali
        </a>
        <div class="bg-gray-200 dark:bg-gray-800 rounded-sm mt-3">
            <div class="container flex items-center px-6 py-4 mx-auto overflow-x-auto whitespace-nowrap">
                <a href="{{ url('/') }}" class="text-gray-600 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>

                <a href="{{ url('pesan') }}/{{ $brg->id }}"
                    class="flex items-center text-gray-600 -px-2 dark:text-gray-200 hover:underline  ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 mx-2 {{ $jud === 'beli' ? ' text-blue-500' : ' ' }}" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>

                    <span class="mx-1 {{ $jud === 'beli' ? ' text-blue-500' : ' ' }} ">Coffe {{ $brg->nama_barang }}</span>
                </a>


            </div>
        </div>
    </div>
    <div
        class="container max-w-md mt-3 mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow-lg border-2 border-slate-100 overflow-hidden">
        <div class="relative hidden xl:block xl:w-1/2 h-full mt-14">
            <img class="absolute h-auto w-full object-cover" src="{{ url('images') }}/{{ $brg->gambar }}" />
        </div>
        <div class="w-full xl:w-1/2 p-8">
            <form method="post" action="{{ url('pesan') }}/{{ $brg->id }}">
                @csrf
                <h1 class=" text-2xl font-bold capitalize text-center">Coffe {{ $brg->nama_barang }}</h1>
                <h5 class="text-xl font-semibold text-center text-slate-500">Rp {{ number_format($brg->harga) }}</h5>
                <div class="mb-6 mt-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Nomer Meja
                    </label>
                    <input
                        class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
                        id="meja" name="meja" type="number" placeholder="Masukan No Meja" />

                </div>
                <div class="mb-4 mt-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Jumlah Pesan
                    </label>
                    <input
                        class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"
                        id="jumlah" type="number" name="jumlah" placeholder="Masukan Jumlah Pesanan" />
                </div>

                <div class="flex w-full mt-8 gap-4">
                    <a
                        class="w-full bg-gray-800 hover:bg-slate-700 text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10 text-center flex justify-center cursor-pointer">
                        <svg class="feather feather-download mt-0.5 mr-1" fill="none" height="18"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" x2="12" y1="15" y2="3" />
                        </svg>
                        Beli
                    </a>
                    <button type="submit"
                        class="w-full bg-gray-800 hover:bg-slate-700 cursor-pointer text-white text-sm py-2 px-1 font-semibold rounded focus:outline-none focus:shadow-outline h-10 text-center flex justify-center">
                        <svg class="feather feather-shopping-cart mt-0.5 mr-1" fill="none" height="18"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                        keranjang

                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
