<header class="header bg-white">
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-area">
                        <a href="index.html" class="temp-logo">
                            <img src="{{ asset('homlisti/img/logo.svg') }}" width="157" height="40" alt="logo"
                                class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-center position-static">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="active text-dark">Home</a>

                            </li>
                            <li>

                            </li>
                            <li>
                                <a href="{{route('contact')}}">contactez-nous</a>
                            </li>


                            <li>
                                <a href="with-sidebar2.html">Property</a>
                                <ul class="dropdown-menu-col-1">
                                    <li>
                                        <a href="half-map1.html">Properties Map Grid</a>
                                    </li>
                                    <li>
                                        <a href="half-map2.html">Properties Map List</a>
                                    </li>
                                    <li>
                                        <a href="with-sidebar.html">Properties Grid</a>
                                    </li>
                                    <li>
                                        <a href="with-sidebar2.html">Properties List</a>
                                    </li>
                                    <li>
                                        <a href="without-sidebar.html">Properties Full Width</a>
                                    </li>
                                    <li>
                                        <a href="single-listing1.html">Single Property 1</a>
                                    </li>
                                    <li>
                                        <a href="single-listing2.html">Single Property 2</a>
                                    </li>
                                    <li>
                                        <a href="single-listing3.html">Single Property 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="agent-lists1.html">connexion</a>
                                <ul class="dropdown-menu-col-1">
                                    <li>
                                        <a href="{{ route('register') }}">
                                            <i class="fas fa-spinner"></i>register</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <i class="fas fa-spinner"></i>Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i class="fas fa-spinner"></i>Logout</a>
                                    </li>
                                    <li>
                                        <a href="{{route('annonces')}}" class="btn"> ajouter une annonce</a>
                                            <i class="fas fa-spinner"></i>ajouter</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="hide-on-desktop-menu">
                                <a href="index.html">Pages</a>
                                <ul class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <li>
                                        <a href="about-1.html">About</a>
                                    </li>
                                    <li>
                                        <a href="with-sidebar2.html">Property</a>
                                    </li>
                                    <li>
                                        <a href="blog1.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404 Error</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact page</a>
                                    </li>
                                </ul>

                            </li>



                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul class="action-list">
                            <li class="action-item-style left-right-btn">
                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Compare">
                                    <i class="flaticon-left-and-right-arrows"></i>
                                    <div class="item-count">0</div>
                                </a>
                            </li>
                            <li class="action-item-style wish-btn">
                                <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Favourites">
                                    <i class="flaticon-heart"></i>
                                    <div class="item-count">0</div>
                                </a>
                            </li>
                            <li class="action-item-style my-account">
                                <a href="account.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Sign In">
                                    <i class="flaticon-user-1"></i>
                                </a>
                            </li>
                            <li class="listing-button">
                                <a href="post-add.html" class="listing-btn">
                                    <span>
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    <span class="item-text">Add Property</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="rt-header-menu mean-container position-relative" id="meanmenu">
    <div class="mean-bar">
        <a href="index.html">
            <img src='img/logo_light2.svg' alt='logo' class='img-fluid' />
        </a>
        <div class="mean-bar--right">
            <div class="actions search">
                <a href="#template-search" class="item-icon" title="Search">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <div class="actions user">
                <a href="account.html"><i class="flaticon-user"></i></a>
            </div>
            <span class="sidebarBtn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>
        </div>
    </div>
    <div class="rt-slide-nav">
        <div class="offscreen-navigation">
            <nav class="menu-main-primary-container">
                <ul class="menu">
                    <li class="list menu-item-parent menu-item-has-children">
                        <a class="animation" href="index.html">Home</a>
                        <ul class="main-menu__dropdown sub-menu">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index2.html">Home 02</a></li>
                            <li><a href="index3.html">Home 03</a></li>
                            <li><a href="index4.html">Home 04</a></li>
                            <li><a href="index5.html">Home 05</a></li>
                        </ul>
                    </li>
                    <li class="list menu-item-parent menu-item-has-children">
                        <a class="animation" href="with-sidebar2.html">Listing</a>
                        <ul class="main-menu__dropdown sub-menu">
                            <li>
                                <a href="half-map1.html">Properties Map Grid</a>
                            </li>
                            <li>
                                <a href="half-map2.html">Properties Map List</a>
                            </li>
                            <li>
                                <a href="without-sidebar.html">Properties Full Width</a>
                            </li>
                            <li>
                                <a href="with-sidebar.html">Properties Grid</a>
                            </li>
                            <li>
                                <a href="single-listing1.html">Single Property 1</a>
                            </li>
                            <li>
                                <a href="single-listing2.html">Single Property 2</a>
                            </li>
                            <li>
                                <a href="single-listing3.html">Single Property 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list menu-item-parent menu-item-has-children">
                        <a class="animation" href="index.html">Pages</a>
                        <ul class="main-menu__dropdown sub-menu">
                            <li><a href="https://www.radiustheme.com/demo/html/homlisti/about.html">About Us</a></li>
                            <li><a href="404.html">Error page</a></li>
                            <li>
                                <a href="with-sidebar.html">Properties Grid</a>
                            </li>
                            <li><a href="without-sidebar.html">Properties Full Width</a></li>
                            <li><a href="single-agency1.html">Single Agency page</a></li>
                            <li><a href="single-agent1.html">Single-agent page</a></li>
                            <li><a href="pricing-1.html">Pricing page</a></li>
                        </ul>
                    </li>
                    <li class="list menu-item-parent menu-item-has-children">
                        <a class="animation" href="index.html">Blog</a>
                        <ul class="main-menu__dropdown sub-menu">
                            <li><a href="blog1.html">Blog 1</a></li>
                            <li><a href="blog2.html">Blog 2</a></li>
                            <li><a href="blog-details1.html">Blog Details Page</a></li>
                        </ul>
                    </li>
                    <li class="list menu-item-parent menu-item-has-children">
                        <a class="animation" href="index.html">Agents</a>
                        <ul class="main-menu__dropdown sub-menu">
                            <li><a href="agency-lists1.html">Agency List page</a></li>
                            <li><a href="agent-lists1.html">Agent List Page</a></li>
                            <li><a href="agent-reviews1.html">Agent Reviews Page</a></li>
                        </ul>
                    </li>
                    <li class="list menu-item-parent">
                        <a class="animation" href="contact.html">Contact us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
