<div id="edit-modal.{{ $item->id }}" tabindex="-.{{ $item->id }}" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class=" w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="edit-modal.{{ $item->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl  dark:text-white text-center text-indigo-700 font-bold">Edit Kopi</h3>
                <form class="space-y-6" action="{{ url('kopi') }}/{{ $item->id }}/{{ 'edit' }}"
                    method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Nama
                            Kopi</label>
                        <input type="nama" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $item->nama_barang }}" required>
                    </div>
                    <div>
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Harga</label>
                        <input type="number" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $item->harga }}" required>
                    </div>
                    <div>
                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $item->keterangan }}" required>
                    </div>
                    <div class="grid grid-cols-2 gap-3"> <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
                        <a href="{{ url('edit/fotoBarang') }}/{{ $item->id }}"
                            class="border border-blue-500 font-bold text-blue-500 py-2 rounded-md hover:border-blue-700 hover:text-blue-700">Edit
                            Gambar</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
