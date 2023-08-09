@extends('layouts.main')
@section('navbar')
    <!-- component -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <div class="container">
        <div class=" flex items-center  justify-center min-h-screen px-2">
            <div class="col-span-10">
                <div class="overflow-auto lg:overflow-visible ">

                    @if ($detail)
                        <?php $no = 1; ?>
                        <table class="table text-gray-400 border-separate space-y-6 text-sm">

                            <thead class="bg-amber-500 text-white">
                                <tr>

                                    <th class="p-2 md:p-3 text-left">No</th>
                                    <th class="p-1 md:p-3 ">Nama Kopi</th>
                                    <th class="p-1 md:p-3 text-left">Jumlah</th>
                                    <th class="p-1 md:p-3 text-left">Meja</th>
                                    <th class="p-1 md:p-3 text-left">Harga</th>
                                    <th class="p-1 md:p-3 text-left">Total Harga</th>
                                    <th class="p-1 md:p-3 text-left">Action</th>
                                </tr>
                            </thead>


                            @foreach ($detail as $item)
                                <tbody>
                                    <tr class="bg-amber-200 jumlah">
                                        <td>
                                            <h6 class="text-center text-slate-700">{{ $no++ }}</h6>
                                        </td>
                                        <td class="p-3">
                                            <div class="ml-3">
                                                <div class="text-slate-700 font-bold">{{ $item->barang->nama_barang }}
                                                </div>
                                            </div>

                                        </td>
                                        <td class="p-3 text-center text-slate-700">
                                            {{ $item->jumlah }}
                                        </td>
                                        <td class="p-3 text-center text-slate-700">
                                            {{ $item->no_meja }}
                                        </td>
                                        <td class="p-3 text-slate-700">Rp{{ number_format($item->barang->harga) }}
                                        </td>
                                        <td class="p-3">
                                            <span
                                                class="text-slate-700 text-center">Rp{{ number_format($item->jumlah_harga) }}</span>
                                        </td>
                                        <td class="p-3 flex jajal">
                                            <a href="{{ url('checkout') }}/{{ $item->barang->id }}/{{ 'edit' }}"
                                                class="text-amber-600 hover:text-amber-800  mx-2">
                                                <i class="material-icons-outlined text-base">edit</i>
                                            </a>
                                            <form onsubmit="return confirm('Yakin Hapus Data ?')"
                                                action="{{ url('checkout') }}/{{ $item->id }}/{{ 'delete' }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-amber-600 hover:text-amber-800 ml-2  md:-ml-1 delete-btn">
                                                    <i class="material-icons-round text-base">delete_outline</i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                            <tfoot>
                                @if ($detail->isNotEmpty())
                                    <tr class="bg-amber-300 total ">
                                        <td colspan="4" scope="row" class="p-2 text-right font-bold text-white">Jumlah
                                            Harga :
                                        </td>
                                        <td colspan="1" scope="row" class="py-2 text-center font-bold text-white">
                                            Rp{{ number_format($pesanan->jumlah_harga) }}</td>
                                        <td colspan="2" scope="row" class="p-2 ">
                                            <div class="w-auto h-auto">
                                                <div class="flex-1 h-8">
                                                    <a href="{{ url('checkout-konfirmasi') }}"
                                                        class="flex items-center justify-center flex-1 h-full p-2 border border-indigo-700 rounded-lg cursor-pointer">
                                                        <div class="flex">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 mt-0.5 text-indigo-700" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                            </svg>
                                                            <h6 class="mb-0.5 text-indigo-700 font-bold">beli</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endif
                            </tfoot>
                        </table>
                    @else
                        <div class="bg-violet-500 p-5 flex justify-center">
                            <svg class="feather feather-info mr-3 text-white" fill="none" height="27"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" x2="12" y1="16" y2="12" />
                                <line x1="12" x2="12.01" y1="8" y2="8" />
                            </svg>
                            <h1 class="font-bold text-white">silahkan pesan terlebih dahulu</h1>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        .total td:nth-child(n+3) {
            border-radius: 0 .625rem .625rem 0;
        }

        tbody tr td:nth-child(7) {
            border-radius: 0 .625rem .625rem 0;
        }


        tr td:nth-child(n+7),
        tr th:nth-child(n+7) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
@endsection
