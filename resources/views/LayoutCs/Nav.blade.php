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
        <section class="bg-cover bg-center py-32 w-full" style="background-image: url('{{ asset('images/1.jpg') }}');">
            <div class="container mx-auto text-left text-white">
                <div class="flex items-center">
                    <div class="w-1/2">
                        <h1 class="text-5xl font-medium mb-6">Welcome to My Agency</h1>
                        <p class="text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio, gravida pellentesque urna varius vitae.</p>
                        <a href="#"
                            class="bg-green-500 text-white py-4 px-12 rounded-full hover:bg-green-600">Demo</a>
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
