    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class=" text-center p-2 barre_black "  >
            سيتم الاتصال بكم لتاكيد الطلبية قبل
            ارسالها  |  

          <i class="fa-solid fa-phone-volume"></i>    {{ $companies_info -> tlf }} 
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('welcome')}}" class="logo"  wire:navigate >
                            <img src="{{asset('assets/images/logo.png')}}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="{{ route('welcome') }}"
                                    class="{{ Request::routeIs('/') ? 'active' : '' }}"  wire:navigate  >Accueil
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="{{route('all_categories')}}"
                                    class="{{ Request::routeIs('all_categories') ? 'active' : '' }}"  wire:navigate  >
                                    Catégories
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#"
                                    class="{{ Request::routeIs('about_us') ? 'active' : '' }}"   wire:navigate  >
                                    Produits
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="{{ route('about_us') }}"
                                    class="{{ Request::routeIs('about_us') ? 'active' : '' }}"    wire:navigate  > 
                                    À propos
                                </a>
                            </li>
                            <li class="scroll-to-section"><a href="#men">Men's</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li> -->
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
