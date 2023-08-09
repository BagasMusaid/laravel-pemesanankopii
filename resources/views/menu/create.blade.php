@foreach ($barang as $item)
    <div id="beli-modal.{{ $item->id }}" tabindex="-.{{ $item->id }}" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class=" w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="beli-modal.{{ $item->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div
                    class="container max-w-md mt-3 mx-auto xl:max-w-3xl h-full flex bg-white rounded-lg shadow-lg border-2 border-slate-100 overflow-hidden">
                    <div class="relative hidden xl:block xl:w-1/2 h-full mt-14">
                        <img class="absolute h-auto w-full object-cover"
                            src="{{ url('images') }}/{{ $item->gambar }}" />
                    </div>
                    <div class="w-full xl:w-1/2 p-8">
                        <form method="post" action="{{ url('beli') }}/{{ $item->id }}">
                            @csrf
                            <h1 class=" text-2xl font-bold capitalize text-center">Coffe {{ $item->nama_barang }}</h1>
                            <h5 class="text-xl font-semibold text-center text-slate-500">Rp
                                {{ number_format($item->harga) }}</h5>
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
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                        <polyline points="7 10 12 15 17 10" />
                                        <line x1="12" x2="12" y1="15" y2="3" />
                                    </svg>
                                    Beli
                                </a>
                                <button type="submit"
                                    class="w-full bg-gray-800 hover:bg-slate-700 cursor-pointer text-white text-sm py-2 px-1 font-semibold rounded focus:outline-none focus:shadow-outline h-10 text-center flex justify-center">
                                    <svg class="feather feather-shopping-cart mt-0.5 mr-1" fill="none" height="18"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
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
            </div>
        </div>
    </div>
@endforeach
