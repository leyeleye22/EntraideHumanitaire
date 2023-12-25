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
