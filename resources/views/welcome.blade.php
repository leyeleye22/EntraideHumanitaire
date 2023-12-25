@extends('LayoutCs.Nav')
@section('nav')
@section('herosection')

<div class="py-16 bg-green-50 overflow-hidden">
    <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
        <div>
            <!-- <span class="text-gray-600 text-lg font-semibold">Derniers</span> -->
            <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl" style="text-align:center">Nos derniéres
                réalisations</h2>
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
                        <p class="text-sm text-gray-600">Nous avons eu à realiser la construction d'une mosquée au
                            village de mbinde...</p>
                    </div>
                    <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                        <span class="text-sm">Lire plus</span>
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
                        <p class="text-sm text-gray-600"> Nous avons eu à soutenir une quarantaine de familles durant
                            l'hivernage en materiels...</p>
                    </div>
                    <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                        <span class="text-sm">Lire plus</span>
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
                        <p class="text-sm text-gray-600">Nous avons eu à construire un puit dans le village de simbane
                            pour leur donner accés à l'eau</p>
                    </div>
                    <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                        <span class="text-sm">Lire plus</span>
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
                        <p class="text-sm text-gray-600">Nous avons eu à collecter d'importants dons en marge de
                            soutenir la population durant les fêtes à venir</p>
                    </div>
                    <a href="#" class="flex justify-between items-center group-hover:text-green-600">
                        <span class="text-sm">Lire plus</span>
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
                <!-- <div
                        class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300 mt-8">
                        <i class="fas fa-rocket text-xl"></i>
                    </div> -->
                <h3 class="text-3xl font-semibold">Qui Somme-Nous??</h3>
                <p class="mt-4 text-lg leading-relaxed text-blueGray-500">


                    L'association de benevole Entraide Humanitaire vise à rassembler des individus bénévoles et
                    solidaires pour lutter contre les crises humanitaires. L'association propose diverses activités,
                    telles que la collecte de fonds, l'organisation d'événements bénévoles, la formation de bénévoles et
                    la sensibilisation au sujet.
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
                    <img class="w-20 h-20 mx-auto rounded-full" src="{{ asset('images/11.jpg') }}" alt="user avatar"
                        height="220" width="220" loading="lazy">
                    <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span> Je suis Yaye fatou Dione
                        commerçante et mére de familles.
                        Apres une faillite de mes projets, et ne pouvant plus subvenir aux besoins de ma famille je me
                        suis retourné vers Entraide Humanitaire
                        et ils m'ont non seulement financé mais aussi formé a ce que je puisse faire nfructuer mon
                        investissement. Je leurs remercie
                        <span class="font-serif">"</span>
                    </p>
                    <div>
                        <h6 class="text-lg font-semibold leading-none">Madame Diop</h6>
                        <span class="text-xs text-gray-500">commerçante</span>
                    </div>
                </div>
            </div>

            <div class="p-6 border border-gray-100 rounded-xl bg-green-50 sm:flex sm:space-x-8 sm:p-8">
                <img class="w-20 h-20 mx-auto rounded-full" src="{{ asset('images/T1.jpeg') }}" alt="user avatar"
                    height="220" width="220" loading="lazy">
                <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                    <p class="text-gray-600"> <span class="font-serif">"</span>
                        Je suis Dieynaba Seck Agripreneuse et Docteur en Agronomie. Voulant aider ma communauté, mon
                        village a pouvoir plus faire face a certaines
                        imrévues j'ai décidé de contacter Entraide Humanitaire afin de nous appuyer pour la mise en
                        oeuvre. Ils nous ont soutenu dans tous les plans
                        aidant ainsi des dizaines de familles.
                        <span class="font-serif">"</span>
                    </p>
                    <div>
                        <h6 class="text-lg font-semibold leading-none">Madame Seck</h6>
                        <span class="text-xs text-gray-500">Agripreneuse</span>
                    </div>
                </div>
            </div>
            <div class="p-6 border border-gray-100 rounded-xl bg-green-50 sm:flex sm:space-x-8 sm:p-8">
                <img class="w-20 h-20 mx-auto rounded-full" src="{{ asset('images/T2.jpg') }}" alt="user avatar"
                    height="220" width="220" loading="lazy">
                <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                    <p class="text-gray-600"> <span class="font-serif">"</span>Je suis Sokhna Bousso TAll Seck
                        Entrepreneuse Voulant aider ma communauté, mon village a pouvoir plus faire face a certaines
                        imrévues j'ai décidé de contacter Entraide Humanitaire afin de nous appuyer pour la mise en
                        oeuvre. Ils nous ont soutenu dans tous les plans
                        aidant ainsi des dizaines de familles. <span class="font-serif">"</span></p>
                    <div>
                        <h6 class="text-lg font-semibold leading-none">Madame Tall</h6>
                        <span class="text-xs text-gray-500">Entrepreneuse</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">Galerie</h2>


<div class="contain">
    <div class="scroll-container">
        <div class="image-list">
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 1">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 2">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 3">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 4">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 5">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 6">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 7">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 8">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 9">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 10">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 11">
            </div>
            <div class="image-contain">
                <img src="{{asset('images/4.jpg') }}" alt="Image 12">
            </div>
        </div>

    </div>
</div>
</div>
</div>

@endsection

<!-- Inclure la section 'footer' -->

@endsection

<style>
    .contain {
        width: 100%;
        margin: 0 auto;
        padding: 20px;
        overflow: hidden;
    }

    .scroll-container {
        width: 4000px;
        overflow: hidden;
    }

    .image-contain {
        width: 900px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-right: 20px;
        margin-right: 20px;
    }

    .image-contain:hover {
        transform: scale(1.05);
    }

    .image-contain img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .image-list {
        display: flex;
        animation: scroll 20s linear infinite;
        /* Animation de défilement */
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
            /* Déplacement de -100% de la largeur à la gauche */
        }
    }
</style>






