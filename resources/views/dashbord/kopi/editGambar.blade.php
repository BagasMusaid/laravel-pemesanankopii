@extends('layouts.index')
@section('container')
    <div class="flex justify-center items-center mt-36">
        <div class="bg-blue-200 px-6 py-4 rounded-md shadow-lg">

            <h3 class="text-center mb-2 font-bold border-b-2 border-blue-400 mx-28">Foto Kopi </h3>

            @if (empty($kopi->gambar))
                <div
                    class="border-dashed border-2 mb-2 border-indigo-700 text-center justify-center flex-col py-24 items-center text-lg text-indigo-700 rounded-md">
                    +</div>
            @else
                <img src="{{ url('storage') }}/{{ $kopi->gambar }}" alt=""
                    class=" mb-2 border-indigo-700 w-24 h-24 md:w-36  md:h-36 overflow-hidden mx-auto rounded-full">
            @endif


            {{-- upload --}}

            <div class="flex items-start justify-center mx-auto ">
                <div class="mx-auto">
                    <div class="input_field flex flex-col  mx-auto text-center mt-2">
                        <form action="{{ url('edit') }}/{{ 'fotoBarang' }}/{{ $kopi->id }}"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <div class="bg-white w-72 p-2 rounded-md  shadow-lg border border-slate-300 ">
                                <div class="space-y-2">

                                    <label for="gambarKopi" class="block text-sm font-medium text-gray-700">Edit
                                        Foto</label>


                                    <div class="relative">
                                        <input type="file" name="gambarKopi" id="gambarKopi"
                                            class="opacity-0 absolute inset-0 w-full h-full cursor-pointer z-10 overflow-hidden"
                                            onchange="updateKopiName()">
                                        <div
                                            class="border-2 border-dashed border-indigo-700 md:w-30 py-3  rounded-md cursor-pointer hover:bg-gray-100 transition duration-300">
                                            <svg class="feather feather-upload text-indigo-700 mx-auto h-6 w-6 font-bold hidden md:block"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                                <polyline points="17 8 12 3 7 8" />
                                                <line x1="12" x2="12" y1="3" y2="15" />
                                            </svg>
                                            <div class="w-286 mx-auto ">
                                                <p class="text-sm text-gray-600 px-2 " id="file-name">Drag and drop
                                                    your
                                                    file here or click</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="w-full mt-6 bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">
                                        Upload
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateKopiName() {
            const fileInput = document.getElementById('gambarKopi');
            const fileNameContainer = document.getElementById('file-name');

            if (fileInput.files.length > 0) {
                fileNameContainer.textContent = fileInput.files[0].name;
            } else {
                fileNameContainer.textContent = 'Drag and drop your file here or click';
            }
        }
    </script>
@endsection
