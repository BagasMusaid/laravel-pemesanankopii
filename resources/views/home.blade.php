@extends('layouts.main')
@section('navbar')
    <div class="container px-6 py-24 md:pt-16 mx-auto ">
        <div class="items-center max-w-screen-xl flex flex-wrap  justify-between mx-auto p-4">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-xl mt-8">
                    <h1
                        class="text-3xl font-semibold text-gray-800 dark:text-white  uppercase text-center md:text-left md:font-extrabold lg:text-5xl">
                        Selamat<span
                            class="bg-amber-700 text-white text-2xl font-bold mr-4 px-3 py-0.5 rounded  ml-4 lg:text-4xl">Datang</span>
                    </h1>
                    <h1
                        class="text-3xl font-semibold text-gray-800 dark:text-white  uppercase text-center md:text-left md:font-extrabold lg:text-5xl mt-2">
                        Di <span class="text-amber-800 mt-24 font-bold lg:text-6xl">Royal Caffe</span></h1>

                    <p class="mt-3 text-slate-600 dark:text-gray-400 text-center md:text-justify">Dari biji kopi terbaik yang
                        dipilih dengan cermat hingga metode penyeduhan yang sempurna, setiap cangkir kopi dijamin akan
                        memberikan pengalaman yang memuaskan bagi anda pecinta kopi.</p>

                    <a href="https://api.whatsapp.com/send/?phone=6285727557597&text&type=phone_number&app_absent=0"
                        class="w-full  px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-48 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 flex justify-center font-semibold">Hubungi
                        Kami
                        <svg class="feather feather-phone-outgoing  " fill="none" height="18" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="23 7 23 1 17 1" />
                            <line x1="16" x2="23" y1="8" y2="1" />
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        {{-- <?xml version="1.0" ?><svg class="feather feather-shopping-cart ml-1 mt-0.5" fill="none"
                            height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg> --}}
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                <img class="w-full h-full lg:max-w-2xl" src="/images/hero.png" alt="Catalogue-pana.svg">
            </div>
        </div>
    </div>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mt-32">
        <path fill="#e2e8f0" fill-opacity="1"
            d="M0,128L21.8,133.3C43.6,139,87,149,131,170.7C174.5,192,218,224,262,240C305.5,256,349,256,393,229.3C436.4,203,480,149,524,154.7C567.3,160,611,224,655,256C698.2,288,742,288,785,272C829.1,256,873,224,916,229.3C960,235,1004,277,1047,266.7C1090.9,256,1135,192,1178,192C1221.8,192,1265,256,1309,282.7C1352.7,309,1396,299,1418,293.3L1440,288L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
        </path>
    </svg> --}}
    <section class=" bg-[url('/images/paralax.jpg')]  bg-fixed bg-no-repeat bg-cover bg-contrast-50 bg-center">

        <div class="container px-6 py-24 md:pl-32 mx-auto">
            <h2 class="text-center md:font-extrabold text-3xl uppercase text-white mb-16 font-bold md:-ml-11 md:mr-8">Diskon
            </h2>
            <div class="md:flex md:gap-7 pt-6 max-w-screen-xl md:justify-center md:items-center">
                @foreach ($barangs as $item => $data)
                    @if ($item < 3)
                        <div
                            class="flex max-w-md md:w-1/3 overflow-hidden bg-green-500 rounded-lg shadow-lg dark:bg-gray-800 mb-4">
                            <div class="w-2/3 p-4 md:p-4">
                                <h3 class="text-white text-lg">Rp {{ number_format($data->harga) }}</h3>
                                <h1 class="text-3xl font-bold text-white dark:text-white capitalize">Caffe
                                    {{ $data->nama_barang }}
                                </h1>
                                <div class="flex justify-between mt-3 item-center">

                                    <a data-modal-target="popup-ekspreso" data-modal-toggle="popup-ekspreso"
                                        href="{{ url('pesan') }}/{{ $data->id }}"
                                        class="px-2 py-1 text-xs font-bold text-green-300 uppercase transition-colors duration-300 transform bg-white rounded dark:bg-gray-700 hover:bg-slate-200 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600 cursor-pointer flex">Beli
                                        Sekarang
                                        <?xml version="1.0" ?><svg class="feather feather-arrow-right" fill="none"
                                            height="18" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <line x1="5" x2="19" y1="12" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img class="w-1/3 bg-no-repeat  bg-[length:180px_180px] bg-left-bottom my-3"
                                src="{{ asset('storage/') }}/{{ $data->gambar }}">
                            </img>
                        </div>
                    @endif
                @endforeach


                {{-- end pop up --}}

            </div>
        </div>
    </section>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2e8f0" fill-opacity="1"
            d="M0,64L20,64C40,64,80,64,120,69.3C160,75,200,85,240,101.3C280,117,320,139,360,144C400,149,440,139,480,112C520,85,560,43,600,42.7C640,43,680,85,720,112C760,139,800,149,840,138.7C880,128,920,96,960,96C1000,96,1040,128,1080,138.7C1120,149,1160,139,1200,117.3C1240,96,1280,64,1320,48C1360,32,1400,32,1420,32L1440,32L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z">
        </path>
    </svg> --}}
    <!-- component -->
    <div class="mb-2">
        <!-- Code block starts -->
        <dh-component class="-mb-11">
            <div class="container flex justify-center mx-auto pt-12 md:pt-32 md:mb-11 mb-10 ">
                <div>
                    <p
                        class="xl:text-4xl text-3xl text-center md:mr-8 font-extrabold  sm:w-4/6 w-5/6 mx-auto text-amber-800">
                        COFFEE</p>
                </div>
            </div>
            <div class="w-full px-10 container py-24 md:pr-32 md:pl-36 ">
                <div class="container mx-auto">
                    <div role="list" aria-label="Behind the scenes People "
                        class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                        <div role="listitem"
                            class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-gray-200">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-36 w-36">
                                        <img src="/images/ekspreso.jpg" alt="Display Picture of Andres Berlin"
                                            role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <h1 class="font-bold text-3xl text-center mb-1">Espresso</h1>
                                    <p class="text-center text-gray-600 text-base pt-3 font-normal">espresso adalah
                                        ekstraksi kopi yang dihasilkan dengan mengekstrak air panas melalui bubuk kopi yang
                                        padat. Espresso sering disajikan dalam cangkir kecil dan memiliki rasa yang kuat dan
                                        konsentrat.</p>
                                    <div class="w-full flex justify-center pt-5 pb-5">
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300" fill="none"
                                                    height="24" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    height="24" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Twitter" role="img">
                                                <?xml version="1.0" ?><svg class="feather feather-star  text-gray-300"
                                                    fill="currentColor" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Instagram" role="img">
                                                <?xml version="1.0" ?><svg class="feather feather-star text-gray-300"
                                                    fill="currentColor" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="listitem"
                            class="xl:w-1/3 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-gray-200">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-36 w-36">
                                        <img src="/images/americano.jpg" alt="Display Picture of Silene Tokyo"
                                            role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <h1 class="font-bold text-3xl text-center mb-1">Americano</h1>
                                    <p class="text-center text-gray-600 text-base pt-3 font-normal">Americano adalah
                                        minuman kopi yang terbuat dari satu atau dua shot espresso yang dituangkan di atas
                                        air panas. Ini memberikan minuman kopi yang lebih lembut dan memiliki rasa yang
                                        mirip dengan kopi hitam.</p>
                                    <div class="w-full flex justify-center pt-5 pb-5">
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    height="24" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Twitter" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Instagram" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="listitem"
                            class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-gray-200">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-36 w-36">
                                        <img src="/images/mastering.jpg" alt="Display Picture of Johnson Stone"
                                            role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <h1 class="font-bold text-3xl text-center mb-1">Macchiato</h1>
                                    <p class="text-center text-gray-600 text-base pt-3 font-normal">Macchiato adalah
                                        minuman kopi yang terdiri dari espresso dengan sejumput susu steamed atau foam yang
                                        ditambahkan di atasnya. Ini memberikan sedikit kelembutan pada rasa espresso tanpa
                                        dominasi rasa susu.</p>
                                    <div class="w-full flex justify-center pt-5 pb-5">
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Github" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    height="24" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Twitter" role="img">
                                                <?xml version="1.0" ?><svg
                                                    class="feather feather-star fill-current text-yellow-300"
                                                    fill="none" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-2">
                                            <div aria-label="Instagram" role="img">
                                                <?xml version="1.0" ?><svg class="feather feather-star text-gray-300"
                                                    fill="currentColor" height="24" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </dh-component>
    </div>
    <section class="bg-slate-100 -mt-12 mb-3">
        <div class="w-full px-10 container py-24 md:pr-32 md:pl-36">
            <div class="container flex justify-center items-center mx-auto pt-12 md:pt-12 md:mb-11 mb-10 ">
                <div>
                    <h1
                        class="xl:text-4xl text-3xl text-center  border py-2 pb-4 border-amber-800 md:mr-8 font-extrabold  sm:w-4/6 w-5/6 mx-auto text-amber-800">
                        GALLERY COFFEE</h1>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 ">
                <div class="grid gap-3 ">
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar5.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar1.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-3">
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-3 ">
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar8.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar10.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-3">
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar12.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-90 hover:duration-200"
                            src="/images/coll/gambar11.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- footerr --}}
    <footer class="relative  pt-8 pb-3">
        <div class="container mx-auto px-4 py-24 md:pr-32 md:pl-36">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex -ml-10">
                        <img src="/images/icon.png" class="h-20 -mt-5" alt="">
                        <h4 class="text-3xl font-bold text-blueGray-700 text-amber-800 -ml-8">Royal Coffe</h4>

                    </div>


                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-tiktok"></i></button><button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-instagram"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-slate-900 text-sm font-bold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-slate-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">Blog</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">Github</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-slate-900 text-sm font-bold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2021</span><a href=""
                            class="text-blueGray-500 hover:text-gray-800" target="_blank"> Royal Coffe
                            <a href="" class="text-blueGray-500 hover:text-blueGray-800">Creative Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
