@extends('LayoutCs.Nav')
@section('nav')
@section('herosection')
    <div class="py-16 bg-green-50 overflow-hidden">
        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
            <div>
                <span class="text-gray-600 text-lg font-semibold">Derniers</span>
                <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Nos derniers articles</h2>
            </div>
            <div
                class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4">
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="{{ asset('images/7.jpg') }}" class="w-48" width="512" height="512"
                            alt="burger illustration"> <!-- Modifié -->

                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-green-600">Construction
                                Mosquée</h5>
                            <p class="text-sm text-gray-600">Neque Dolor, fugiat non cum doloribus aperiam voluptates
                                nostrum.</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                            <span class="text-sm">Read more</span>
                            <span
                                class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="{{ asset('images/7.jpg') }}" class="w-48" width="512" height="512"
                            alt="burger illustration"> <!-- Modifié -->

                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-green-600">Aide aux
                                familles</h5>
                            <p class="text-sm text-gray-600">Neque Dolor, fugiat non cum doloribus aperiam voluptates
                                nostrum.</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                            <span class="text-sm">Read more</span>
                            <span
                                class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>

                </div>
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="{{ asset('images/7.jpg') }}" class="w-48" width="512" height="512"
                            alt="burger illustration"> <!-- Modifié -->

                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-green-600">Construction
                                d'un puit</h5>
                            <p class="text-sm text-gray-600">Neque Dolor, fugiat non cum doloribus aperiam voluptates
                                nostrum.</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                            <span class="text-sm">Read more</span>
                            <span
                                class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group bg-gray-100 transition hover:z-[1] hover:shadow-2xl lg:hidden xl:block">
                    <div class="relative p-8 space-y-8">
                        <img src="{{ asset('images/7.jpg') }}" class="w-48" width="512" height="512"
                            alt="burger illustration"> <!-- Modifié -->

                        <div class="space-y-2">
                            <h5 class="text-xl text-gray-800 font-medium transition group-hover:text-green-600">Collecte don
                            </h5>
                            <p class="text-sm text-gray-600">Neque Dolor, fugiat non cum doloribus aperiam voluptates
                                nostrum.</p>
                        </div>
                        <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                            <span class="text-sm">Read more</span>
                            <span
                                class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('intersection')
    <section class="relative pt-12 bg-blueGray-50">
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{ asset('images/2.jpg') }}">
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <div
                        class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300 mt-8">
                        <i class="fas fa-rocket text-xl"></i>
                    </div>
                    <h3 class="text-3xl font-semibold">Qui Somme-Nous??</h3>
                    <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                        The extension comes with three pre-built pages to help you get
                        started faster. You can change the text and images and you're
                        good to go.
                    </p>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('section')
    <div class="py-16 white">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Temoignage</h2>
            <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-green-50 text-center sm:p-8">
                    <div class="h-full flex flex-col justify-center space-y-4">
                        <img class="w-20 h-20 mx-auto rounded-full" src="{{ asset('images/T3.jpg') }}" alt="user avatar"
                            height="220" width="220" loading="lazy">
                        <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                            aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                            repudiandae ad doloribus. <span class="font-serif">"</span></p>
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                            <span class="text-xs text-gray-500">Product Designer</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 border border-gray-100 rounded-xl bg-green-50 sm:flex sm:space-x-8 sm:p-8">
                    <img class="w-20 h-20 mx-auto rounded-full" src="{{ asset('images/T3.jpg') }}" alt="user avatar"
                        height="220" width="220" loading="lazy">
                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                        <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam
                            consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae
                            ad doloribus. <span class="font-serif">"</span></p>
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                            <span class="text-xs text-gray-500">Product Designer</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 border border-gray-100 rounded-xl bg-green-50 sm:flex sm:space-x-8 sm:p-8">
                    <img class="w-20 h-20 mx-auto rounded-full" src="{{ asset('images/T3.jpg') }}" alt="user avatar"
                        height="220" width="220" loading="lazy">
                    <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                        <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam
                            consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae
                            ad doloribus. <span class="font-serif">"</span></p>
                        <div>
                            <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                            <span class="text-xs text-gray-500">Product Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Galerie</h2>
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/4.jpg') }}" alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/4.jpg') }}" alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/4.jpg') }}" alt="" />
                </div>
            </div>

            <div class="grid gap-4">

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>
            </div>
            <div class="grid gap-4">

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/6.jpg') }}" alt="" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Galerie</h2>
                </div>

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/4.jpg') }}" alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/4.jpg') }}" alt="" />
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/4.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <footer class="w-full text-gray-700 bg-green-100 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <img src="{{ asset('images/leye.jpg') }}" alt="Entra'aide humanitaire" width="40%"
                        height="80%">
                </a>
                <p class="mt-2 text-sm text-gray-500">Entr'aide Humanitaire</p>
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">A propos</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Assocation</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Objectif</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contact</a>
                        </li>
                    </nav>
                </div>


                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Whatsapp (+221 78 113 26 18)</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Facebook (Entra'ide
                                Humanitaire)</a>
                        </li>
                        <li class="mt-3">
                            <a
                                class="text-gray-500 cursor-pointer hover:text-gray-900">Email(Entraidehumanitaire@gmail.com)</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">NewsLetter
                    </h2>
                    <input type="email">
                </div>
            </div>
        </div>
        <div class="bg-green-300">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-black-700 capitalize xl:text-center">© 2020 All rights reserved </p>
            </div>
        </div>
    </footer>
@endsection
@endsection
