@extends('layouts.main')
@section('navbar')
    <div class="flex flex-col justify-center items-center h-screen mt-8 mx-4">
        <div
            class="flex flex-col w-full md:w-[42%] gap-5 p-4 px-2 bg-white shadow-lg border md:h-auto border-slate-300 sm:p-4 sm:h-64 rounded-2xl sm:flex-row items-center justify-center">
            <div class=" h-44 sm:h-full sm:w-72 rounded-xl ">
                <h3 class="text-center mb-2 text-slate-500">Foto Profile</h3>
                @if (empty($user->gambar))
                    <div
                        class="border-dashed border-2 mb-2 border-indigo-700 text-center justify-center flex-col py-24 items-center text-lg text-indigo-700 rounded-md">
                        +</div>
                @else
                    <img src="{{ url('storage') }}/{{ $user->gambar }}" alt=""
                        class=" mb-2 border-indigo-700 w-24 h-24 md:w-36  md:h-36 overflow-hidden mx-auto rounded-full">
                @endif


                {{-- upload --}}

                <div class="flex items-start justify-center mx-auto ">
                    <div class="mx-auto">
                        <div class="input_field flex flex-col  mx-auto text-center mt-2">
                            <form action="{{ 'profile' }}/{{ $user->id }}" enctype="multipart/form-data"
                                method="post">
                                @csrf

                                <div class="bg-white w-64 p-2 rounded-md  shadow-lg border border-slate-300 ">
                                    <div class="space-y-2">
                                        @if (!empty($user->gambar))
                                            <label for="image" class="block text-sm font-medium text-gray-700">Edit
                                                Foto</label>
                                        @else
                                            <label for="image" class="block text-sm font-medium text-gray-700">Pilih
                                                Gambar</label>
                                        @endif

                                        <div class="relative">
                                            <input type="file" name="image" id="image"
                                                class="opacity-0 absolute inset-0 w-full h-full cursor-pointer z-10"
                                                onchange="updateFileName()">
                                            <div
                                                class="border-2 border-dashed border-indigo-700 md:w-30 py-3  rounded-md cursor-pointer hover:bg-gray-100 transition duration-300">
                                                <svg class="feather feather-upload text-indigo-700 mx-auto h-6 w-6 font-bold hidden md:block"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    width="24" xmlns="http://www.w3.org/2000/svg">
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

                {{-- end upload --}}
            </div>
            <div class="flex flex-col flex-1 gap-5 sm:p-2 mt-32 md:mt-0">
                <div class="flex flex-col flex-1 gap-3">
                    <div class="mx-auto h-12 ">
                        <h1
                            class="text-center font-bold text-md md:text-2xl text-indigo-700 border-b-2 border-indigo-700 mx-auto animate-pulse
                            ">
                            PROFIL</h1>
                    </div>
                    <div class="w-full  h-12 ">
                        <h1 class="font-semibold md:font-bold mt-1 md:mt-3"> Username : <span
                                class="text-slate-500 font-normal  capitalize">{{ $user->username }}</span>
                        </h1>
                    </div>
                    <div class="w-full h-12 ">
                        <h1 class="font-semibold :font-bold md:mt-3 mt-1 "> Nama : <span
                                class="text-slate-500 font-normal capitalize">{{ $user->name }}</span>
                        </h1>
                    </div>
                    <div class="w-full h-12 ">
                        <h1 class="font-semibold md:font-bold md:mt-3 mt-1"> Email : <span
                                class="text-slate-500 font-normal">{{ $user->email }}</span></h1>
                    </div>
                </div>
                <div class="flex gap-3  justify-start">
                    <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="py-2 px-3 text-indigo-700 font-bold hover:text-indigo-500 border border-violet-700 rounded-full flex justify-center cursor-pointer">
                        <svg class="feather feather-edit-2 w-4 mr-1 text-indigo-700" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                        </svg>Edit Profil
                    </a>
                    @include('profile.edit')
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateFileName() {
            const fileInput = document.getElementById('image');
            const fileNameContainer = document.getElementById('file-name');

            if (fileInput.files.length > 0) {
                fileNameContainer.textContent = fileInput.files[0].name;
            } else {
                fileNameContainer.textContent = 'Drag and drop your file here or click';
            }
        }
    </script>
@endsection
