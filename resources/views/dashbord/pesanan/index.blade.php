@extends('layouts.index')
@section('container')
    <div class="p-4 mt-10 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="w-44 ">
                    <a href="#" data-modal-target="tambah-modal" data-modal-toggle="tambah-modal"
                        class="p-3 mb-4 font-sans bg-blue-500 rounded-md font-bold text-white text-sm hover:bg-blue-700">Tambah
                        Data</a>
                    @include('dashbord.kopi.tambah')
                </div>

                <!-- component -->
                <div class="overflow-x-auto ">
                    <div class="min-w-screen  h-full flex items-center shadow-lg justify-center  font-sans overflow-hidden ">
                        <div class="w-full ">
                            <div class="bg-white shadow-md rounded my-3">
                                <table class="min-w-max w-full table-auto ">
                                    <thead>
                                        <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">No</th>
                                            <th class="py-3 px-6 text-left">Nama Kopi</th>
                                            <th class="py-3 px-6 text-left">Nama Pemesan</th>
                                            <th class="py-3 px-6 text-center">Meja</th>
                                            <th class="py-3 px-6 text-center">jumlah</th>
                                            <th class="py-3 px-6 text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    @foreach ($pesanan as $psn => $item)
                                        @foreach ($detail as $dtl)
                                            @foreach ($barangs as $brg)
                                                <tbody class="text-gray-600 text-sm font-light">
                                                    <tr
                                                        class="border-b border-gray-200 hover:bg-gray-100 {{ $psn % 2 === 0 ? 'bg-white' : ' bg-gray-100' }}">
                                                        <td class="py-3 px-6 text-left">
                                                            <h5 class="ml-3">{{ $psn + $pesanan->firstItem() }}</h5>

                                                        </td>
                                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="mr-2">

                                                                    <span class="font-medium">Coffe
                                                                        {{ $brg->nama_barang }}</span>
                                                                </div>
                                                        </td>
                                                        <td class="py-3 px-6 text-left">
                                                            <div class="flex items-center">
                                                                <div class="ml-5">
                                                                    <h2>{{ $item->User->name }}</h2>
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-6 text-center">
                                                            <div class="flex items-center justify-center">
                                                                <span
                                                                    class="font-semibold text-slate-500">{{ $dtl->no_meja }}</span>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="py-3
                                                    px-6 text-center">
                                                            <span
                                                                class=" text-purple-600 py-1 px-3 rounded-full text-xs">{{ $dtl->jumlah }}</span>
                                                        </td>
                                                        <td class="py-3 px-6 text-center">
                                                            <div class="flex item-center justify-center">

                                                                <a href="#"
                                                                    data-modal-target="edit-modal.{{ $item->id }}"
                                                                    data-modal-toggle="edit-modal.{{ $item->id }}"
                                                                    class="w-4 mr-2 transform hover:text-blue-500 text-blue-700 hover:scale-110">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                    </svg>
                                                                </a>
                                                                @include('dashbord.kopi.edit')
                                                                <form onsubmit="return confirm('Yakin Hapus Data ?')"
                                                                    action="{{ url('kopi') }}/{{ $item->id }}/{{ 'delete' }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="w-4 mr-2 transform hover:outline-none outline-none hover:text-red-500 text-red-700 hover:scale-110">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>

                                                                    </button>

                                                                </form>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        @endforeach
                                    @endforeach


                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                {{ $pesanan->links('components.custom-pagination') }}

            </div>
        </div>
    </div>
@endsection
