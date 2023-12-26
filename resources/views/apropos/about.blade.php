@extends('LayoutCs.navig')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/About.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <div class="about container mb-5">
            <div class="aboutleft mt-5">
                <img src="https://img.freepik.com/free-photo/close-up-women-holding-hands_23-2148959236.jpg?size=626&ext=jpg&ga=GA1.2.1650161440.1694444933&semt=ais"
                    alt="" height="450px" width="500px">
            </div>
            <div class="aboutright mt-5">
                <h6 class="fw-bold bien">Qui sommes-nous?</h6>
                <h3 class="fw-bold">Entraide humanitaire</h3><br>
                <p class="desc">Entraide Humanitaire, une association dévouée à apporter un soutien essentiel aux
                personnes les plus démunies.Notre mission principale est de tendre la main à ceux qui font face à des difficultés et à des circonstances difficiles.
                Que ce soit en fournissant des repas, des vêtements ou une assistance en cas de
                besoin médical, nous sommes ici pour offrir une épaule sur laquelle s'appuyer. Nous croyons en la force de la communauté
                pour créer un changement significatif dans la vie des individus, et c'est cet esprit d'entraide qui guide chacune de nos
                actions.</p>
                <ul class="perform mt-5">
                    <li><i class="bi bi-check-circle-fill"></i>&nbsp;&nbsp;compassion</li>
                    <li><i class="bi bi-check-circle-fill"></i>&nbsp;&nbsp;solidarité </li>
                    <li><i class="bi bi-check-circle-fill"></i>&nbsp;&nbsp;Entraide</li>
                    <li><i class="bi bi-check-circle-fill"></i>&nbsp;&nbsp;service communautaire</li>
                </ul>
            </div>
        </div>
        <section id="seccompteur">
            <div class="container" id="container_compteur">
                <div class="cont1" style="width: 19rem;">
                    <i class="bi bi-file-earmark-check-fill" id="iconi"></i>
                    <h5 style="font-weight: 700;">Nombre Total de Bénéficiaires</h5>
                    <p style="font-weight: 700;">+100</p>
                </div>
                <div class="cont1" style="width: 19rem;">
                    <i class="fa-solid fa-users" id="iconi"></i>
                    <h5 style="font-weight: 700;">Nombre Total de Bénévoles</h5>
                    <p style="font-weight: 700;">+50</p>
                </div>
                <div class="cont1" style="width: 19rem;">
                    <i class="bi bi-calendar-check" id="iconi"></i>
                    <h5 style="font-weight: 700;">Années d'expériences</h5>
                    <p style="font-weight: 700;">2 ans</p>
                </div>
        </section>
    
        <div class="event container">
            <div class="eventleft ">
                <h2 class="fw-bold ">Nos evenements</h2>
                <p class="desc">Chez Entraide Humanitaire, nous croyons fermement en la puissance des événements pour unir la communauté autour d'une
                cause commune et inspirer le changement. Notre association organise régulièrement une variété d'événements solidaires
                visant à sensibiliser, mobiliser et collecter des ressources pour soutenir nos actions humanitaires. Découvrez en image
                quelques-uns des événements que nous avons eu le plaisir d'organiser et rejoignez-nous dans cette aventure inspirante. </p>
            </div>
            <div class="eventright">
                <img src="https://img.freepik.com/premium-photo/group-young-african-american-volunteers-helping-people-charity-center_839833-3177.jpg?size=626&ext=jpg&ga=GA1.1.1650161440.1694444933&semt=ais"
                    alt="" id="image1">
                    <img src="https://img.freepik.com/free-photo/group-different-people-volunteering-foodbank-poor-people_23-2149012210.jpg?w=740&t=st=1703377485~exp=1703378085~hmac=16b670c6326a2d2a6141de4b81492521ab695a81e5d87bab0494847b453e20c8"
                    alt="" id="image2">
                    <img src="https://img.freepik.com/premium-photo/low-angle-view-multiracial-boy-with-father-grandfather-watering-plants-against-clear-sky_13339-309505.jpg?w=740"
                        alt="" id="image3">
            </div>
        </div>
    
        <div class="temoignage container">
            <h2>Temoignage</h2>
            <div class="botem my-5">
                <div class="card container pb-2 pt-5">
                    <p>Je suis fier d'être bénévole pour Entraide Humanitaire depuis deux ans. Ce qui me
                    motive, c'est le sourire sur le visage des bénéficiaires. Chaque geste compte, et savoir que nous faisons une différence
                    tangible dans la vie des gens me remplit de satisfaction. Être bénévole pour Entraide Humanitaire m'a également permis
                    de rencontrer des personnes formidables au sein de la communauté, renforçant ainsi le lien qui nous unit tous dans un
                    esprit d'entraide et de solidarité.</p>
                    <div class="bottomTem d-flex">
                        <img src="https://img.freepik.com/free-photo/handsome-african-american-man-with-beard-turn-face-camera-smiling-confident-standing-pink-background_1258-77841.jpg?size=626&ext=jpg&ga=GA1.1.522834921.1700648147&semt=sph"
                            alt="" id="rounded">
                        <p class=" mt-2 ms-3"><span class="fw-bold ">Ahmed Fall</span><br>Bénévole</p>
                    </div>
                </div>
                <div class="card container pt-5">
                    <p>Je m'appelle Marie, et je tiens à partager combien Entraide Humanitaire a été une lueur d'espoir dans ma vie. Quand la
                    vie a pris une tournure difficile, leur soutien est arrivé comme une bouffée d'air frais. Les repas qu'ils fournissent
                    ne sont pas seulement des repas ; ce sont des rayons de chaleur qui ont nourri non seulement mon corps mais aussi mon
                    esprit. Grâce à eux, je me sens soutenue et capable de surmonter les défis qui se dressent devant moi.</p>
                    <div class="bottomTem d-flex">
                        <img src="https://img.freepik.com/free-photo/blue-user-icon-symbol-website-admin-social-login-element-concept-white-background-3d-rendering_56104-1217.jpg?w=900&t=st=1703380022~exp=1703380622~hmac=2c2a1462a1830cc16dae2602c212cefd1299159e253f7154df6cba117e7199c6"
                            alt="" id="rounded">
                        <p class=" mt-2 ms-3"><span class="fw-bold">Marie DIOUF</span><br>bénéficiaire</p>
                    </div>
                </div>
            </div>
    
        </div>
@endsection