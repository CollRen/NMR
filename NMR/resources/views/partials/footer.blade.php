@php

    $annee = date('Y');
@endphp
<footer>
    <footer>

        <h4>Des commentaires&nbsp;?</h4>
        <h5>
            Rejoignez-nous sur nos plateformes sociales.
        </h5>

        <button
            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
            type="button">
            <i class="fab fa-twitter"></i></button>
        <button
            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
            type="button">
            <i class="fab fa-facebook-square"></i></button><button
            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
            type="button">
            <i class="fab fa-dribbble"></i></button><button
            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
            type="button">
            <i class="fab fa-github"></i>
        </button>
        </div>
        </div>

        <span>Liens utililes</span>
        <ul>

            <li>
                <a href="/">Accueil</a>
            </li>

        </ul>
        </div>
        <div>
            <span>Autres ressources</span>
            <ul>
                <li>
                    <a href="#">Termes &amp; Conditions</a>
                </li>
                <li>
                    <a href="#">Vie privée</a>
                </li>
                <li>
                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                        href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
        </div>
        </div>
        <hr class="my-6 border-clr-pale1 opacity-5">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-clr-pri2 font-semibold py-1">
                    Copyright © <span id="get-current-year">@php
                        echo $annee;
                    @endphp</span><a href="#"
                        class="text-clr-pri2 hover:text-gray-800" target="_blank"> Créé par
                        <a href="https://www.creative-tim.com?ref=njs-profile"
                            class="text-clr-pri2 hover:text-clr-pri1">RDM WEB</a>.
                </div>
            </div>
        </div>
        </div>
    </footer>

</footer>
