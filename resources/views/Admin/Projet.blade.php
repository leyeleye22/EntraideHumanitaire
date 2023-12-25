@section('nav')
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @extends('LayoutCs.navig')
@section('content')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        form {
            margin-left: -295px;
            margin-top: 35px;
        }

        .projectList {
            margin-left: 210px;
            font-weight: bold;
            font-size: 32px
        }
    </style>
    <div class="min-w-screen min-h-screen bg-gray-100 px-5 py-5">

        <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 mb-10">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold mb-5">Projet</h1>
                <h3 class="text-xl font-medium mb-10">Listes des projets </h3>
            </div>

            <!-- Bouton -->
            <div class="w-full">
                <button
                    class="font-bold bg-green-600 hover:bg-green-700 text-white rounded-md px-10 py-2 transition-colors w-full">
                    Faire un don
                </button>

            </div>
        </div>

        <div
            class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
            <!-- Image -->
            <img src="{{ asset('images/4.jpg') }}" alt="Description de l'image" class="w-full mb-4 rounded-md">

            <!-- Description -->
            <div class="w-full flex-grow mb-4">
                <h2 class="text-center font-bold uppercase mb-2">construction d'une mosquée</h2>
                <p class="text-center text-gray-700">Cette action a pour vocation de contribuer à la construction d'une
                    mosquée en encourageant la cohésion sociale et la partage des valeurs.</p>
            </div>

            <!-- Bouton -->
            <div class="w-full">
                <button
                    class="font-bold bg-green-600 hover:bg-green-700 text-white rounded-md px-10 py-2 transition-colors w-full">
                    Faire un don
                </button>

            </div>
        </div>
        <div
            class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
            <!-- Image -->
            <img src="{{ asset('images/5.jpg') }}" alt="Description de l'image" class="w-full mb-4 rounded-md">

            <!-- Description -->
            <div class="w-full flex-grow mb-4">
                <h2 class="text-center font-bold uppercase mb-2">construction d'un daara</h2>
                <p class="text-center text-gray-700">Cette action a pour vocation de contribuer à la construction d'une
                    mosquée en encourageant la cohésion sociale et la partage des valeurs.</p>
            </div>

            <!-- Bouton -->
            <div class="w-full">
                <button
                    class="font-bold bg-green-600 hover:bg-green-700 text-white rounded-md px-10 py-2 transition-colors w-full">
                    Faire un don
                </button>

            </div>
        </div>
    </div>


    <div class="max-w-4xl mx-auto md:flex">
        @foreach ($projets as $projet)
            
       
        <div
            class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
            <!-- Image -->
            <img src="{{ asset('images/4.jpg') }}" alt="Description de l'image" class="w-full mb-4 rounded-md">

            <!-- Description -->
            <div class="w-full flex-grow mb-4">
                <h2 class="text-center font-bold uppercase mb-2">Description</h2>
                <p class="text-center text-gray-700">Description de la carte.</p>
            </div>

            <!-- Bouton -->
            <div class="w-full">
                <button
                    class="font-bold bg-green-600 hover:bg-green-700 text-white rounded-md px-10 py-2 transition-colors w-full">
                    Faire un don
                </button>

            </div>
        </div> @endforeach
     
        </div>

        </div>
        </div>
@endsection
