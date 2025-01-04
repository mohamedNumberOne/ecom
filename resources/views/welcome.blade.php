@extends('layouts.template')

@section('content_page')
    @include('layouts.nav')


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4> Nous sommes
                                    {{ $companies_info->nom_entreprise }}
                                </h4>

                                <div class="main-border-button">
                                    <a href="#">Commence !</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Femmes</h4>
                                            <!-- <span>Best Clothes For Women</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Femmes</h4>
                                                <p>Découvrez les meilleures Collections pour les Femmes !
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('show_category', [($id = 2)]) }}"
                                                        wire:navigate>Découvrir... </a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Hommes</h4>
                                            <!-- <span>Best Clothes For Men</span>  -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Hommes</h4>
                                                <p>Découvrez les meilleures Collections pour les Hommes !
                                                </p>
                                                <div class="main-border-button">
                                                    <a
                                                        href="{{ route('show_category', [($id = 1)]) }}"wire:navigate>Découvrir...</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Enfants</h4>

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Enfants</h4>
                                                <p>Découvrez les meilleures Collections pour les Enfants !
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('show_category', [($id = 3)]) }}"
                                                        wire:navigate>Découvrir...</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessoires</h4>

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                                <p>Découvrez les meilleurs Accessories !
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('show_category', [($id = 4)]) }}"
                                                        wire:navigate>Découvrir...</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Catégorie Homme </h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel  width_50 ">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/men-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Spring</h4>
                                    <span>$120.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/men-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Air Force 1 X</h4>
                                    <span>$90.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/men-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Love Nana ‘20</h4>
                                    <span>$150.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/men-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Spring</h4>
                                    <span>$120.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->




    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content text-center">
                        <h2>Explore Our Products</h2>
                        <span>
                            مرحبًا بكم في وجهتكم المثالية للتسوق الإلكتروني! نقدم لكم تجربة تسوق فريدة تضمن لكم الراحة
                            والجودة في كل خطوة. نحن نفهم
                            احتياجاتكم، ونبذل قصارى جهدنا لتلبية توقعاتكم بأفضل طريقة ممكنة

                        </span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>متجرنا يتميز بتشكيلة واسعة من المنتجات التي تلبي جميع الأذواق والاحتياجات , جميع منتجاتنا
                                مختارة بعناية لضمان الجودة
                                العالية والقيمة الممتازة
                            </p>
                        </div>
                        <p>
                            نعمل جاهدين على تقديم تجربة تسوق سلسة وممتعة. يتميز موقعنا بتصميم بسيط وسهل الاستخدام، يتيح
                            لكم تصفح المنتجات وإجراء
                            عمليات الشراء بكل يسر

                        </p>
                        <p>
                            نسعى دائمًا لإرضاء عملائنا، ولهذا نقدم خدمة عملاء استثنائية على مدار الساعة لمساعدتكم في أي
                            استفسار أو طلب. بالإضافة إلى
                            ذلك، نضمن تسليم سريع وآمن إلى باب منزلكم، مع سياسة إرجاع مرنة تضمن لكم راحة البال

                        </p>
                        <div class="main-border-button">
                            <a href="products.html">Discover More</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->



    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2> Newsletter </h2>
                        <span>Newsletter.</span>
                    </div>
                    <form id="subscribe" action="">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Nom"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i
                                            class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Adresse:<br><span>
                                        {{-- {{ adresse }}  --}}
                                    </span></li>
                                <li>Phone:<br><span>
                                        {{ $companies_info->tlf }}
                                    </span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>
                                        {{ $companies_info->email }}
                                    </span></li>
                                <li>Social Media:<br><span><a href="{{ $companies_info-> lien_fb }}">Facebook</a>,
                                        <a href="{{ $companies_info-> lien_insta }}">Instagram</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->

    @include('layouts.footer')
@endsection
