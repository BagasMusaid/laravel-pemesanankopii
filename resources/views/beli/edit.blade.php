@extends('layouts.main')
@section('navbar')
    <div class="container max-w-md mt-36 mx-auto xl:max-w-3xl  rounded-lg overflow-hidden">
        <a href="{{ url('checkout') }}"
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
                <a href="{{ url('/checkout') }}" class="text-gray-600 dark:text-gray-200">
                    <svg class="feather feather-shopping-cart" fill="none" height="24" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                    </svg>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>

                <a href="{{ url('pesan') }}/{{ $barang->id }}"
                    class="flex items-center text-gray-600 -ml-6 dark:text-gray-200 hover:underline  ">

                    <svg class="feather feather-edit-3 w-5 h-5 mx-2 {{ $jud === 'checkout' ? ' text-blue-500' : ' ' }}"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                    </svg>

                    <span class="mx-1 {{ $jud === 'checkout' ? ' text-blue-500' : ' ' }} "> Edit Coffe
                        {{ $barang->nama_barang }}</span>
                </a>


            </div>
        </div>
    </div>
    <div
        class="container max-w-md mt-3 mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow-lg border-2 border-slate-100 overflow-hidden">
        <div class="relative hidden xl:block xl:w-1/2 h-full mt-14">
            <img class="absolute h-auto w-full object-cover" src="{{ url('images') }}/{{ $barang->gambar }}"
                alt="my zomato" />
        </div>
        <div class="w-full xl:w-1/2 p-8">
            <form method="post" action="{{ url('checkout') }}/{{ $barang->id }}/{{ 'edit' }}">
                @csrf
                @method('PUT')
                <h1 class=" text-2xl font-bold capitalize text-center">Coffe {{ $barang->nama_barang }}</h1>
                <h5 class="text-xl font-semibold text-center text-slate-500">Rp {{ number_format($barang->harga) }}</h5>
                <div class="mb-6 mt-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Nomer Meja
                    </label>
                    <input
                        class="text-sm bg-gray-200 appearance-none rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline h-10"
                        id="meja" name="meja" type="number" value="{{ $detail->no_meja }}" />

                </div>
                <div class="mb-4 mt-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Jumlah Pesan
                    </label>
                    <input
                        class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"
                        id="jumlah" type="number" name="jumlah" value="{{ $detail->jumlah }}" />
                </div>

                <div class="flex w-full mt-8 gap-4">
                    <button type="submit"
                        class="w-full bg-gray-800 hover:bg-slate-700 cursor-pointer text-white text-sm py-2 px-1 font-semibold rounded focus:outline-none focus:shadow-outline h-10 text-center flex justify-center">

                        <svg class="feather feather-save mt-0.5 mr-1" fill="none" height="18" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                            <polyline points="17 21 17 13 7 13 7 21" />
                            <polyline points="7 3 7 8 15 8" />
                        </svg>
                        UBAH PESANAN

                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
