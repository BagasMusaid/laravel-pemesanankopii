@extends('layouts.main')
@section('navbar')
    <!-- component -->
    <!-- commerce slide cards -->
    <div style="background-color:#fff8f4" class="h-full">
        <div class="container mx-auto  lg:px-20 ">
            <div class='grid grid-cols-3 h-full pb-40 pt-10 '>
                <div class="border-r border-gray-300 mx-3 lg:pl-20">
                    <div
                        class=" py-10 pb-3 mt-72 h-4/6 relative bg-purple-100 group hover:bg-purple-200 cursor-pointer transition ease-out duration-300">
                        <div>
                            <div class="w-4 h-1/5 absolute right-0 -top-48 bg-purple-100 group-hover:bg-purple-50">
                            </div>
                            <img src="/images/capucino.png" alt="" class="w-56 mx-auto">
                        </div>
                        <div class="px-7 mt-20">
                            <h1 class="text-3xl font-bold group-hover:text-purple-300 transition ease-out duration-300">01.
                            </h1>
                            <h2 class="text-1xl mt-4 font-bold">Tentang Kami</h2>
                            <p class="mt-2 opacity-60 group-hover:opacity-70 ">Royal coffe adalah kedai kopi yang hangat dan
                                nyaman yang menyajikan berbagai macam kopi berkualitas tinggi dengan sentuhan unik dan rasa
                                yang menggugah selera.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="border-r border-gray-300 mx-3 lg:pl-20">
                    <div
                        class=" py-10  pb-3 mt-32 h-4/6 relative bg-indigo-100 group hover:bg-indigo-200 cursor-pointer transition ease-out duration-300">
                        <div>
                            <div
                                class="w-4 h-1/5 bg-red-50	absolute right-0 -top-48 bg-indigo-100  group-hover:bg-indigo-50">
                            </div>
                            <img src="/images/latte.png" alt="" class="w-56 mx-auto">
                        </div>
                        <div class="px-7 mt-5">
                            <h1 class="text-3xl font-bold group-hover:text-indigo-300 transition ease-out duration-300">02.
                            </h1>
                            <h2 class="text-1xl mt-4 font-bold">Komitmen Kami</h2>
                            <p class="mt-2 opacity-60 group-hover:opacity-70 ">
                                Royal coffe berkomitmen untuk menyajikan pengalaman kopi terbaik kepada para pecinta kopi.
                                Royal coffe menawarkan berbagai pilihan kopi spesialitas dari berbagai varietas biji kopi
                                terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="border-r border-gray-300 mx-3 lg:pl-20">
                    <div
                        class=" py-10 pb-3 mt-5 h-4/6 relative bg-red-100 group hover:bg-red-200 cursor-pointer transition ease-out duration-300">
                        <div>
                            <div class="w-4 h-1/5 bg-red-50	absolute right-0 -bottom-44 bg-red-100 group-hover:bg-red-50">
                            </div>
                            <img src="/images/espresso.png" class="w-56 mx-auto"
                                alt="https://www.pngegg.com/en/png-epwii/download">
                        </div>
                        <div class="px-7 mt-10 pt-16">
                            <h1 class="text-3xl font-bold group-hover:text-red-300 transition ease-out duration-300">03.
                            </h1>
                            <h2 class="text-1xl mt-4 font-bold">Spesialisasi Kami</h2>
                            <p class="mt-2 opacity-60 group-hover:opacity-70 ">Royal coffe menawarkan berbagai pilihan kopi
                                spesialitas dari berbagai varietas biji kopi terbaik. Dari kopi hitam klasik hingga kopi es
                                yang segar, kami memiliki sesuatu untuk setiap selera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
