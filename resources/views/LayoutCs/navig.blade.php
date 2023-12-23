<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="w-full text-green-700 bg-white dark-mode:text-green-200 dark-mode:bg-green-800">
    <div x-data="{ open: true }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between p-4">
            <div class="h-10 w-10 self-center mr-2">
                <img class="h-10 w-10 self-center" src="{{ asset('images/leye.jpg') }}" />
            </div>
            <div>
                <a href="/home" class="text-2xl no-underline text-green hover:text-green font-sans font-bold">Entr-aide
                    Humanitaire</a><br>
                {{-- <span class="text-xs text-grey-dark">Beautiful New Tagline</span> --}}
            </div>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 md:mt-0 md:ml-4 hover:text-green-900 focus:text-green-900 hover:bg-green-200 focus:bg-green-200 focus:outline-none focus:shadow-outline"
                href="/">Accueil</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 md:mt-0 md:ml-4 hover:text-green-900 focus:text-green-900 hover:bg-green-200 focus:bg-green-200 focus:outline-none focus:shadow-outline"
                href="#">A propos de nous</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 md:mt-0 md:ml-4 hover:text-green-900 focus:text-green-900 hover:bg-green-200 focus:bg-green-200 focus:outline-none focus:shadow-outline"
                href="/projet">Projet</a>
            <div @click.away="open = false" class="relative" x-data="{ open: true }">
                <button @click="open = !open"
                    class="flex flex-row text-green-900 bg-green-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-green-600 dark-mode:hover:bg-green-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-green-900 focus:text-green-900 hover:bg-green-200 focus:bg-green-200 focus:outline-none focus:shadow-outline">
                    <span>Faire Don</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                    <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-green-700">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 hover:text-green-900 focus:text-green-900 hover:bg-green-200 focus:bg-green-200 focus:outline-none focus:shadow-outline"
                                href="where/don/Materiel/">
                                <div class="bg-teal-500 text-white rounded-lg p-3">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        class="md:h-6 md:w-6 h-4 w-4">
                                        <path
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="font-semibold">Don Materiel</p>

                                </div>
                            </a>

                            <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-green-600 dark-mode:focus:bg-green-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-green-200 hover:text-green-900 focus:text-green-900 hover:bg-green-200 focus:bg-green-200 focus:outline-none focus:shadow-outline"
                                href="#">
                                <div class="bg-teal-500 text-white rounded-lg p-3">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        class="md:h-6 md:w-6 h-4 w-4">
                                        <path
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="font-semibold">Don Financiere</p>

                                </div>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
@yield('content')
