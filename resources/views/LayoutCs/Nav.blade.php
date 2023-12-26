<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('LayoutCs.navig')
    @section('content')
        <br>
        @yield('nav')
        <section class="bg-cover bg-center py-32 w-full" style="background-image: url('{{ asset('images/1703341738105.jpg') }}')">
            <div class="container mx-auto text-left text-white">
                <div class="flex items-center">
                    <div class="w-1/2">
                        <h4 class="text-5xl font-medium mb-6" style="margin-left: 20px; color:white">Bienvenue sur Entraide Humanitaire</h4>
                        <p class="text-xl mb-12" style="margin-left: 20px; font-weight:bold; color:white">Nous sommes une association a but non lucrative et solidaire
                            qui <br>vous propose des actions pour améliorer la situation des personnes vulnérables.</p>
                        <!-- <a href="#"
                            class="bg-green-500 text-white py-4 px-12 rounded-full hover:bg-green-600">Demo</a> -->
                    </div>

                </div>
            </div>
        </section>
        @yield('herosection')
        @yield('intersection')
        @yield('section')
        @yield('footer')
    @endsection

</body>

</html>
