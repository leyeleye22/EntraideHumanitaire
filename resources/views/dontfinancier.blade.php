@extends('LayoutCs.navig')
@section('content')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="background-image: url({{ asset('images/leye.jpg') }});">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    Donnez Généreusement Aujourd’hui
                </h2>
                <p class="mt-2 text-sm text-gray-600">Ensemble, nous pouvons faire une différence. Votre générosité et votre
                    soutien peuvent transformer des vies et créer un impact durable. </p>
            </div>


            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="relative">
                    <label class="text-sm font-bold text-gray-700 tracking-wide">Nom</label>
                    <input class="w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-green-500"
                        type="text" placeholder="Votre nom">
                </div>

                <div class="relative">
                    <label class="text-sm font-bold text-gray-700 tracking-wide">Email</label>
                    <input class="w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-green-500"
                        type="email" placeholder="mail@gmail.com">
                </div>

                <div class="relative">
                    <label class="text-sm font-bold text-gray-700 tracking-wide">Téléphone</label>
                    <input class="w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-green-500"
                        type="number" placeholder="+221 77 777 77 77">
                </div>


                <div class="relative">
                    <label class="text-sm font-bold text-gray-700 tracking-wide">Montant</label>
                    <input class="w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-green-500"
                        type="number" placeholder="xxx F CFA">
                </div>

                <div class="relative">
                    <label class="text-sm font-bold text-gray-700 tracking-wide">Méthode</label>
                    <select name="" id="">
                        <option value="" default></option>
                        <option value="">Orange money</option>
                        <option value="">Wave</option>
                        <option value="">Free Money</option>
                        <option value="">Carte bancaire</option>
                    </select>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center bg-green-500 text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-green-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Participer
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
