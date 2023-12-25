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
                <a href="/home" class="text-2xl no-underline text-green hover:text-green font-sans font-bold">Entraide
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
                href="/apropos">A propos de nous</a>
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
                                href="where/don/financier">
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

<!--footer-->

<link rel="stylesheet" href="{{ asset('css/footer.css') }}">


<footer class="page-bottom">
    <div class="container-contact">
        <h5 class="title" style="font-size: 20px;">Nous contacter</h5>
        <p class='intitule-footer'>
            Si vous avez des questions, des commentaires ou des préoccupations concernant<br> notre organisation
            ou nos activtés, n'hésitez pas à nous contacter.<br> Notre équipe de service-client est disponible
            à tout moment pour vous aider.
        </p>
        <div class='footer-body'>
            <div class="left">

                <div class="item">
                    <span>
                        <img src="{{asset('images/map.svg') }}" alt=""
                            style="width: 18px; background: white; margin-top: 11px; margin-left: 8px; height: 18px; border: 1px solid white; border-radius: 50%;" />
                    </span>
                    <p class='detail-contact'>Localisation<br />Senegal</p>
                </div>

                <div class="item">
                    <span>
                        <img src="{{asset('images/mail.svg') }}" alt=""
                            style="width: 18px; background: white; margin-top: 11px; margin-left: 8px; height: 18px; border: 1px solid white; border-radius: 50%;" />
                    </span>
                    <p class='detail-contact'>E-mail<br /><span style="margin-left: 30px;">rahma@gmail.com</span></p>
                </div>

                <div class="item">
                    <span>
                        <img src="{{asset('images/phone.svg') }}" alt=""
                            style="width: 18px; background: white; margin-top: 11px; margin-left: 8px; height: 18px; border: 1px solid white; border-radius: 50%;" />
                    </span>
                    <p class='detail-contact'>Telephone<br />33 854 45 21</p>
                </div>

                <div class="item">
                    <span>
                        <img src="{{asset('images/time.svg') }}" alt=""
                            style="width: 18px; background: white; margin-left: 8px; margin-top: 11px; height: 18px; border: 1px solid white; border-radius: 50%;" />
                    </span>
                    <p class='detail-contact'>Disponibilité<br />24h/24 7j/7</p>
                </div>
            </div>

            <div class="right">
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Prénom et Nom"
                        class='contact-input'>
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Adresse mail"
                        class='contact-inpute'>
                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Sujet"
                        class='contact-subject'>
                    <textarea name="message" placeholder="Message" class='contact-message'></textarea>
                    <button type="submit" class='contact-send'>Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-footer">
        <div class="footer-head">
            <div class="footer-logo">
                <img src="{{asset('images/leye.jpg') }}" alt="" class='logo-footer'>
            </div>
            <h2 class='footer-title'>Agri'community</h2>
            <div class='footer-icon1'>
                <a href="https://api.whatsapp.com/send?phone=221776854665&text=Bonjour" target="_blank"
                    rel="noreferrer">
                    <div><img src="{{ asset('images/whatsapp.svg') }}" alt=""
                            style="width: 30px; height: 30px; margin-top: 8px;"></div>
                    <div class='kaw'><span
                            style="color: #4DBA1A; font-weight: bold; font-size: 17px; margin-left: 13px;">Whatsapp</span>
                    </div>
                </a>
            </div>
        </div>

        <div>
            <div class="papa">
                <div classname='kaze'>
                    <h3>A propos</h3>
                    <p class='white'>
                        Entraide Humanitaire est une association<br>a but social et caritative pour les sénégalais<br>visant a ameliorer
                        le bien etre de ce peuple<br>a travers vos actions et votre soutien infaillible<br>qui ne cesse de nous surprendre
                        <br>
                    </p>
                </div>
                <div class='services'>
                    <h3> Nos Services</h3>
                    <li>Dons aux familles</li>
                    <li>Finanacement de projets</li>
                    <li>Conseils</li>
                    <li>Educations</li>
                    <li>informations</li>
                </div>
                <div classname='marre'>
                    <h3>Informations de contact</h3>
                    <li>Dakar, Sénégal</li>
                    <li>rahma@gmail.com</li>
                    <li>+221 33 325 21 12</li>
                </div>
            </div>
            <div class='fall'>
                <span><img src="{{ asset('images/insta.jpeg') }}" alt=""
                        style="width: 20px; height: 20px; margin-top: 8px;"></span>
                <span><img src="{{ asset('images/facebook.png') }}" alt=""
                        style="width: 20px; height: 20px; margin-top: 8px;"></span>
                <span><img src="{{ asset('images/twetter.png') }}" alt=""
                        style="width: 20px; height: 20px; margin-top: 8px;"></span>
            </div>
        </div>
    </div>
</footer>

