    <!-- ***** Footer Start ***** -->
    <div class="container mt-5 mb-2 text-center div_support ">
        <hr style="margin-top: 20px">
        <div class="row">
            <div class="col-md-4">
                <div class="icone"> <i class="fa-solid fa-truck-fast"></i> </div>
                <h4 class="mt-2" > Livraison 58 Wilayas </h4>

            </div>
            <div class="col-md-4">
                <div class="icone"> <i class="fa-solid fa-headset"></i> </div>
                <h4 class="mt-2" > Support 7/7 </h4>

            </div>
            <div class="col-md-4">
                <div class="icone"> <i class="fa-solid fa-money-bill-wave"></i> </div>
                <h4 class="mt-2" > Paiment à la livraison </h4>

            </div>
        </div>
    </div>
    <footer>
        <div class="container">



            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{asset('assets/images/white-logo.png')}}" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#"> 
                                     {{  $companies_info->adresse }}
                                </a></li>
                            <li><a href="#"> 
                                    {{  $companies_info->email }}
                                </a></li>
                            <li><a href="#"> 
                                      {{  $companies_info->tlf }}
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Catégories</h4>
                    <ul>
                        <li><a href="#">Hommes Shopping</a></li>
                        <li><a href="#">Femmes Shopping</a></li>
                        <li><a href="#">Enfants Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4> Liens rapides </h4>
                    <ul>
                        <li><a href="{{route('welcome')}}" wire:navigate >Accueil</a></li>
                        <li><a href="{{route('about_us')}}" wire:navigate  >À propos</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4> Liens rapides </h4>
                    <ul>
                        <li><a href="/" wire:navigate >Accueil</a></li>
                        <li><a href="/about-us" wire:navigate > À propos</a></li>
                        <li><a href="{{  $companies_info->lien_fb }}"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="{{  $companies_info->lien_insta }}"><i class="fa fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">

                        <ul>
                            <li class="text-white"> Ce site est crée par :
                                <a href="https://www.instagram.com/formation.dev.web/"  target="_blank" >
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
