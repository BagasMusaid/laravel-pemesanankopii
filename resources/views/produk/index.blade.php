@extends('layouts.main')
@section('navbar')
    <section class="max-w-xl mt-32 p-6 mx-auto bg-white rounded-md shadow-lg border dark:bg-gray-800">
        <div class="p-6 text-center">
            <img class="w-28 mx-auto " src="/images/espresso.png" alt="">
            <h3 class="text-lg font-bold text-amber-700 dark:text-gray-400">Kopi Cappucino</h3>
            <div class="flex justify-center">
                <span class="text-gray-800">Rp20.000,00</span>
            </div>
            <form action="/menu/cappucino" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                    <div class="relative">
                        <input id="nama" name="nama" type="text" placeholder="Nama"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 pl-14  border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring bg-gray-200  focus:border-blueGray-500 focus:bg-white shadow-md">
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg class="feather feather-user-plus h-6 w-6 ml-3 text-gray-400 mt-2" fill="none"
                                height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <line x1="20" x2="20" y1="8" y2="14" />
                                <line x1="23" x2="17" y1="11" y2="11" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative">

                        <input id="no" name="no" type="number" placeholder="No Telephon"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 pl-14  border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring bg-gray-200  focus:border-blueGray-500 focus:bg-white shadow-md">
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg class="feather feather-smartphone  h-6 w-6 ml-3 text-gray-400 mt-2" fill="none"
                                height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <rect height="20" rx="2" ry="2" width="14" x="5"
                                    y="2" />
                                <line x1="12" x2="12.01" y1="18" y2="18" />
                            </svg>
                        </div>

                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 mt-4 sm:grid-cols-2 mb-5">
                    <div class="relative">

                        <input name="jumlah" id="jumlah" type="number" placeholder="Jumlah"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 pl-14  border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring bg-gray-200  focus:border-blueGray-500 focus:bg-white shadow-md">
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg class="feather feather-plus h-6 w-6 ml-3 text-gray-400 mt-2" fill="none" height="24"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <line x1="12" x2="12" y1="5" y2="19" />
                                <line x1="5" x2="19" y1="12" y2="12" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative">

                        <input name="alamat" id="alamat" type="text" placeholder="Alamat"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 border pl-12 border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring bg-gray-200  focus:border-blueGray-500 focus:bg-white shadow-md">
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg class="feather feather-navigation-2 h-6 w-6 ml-3 text-gray-400 mt-2" fill="none"
                                height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="12 2 19 21 12 17 5 21 12 2" />
                            </svg>
                        </div>
                    </div>
                </div>
                <button type="submit"data-modal-target="popup-menu1" data-modal-toggle="popup-menu1"
                    class="text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Beli
                </button>

            </form>
        </div>
    </section>
@endsection
