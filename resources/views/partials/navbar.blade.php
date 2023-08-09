<nav
    class="bg-transparent dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <img src="/images/icon.png" class="h-16 -ml-3 lg:-ml-7 " alt="Flowbite Logo">
            <span
                class="self-center text-2xl font-bold whitespace-nowrap text-amber-800 font-pasific dark:text-white -ml-6">Royal
                Caffe</span>
        </a>
        <div class="flex md:order-2">
            @auth

                <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    type="button">
                    <span class="sr-only">Open user menu</span>

                    @if (auth()->user()->gambar)
                        <img class="w-10 h-10 rounded-full border border-slate-600"
                            src="{{ asset('storage/' . auth()->user()->gambar) }}" alt="user photo">
                    @else
                        <img class="w-10 h-10 rounded-full border border-slate-600" src="/images/profile2.jpg"
                            alt="user photo">
                    @endif

                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatar"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-bold uppercase text-indigo-400 text-center ">{{ auth()->user()->name }}</div>
                        <div class="text-sm truncate text-center">{{ auth()->user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                        <li>
                            <a href="{{ url('profile') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ $jud === 'profile' ? ' text-blue-500' : ' ' }}">Account</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <form action="/logout" method="POST">
                            @csrf
                            <button
                                class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                sign out</button>
                        </form>

                    </div>
                </div>
            @else
                <a href="/login"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</a>
            @endauth

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100  rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="block py-2 pl-3 pr-4  {{ $jud === 'home' ? ' text-blue-500' : ' ' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white  dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/menu"
                        class="block py-2 pl-3 pr-4 {{ $jud === 'menu' ? ' text-blue-500' : ' ' }}   rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
                </li>
                <li>
                    <a href="/aboute"
                        class="block py-2 pl-3 pr-4 {{ $jud === 'about' ? ' text-blue-500' : ' ' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                        Kami</a>
                </li>
                <li>
                    <?php
                    $pesanan = App\Models\pesanan::where('user_id', Auth::user()?->id)
                        ->where('status', 0)
                        ->first();
                    if ($pesanan) {
                        $notif = App\Models\Detailpesanan::where('pesanan_id', $pesanan->id)->count();
                    } else {
                        $notif = 0;
                    }
                    ?>
                    @auth
                        <a href="/checkout"
                            class="block py-2 pl-3 pr-4 {{ $jud === 'checkout' ? ' text-blue-500' : ' ' }}  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Checkout
                            @if ($notif == 0)
                                <span></span>
                            @else
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-purple-100 bg-red-600 rounded-full">{{ $notif }}</span>
                            @endif

                        </a>
                    @else
                    @endauth

                </li>
            </ul>
        </div>
    </div>
</nav>
