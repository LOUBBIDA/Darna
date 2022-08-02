@extends('layouts.app')

@section('content')
    <!--=====================================-->
    <!--=   Main Banner     Start           =-->
    <!--=====================================-->

    <section class="main-banner-wrap1" data-bg-image="{{ asset('homlisti/img/slider/slider4.jpg') }}">
        <span class="banner-shape1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="banner-shpape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
            </svg>
        </span>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="main-banner-box1">
                        <h1 class="item-title wow fadeInUp" data-wow-delay=".4s">Find the perfect place to Live
                            with your family</h1>
                        <div class="listing-category-list wow fadeInUp" data-wow-delay=".6s">
                            <div class="search-radio">
                                <ul class="list-inline">
                                    <li class="apartments">
                                        <label for="apartments" class="active">
                                            <i class="far fa-building active"></i>
                                            <span>Apartments</span>
                                            <input checked="" type="radio" name="rtcl_category" id="apartments" value="apartments">
                                        </label>
                                    </li>
                                    <li class="home">
                                        <label for="home">
                                            <i class="fas fa-home"></i>
                                            <span>Home</span>
                                            <input checked="" type="radio" name="rtcl_category" id="home" value="home">
                                        </label>
                                    </li>
                                    <li class="office">
                                        <label for="office">
                                            <i class="fas fa-briefcase"></i>
                                            <span>Office</span>
                                            <input checked="" type="radio" name="rtcl_category" id="office" value="office">
                                        </label>
                                    </li>
                                    <li class="shop">
                                        <label for="shop">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Shop</span>
                                            <input checked="" type="radio" name="rtcl_category" id="shop" value="shop">
                                        </label>
                                    </li>
                                    <li class="villa">
                                        <label for="villa">
                                            <i class="fas fa-building"></i>
                                            <span>Villa</span>
                                            <input checked="" type="radio" name="rtcl_category" id="villa" value="villa">
                                        </label>
                                    </li>
                                    <li class="restaurant">
                                        <label for="restaurant">
                                            <i class="fas fa-utensils"></i>
                                            <span>Restaurant</span>
                                            <input checked="" type="radio" name="rtcl_category" id="restaurant" value="restaurant">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-search-wrap">
                            <div class="rld-main-search">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-top">
                                                <div class="rld-single-input item">
                                                    <input type="text" placeholder="Enter Kewword here...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select item">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">All Cities</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                    </select>
                                                </div>
                                                <div class="item rt-filter-btn">
                                                    <div class="dropdown-filter item">
                                                        <span>
                                                            <i class="fas fa-sliders-h"></i>
                                                        </span>
                                                    </div>
                                                    <div class="filter-button-area">
                                                        <a class="filter-btn" href="with-sidebar.html"><span>Search</span><i
                                                                class="fas fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="explore__form-checkbox-list full-filter">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                        <div class="form-group bed">
                                                            <label class="item-bedrooms">Bedrooms</label>
                                                            <div class="nice-select form-control wide" tabindex="0">
                                                                <span class="current">Any</span>
                                                                <ul class="list">
                                                                    <li data-value="1" class="option selected ">For
                                                                        Sale</li>
                                                                    <li data-value="2" class="option">For Rent</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                        <div class="form-group bath">
                                                            <label class="item-bath">Bathrooms</label>
                                                            <div class="nice-select form-control wide" tabindex="0">
                                                                <span class="current">Any</span>
                                                                <ul class="list">
                                                                    <li data-value="1" class="option selected">1
                                                                    </li>
                                                                    <li data-value="2" class="option">2</li>
                                                                    <li data-value="3" class="option">3</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                        <div class="form-group garage">
                                                            <label class="item-garage">Garage</label>
                                                            <div class="nice-select form-control wide" tabindex="0">
                                                                <span class="current">Any</span>
                                                                <ul class="list">
                                                                    <li data-value="1" class="option selected">1
                                                                    </li>
                                                                    <li data-value="2" class="option">2</li>
                                                                    <li data-value="3" class="option">3</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="main-search-field-2 col-12">
                                                        <div class="row">
                                                            <div class="col-md-6 pl-0">
                                                                <div class="price-range-wrapper">
                                                                    <div class="range-box">
                                                                        <div class="price-label">Flat Size:</div>
                                                                        <div id="price-range-filter-3"
                                                                            class="price-range-filter"></div>
                                                                        <div
                                                                            class="price-filter-wrap d-flex align-items-center">
                                                                            <div class="price-range-select">
                                                                                <div class="price-range"
                                                                                    id="price-range-min-3"></div>
                                                                                <div class="price-range">-</div>
                                                                                <div class="price-range"
                                                                                    id="price-range-max-3"></div>
                                                                                <div
                                                                                    class="price-range range-title">
                                                                                    sft</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pl-0">
                                                                <div class="price-range-wrapper">
                                                                    <div class="range-box">
                                                                        <div class="price-label">Distance:</div>
                                                                        <div id="price-range-filter-2"
                                                                            class="price-range-filter"></div>
                                                                        <div
                                                                            class="price-filter-wrap d-flex align-items-center">
                                                                            <div class="price-range-select">
                                                                                <div class="price-range"
                                                                                    id="price-range-min-2"></div>
                                                                                <div class="price-range">-</div>
                                                                                <div class="price-range"
                                                                                    id="price-range-max-2"></div>
                                                                                <div
                                                                                    class="price-range range-title">
                                                                                    km</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <h4 class="text-dark">Amenities</h4>
                                                            <ul class="no-ul-list third-row">
                                                                <li>
                                                                    <input id="a-1" class="checkbox-custom"
                                                                        name="a-1" type="checkbox">
                                                                    <label for="a-1"
                                                                        class="checkbox-custom-label">Air
                                                                        Condition</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-2" class="checkbox-custom"
                                                                        name="a-2" type="checkbox">
                                                                    <label for="a-2"
                                                                        class="checkbox-custom-label">Bedding</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-3" class="checkbox-custom"
                                                                        name="a-3" type="checkbox">
                                                                    <label for="a-3"
                                                                        class="checkbox-custom-label">Heating</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-4" class="checkbox-custom"
                                                                        name="a-4" type="checkbox">
                                                                    <label for="a-4"
                                                                        class="checkbox-custom-label">Internet</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-5" class="checkbox-custom"
                                                                        name="a-5" type="checkbox">
                                                                    <label for="a-5"
                                                                        class="checkbox-custom-label">Microwave</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-6" class="checkbox-custom"
                                                                        name="a-6" type="checkbox">
                                                                    <label for="a-6"
                                                                        class="checkbox-custom-label">Smoking
                                                                        Allow</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-7" class="checkbox-custom"
                                                                        name="a-7" type="checkbox">
                                                                    <label for="a-7"
                                                                        class="checkbox-custom-label">Terrace</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-8" class="checkbox-custom"
                                                                        name="a-8" type="checkbox">
                                                                    <label for="a-8"
                                                                        class="checkbox-custom-label">Balcony</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a-9" class="checkbox-custom"
                                                                        name="a-9" type="checkbox">
                                                                    <label for="a-9"
                                                                        class="checkbox-custom-label">Balcony</label>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="filter-button">
                                                        <a href="index.html" class="filter-btn1">Apply Filter</a>
                                                        <a href="index.html" class="filter-btn1 reset-btn">Reset Filter<i
                                                                class="fas fa-redo-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="item-para wow fadeInUp" data-wow-delay=".4s">We’ve more than <span
                                class="banner-p">54,000</span> apartments, place & plot.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Brand     Start                 =-->
<!--=====================================-->

    <section class="brand-wrap1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="brand-box1 wow fadeInUp" data-wow-delay=".2s">
                        <span class="section-subtitle">Our Clients</span>
                        <h2 class="section-title">We're going to became partners for the long run</h2>
                        <p>Ghen an unknown printer took a galley of type andscr
                            ambledit to make a type specimen book has survived
                            not only five centuries but also.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="img/brand/brand1.svg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="img/brand/brand2.svg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="img/brand/brand3.svg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="img/brand/brand4.svg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="img/brand/brand5.svg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="img/brand/brand6.svg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Property     Start              =-->
<!--=====================================-->

    <section class="property-wrap1">
        <div class="container">
            <div class="isotope-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="item-heading-left">
                            <span class="section-subtitle">Our PROPERTIES</span>
                            <h2 class="section-title">Latest Properties</h2>
                            <div class="bg-title-wrap" style="display: block;">
                                <span class="background-title solid">Properties</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="isotope-classes-tab">
                            <a class="current nav-item" data-filter="*">All Types</a>
                            <a class="nav-item" data-filter=".for-sell">For Sell</a>
                            <a class="nav-item" data-filter=".for-rent">For Rent</a>
                        </div>
                    </div>
                </div>
                <div class="row featuredContainer">
                    <div class="col-xl-4 col-lg-6 col-md-6 for-sell">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="img/blog/blog4.jpg" alt="blog" width="510" height="340"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Sell</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">$15,000<span><i>/</i>mo</span></div>
                                </div>
                                <div class="react-icon">
                                    <ul>
                                        <li>
                                            <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Favourites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Compare">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-category10"><a href="single-listing1.html">Appartment</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title"><a href="single-listing1.html">Family House For Sell</a></h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: 03</li>
                                        <li><i class="flaticon-shower"></i>Baths: 02</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 for-rent">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".2s">
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="img/blog/blog5.jpg" alt="blog" width="510" height="340"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Rent</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">$12,000<span><i>/</i>mo</span></div>
                                </div>
                                <div class="react-icon">
                                    <ul>
                                        <li>
                                            <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Favourites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Compare">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-category10"><a href="single-listing1.html">Villa</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title"><a href="single-listing1.html">Countryside Modern Lake View</a></h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: 03</li>
                                        <li><i class="flaticon-shower"></i>Baths: 02</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 for-sell">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".1s">
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="img/blog/blog6.jpg" alt="blog" width="510" height="340"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Sell</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">$18,000<span><i>/</i>mo</span></div>
                                </div>
                                <div class="react-icon">
                                    <ul>
                                        <li>
                                            <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Favourites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Compare">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-category10"><a href="single-listing1.html">Office</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title"><a href="single-listing1.html">Gorgeous Apartment Building </a></h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: 03</li>
                                        <li><i class="flaticon-shower"></i>Baths: 02</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 for-rent">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="img/blog/blog7.jpg" alt="blog" width="510" height="340"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Rent</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">$19,000<span><i>/</i>mo</span></div>
                                </div>
                                <div class="react-icon">
                                    <ul>
                                        <li>
                                            <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Favourites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Compare">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-category10"><a href="single-listing1.html">Commercial</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title"><a href="single-listing1.html">Countryside Modern Lake View </a></h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: 03</li>
                                        <li><i class="flaticon-shower"></i>Baths: 02</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 for-sell">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".6s">
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="img/blog/blog8.jpg" alt="blog" width="510" height="340"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Sell</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">$30,000<span><i>/</i>mo</span></div>
                                </div>
                                <div class="react-icon">
                                    <ul>
                                        <li>
                                            <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Favourites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Compare">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-category10"><a href="single-listing1.html">Villa</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title"><a href="single-listing1.html">Family House For Sell</a></h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: 03</li>
                                        <li><i class="flaticon-shower"></i>Baths: 02</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 for-rent">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".2s">
                            <div class="item-img">
                                <a href="single-listing1.html"><img src="img/blog/blog9.jpg" alt="blog" width="510" height="340"></a>
                                <div class="item-category-box1">
                                    <div class="item-category">For Rent</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">$25,000<span><i>/</i>mo</span></div>
                                </div>
                                <div class="react-icon">
                                    <ul>
                                        <li>
                                            <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Favourites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Compare">
                                                <i class="flaticon-left-and-right-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-category10"><a href="single-listing1.html">Office</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title"><a href="single-listing1.html">Countryside Modern Lake View</a></h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>Downey, California</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: 03</li>
                                        <li><i class="flaticon-shower"></i>Baths: 02</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>931 Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   About     Start                 =-->
<!--=====================================-->

    <section class="about-wrap1 motion-effects-wrap">
        <div class="shape-img1">
            <img src="img/svg/video-bg-2.svg" alt="shape" width="455" height="516">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-box1 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="">
                            <div class="motion-effects1">
                                <img src="img/figure/shape7.png" alt="shape" width="95" height="87">
                            </div>
                            <div class="motion-effects2">
                                <img src="img/figure/shape8.png" alt="shape" width="90" height="46">
                            </div>
                        </div>
                        <div class="item-img">
                            <a href="single-listing1.html"><img src="img/blog/about1.jpg" alt="about" width="626" height="485"></a>
                        </div>
                        <div class="play-button">
                            <div class="item-icon">
                                <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn play-btn-big">
                                    <span class="play-icon style-2">
                                        <i class="fas fa-play"></i>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box2 wow fadeInRight" data-wow-delay=".5s">
                        <div class="item-heading-left mb-bottom">
                            <span class="section-subtitle">Why Choose Our Properties</span>
                            <h2 class="section-title">The experts in local and international property</h2>
                            <div class="bg-title-wrap" style="display: block;">
                                <span class="background-title solid">Choose</span>
                            </div>
                        </div>
                        <p>Agent hen an unknown printer took a galley of type and scramble
                            d it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic.
                        </p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fas fa-check"></i>Outstanding property </li>
                                <li><i class="fas fa-check"></i>Modern City Locations </li>
                                <li><i class="fas fa-check"></i>Specialist services </li>
                                <li><i class="fas fa-check"></i>Market-leading research</li>
                            </ul>
                        </div>
                        <div class="about-button">
                            <a href="single-listing1.html" class="item-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Location     Start              =-->
<!--=====================================-->

    <section class="location-wrap1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="item-heading-left">
                        <span class="section-subtitle">Top Areas</span>
                        <h2 class="section-title">Find Your Neighborhood</h2>
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">Locations</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-12">
                    <div class="heading-button">
                        <a href="single-listing1.html" class="heading-btn item-btn-2">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="location-box1 wow zoomIn" data-wow-delay=".2s">
                        <div class="item-img">
                            <a href="single-listing1.html"><img src="img/blog/location1.jpg" alt="location" width="510" height="660"></a>
                        </div>
                        <div class="item-content">
                            <div class="content-body">
                                <div class="item-category">02 properties</div>
                                <div class="item-title">
                                    <h3><a href="single-listing2.html">San Francisco</a></h3>
                                </div>
                            </div>
                            <div class="location-button">
                                <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="location-box1 wow zoomIn" data-wow-delay=".6s">
                        <div class="item-img">
                            <a href="single-listing1.html"><img src="img/blog/location2.jpg" alt="location" width="510" height="660"></a>
                        </div>
                        <div class="item-content">
                            <div class="content-body">
                                <div class="item-category">02 properties</div>
                                <div class="item-title">
                                    <h3><a href="single-listing2.html">Los Angeles</a></h3>
                                </div>
                            </div>
                            <div class="location-button">
                                <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="location-box1 wow zoomIn" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="single-listing1.html"><img src="img/blog/location3.jpg" alt="location" width="510" height="660"></a>
                        </div>
                        <div class="item-content">
                            <div class="content-body">
                                <div class="item-category">02 properties</div>
                                <div class="item-title">
                                    <h3><a href="single-listing2.html">Melbourne</a></h3>
                                </div>
                            </div>
                            <div class="location-button">
                                <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="location-box1 wow zoomIn" data-wow-delay=".2s">
                        <div class="item-img">
                            <a href="single-listing1.html"><img src="img/blog/location4.jpg" alt="location" width="510" height="660"></a>
                        </div>
                        <div class="item-content">
                            <div class="content-body">
                                <div class="item-category">02 properties</div>
                                <div class="item-title">
                                    <h3><a href="single-listing2.html">Sydney</a></h3>
                                </div>
                            </div>
                            <div class="location-button">
                                <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Property Banner     Start       =-->
<!--=====================================-->

    <section class="property-banner-wrap1 parallaxie" data-bg-image="img/banner/banner3.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="property-box1 wow slideInUp" data-wow-delay="100">
                        <div class="item-subtitle">Let’s Take a Tour</div>
                        <h3 class="item-title">Search Property Smarter, Quicker & Anywhere</h3>
                        <div class="play-button">
                            <div class="item-icon">
                                <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn">
                                    <span class="play-icon style-1">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <span class="play-text">Watch Video</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="property-img wow fadeInUp" data-wow-delay="100">
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">Property For All</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Team     Start                  =-->
<!--=====================================-->

    <section class="team-wrap1">
        <div class="container">
            <div class="item-heading-center mb-20">
                <span class="section-subtitle">Expertise Is Here</span>
                <h2 class="section-title">Our Exclusive Agetns</h2>
                <div class="bg-title-wrap" style="display: block;">
                    <span class="background-title solid">Our Agents</span>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-box1 wow fadeInUp" data-wow-delay=".6s">
                        <div class="item-img">
                            <a href="agent-lists1.html">
                                <img src="img/team/team17.png" alt="team" width="475" height="511">
                            </a>
                            <ul class="team-social-1">
                                <li class="social-item">
                                    <a href="https://radiustheme.com/" target="_blank" class="social-hover-icon social-link"><i
                                            class="fas fa-share-alt"></i></a>
                                    <ul class="team-social-dropdown">
                                        <li class="social-item">
                                            <a href="https://www.facebook.com/" target="_blank" class="social-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://twitter.com/" target="_blank" class="social-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://www.linkedin.com/" target="_blank" class="social-link">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="category-box">
                                <div class="item-category"><a href="agent-lists1.html">08 Listings</a></div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                <h3><a href="agent-lists1.html">Andren Willium</a></h3>
                                <h4 class="item-subtitle"><a href="agency-lists1.html">Sunshine</a></h4>
                            </div>
                            <div class="item-contact">
                                <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="item-phn-no">Call: +123 699 7700</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-box1 wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="agent-lists1.html">
                                <img src="img/team/team18.png" alt="team" width="475" height="511">
                            </a>
                            <ul class="team-social-1">
                                <li class="social-item">
                                    <a href="https://radiustheme.com/" target="_blank" class="social-hover-icon social-link"><i
                                            class="fas fa-share-alt"></i></a>
                                    <ul class="team-social-dropdown">
                                        <li class="social-item">
                                            <a href="https://www.facebook.com/" target="_blank" class="social-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://twitter.com/" target="_blank" class="social-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://www.linkedin.com/" target="_blank" class="social-link">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="category-box">
                                <div class="item-category"><a href="agent-lists1.html">07 Listings</a></div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                <h3><a href="agent-lists1.html">Polly Matzinger</a></h3>
                                <h4 class="item-subtitle"><a href="agency-lists1.html">Sweet Home</a></h4>
                            </div>
                            <div class="item-contact">
                                <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="item-phn-no">Call: +123 699 7700</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-box1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="item-img">
                            <a href="agent-lists1.html">
                                <img src="img/team/team19.png" alt="team" width="475" height="511">
                            </a>
                            <ul class="team-social-1">
                                <li class="social-item">
                                    <a href="https://radiustheme.com/" target="_blank" class="social-hover-icon social-link"><i
                                            class="fas fa-share-alt"></i></a>
                                    <ul class="team-social-dropdown">
                                        <li class="social-item">
                                            <a href="https://www.facebook.com/" target="_blank" class="social-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://twitter.com/" target="_blank" class="social-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://www.linkedin.com/" target="_blank" class="social-link">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="category-box">
                                <div class="item-category"><a href="agent-lists1.html">11 Listings</a></div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                <h3><a href="agent-lists1.html">Patty Watson</a></h3>
                                <h4 class="item-subtitle"><a href="agency-lists1.html">Eco Builders</a></h4>
                            </div>
                            <div class="item-contact">
                                <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="item-phn-no">Call: +123 699 7700</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-box1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="item-img">
                            <a href="agent-lists1.html">
                                <img src="img/team/team20.png" alt="team" width="475" height="511">
                            </a>
                            <ul class="team-social-1">
                                <li class="social-item">
                                    <a href="https://radiustheme.com/" target="_blank" class="social-hover-icon social-link"><i
                                            class="fas fa-share-alt"></i></a>
                                    <ul class="team-social-dropdown">
                                        <li class="social-item">
                                            <a href="https://www.facebook.com/" target="_blank" class="social-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://twitter.com/" target="_blank" class="social-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social-item">
                                            <a href="https://www.linkedin.com/" target="_blank" class="social-link">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="category-box">
                                <div class="item-category"><a href="agent-lists1.html">06 Listings</a></div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                <h3><a href="agent-lists1.html">Sarah Boysen</a></h3>
                                <h4 class="item-subtitle"><a href="agency-lists1.html">Mark Street</a></h4>
                            </div>
                            <div class="item-contact">
                                <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="item-phn-no">Call: +123 699 7700</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Action     Start                =-->
<!--=====================================-->

    <section class="action-wrap1 wow zoomIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="action-box1" data-bg-image="img/figure/action1.jpg" >
                        <div class="action-layout">
                            <div class="item-title">
                                <div class="item-icon"><i class="fas fa-users"></i></div>
                                <div class="item-head">
                                    <h3>Become an Agent</h3>
                                    <p>Agent hen an unknown printer took a galley scramble</p>
                                </div>

                            </div>
                            <div class="call-button">
                                <a href="agency-lists1.html" class="call-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Progress     Start              =-->
<!--=====================================-->

    <section class="progress-bar-wrap1 counter-appear">
        <div class="shape-img1 wow fadeInLeft" data-wow-delay=".4s">
            <img src="img/figure/counter-bg-2.png" alt="progress">
        </div>
        <div class="container">
            <div class="item-heading-bar">
                <h2 class="item-title">Real Estate by the Numbers</h2>
                <p>In 2022 things look like this percentage</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="progress-box1 wow zoomIn" data-wow-delay=".2s">
                        <div class="progress-layout">
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="progress-content">
                                <div class="item-parcent"><span class="counterUp" data-counter="80">80</span>%</div>
                                <label>Completed Property</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="progress-box1 wow zoomIn" data-wow-delay=".3s">
                        <div class="progress-layout">
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="progress-content">
                                <div class="item-parcent"><span class="counterUp" data-counter="27">27</span>%</div>
                                <label>Property Taxes</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="progress-box1 wow zoomIn" data-wow-delay=".4s">
                        <div class="progress-layout">
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="progress-content">
                                <div class="item-parcent"><span class="counterUp" data-counter="99">99</span>%</div>
                                <label>Satisfied Customer</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="progress-box1 wow zoomIn" data-wow-delay=".2s">
                        <div class="progress-layout">
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="process-circle"></div>
                            <div class="progress-content">
                                <div class="item-parcent"><span class="counterUp" data-counter="55">55</span>%</div>
                                <label>Home Ownership</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Testimonial     Start           =-->
<!--=====================================-->

    <section class="testimonial-wrap1 rt-slide-wrap">
        <div class="container">
            <div class="item-heading-center">
                <span class="section-subtitle">Customer Reviews</span>
                <h2 class="section-title">What’s Our Customer Say</h2>
                <div class="bg-title-wrap" style="display: block;">
                    <span class="background-title solid">testimonials</span>
                </div>
            </div>
            <div class="test-slider-wrapper--style-1">
                <div class="testimonial-layout1 swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="single-test">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-md-12">
                                            <div class="testimonial-img wow fadeInUp" data-wow-delay=".2s">
                                                <img src="img/blog/testimonial1.jpg" alt="blog">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12">
                                            <div class="testimonial-box1 wow fadeInUp" data-wow-delay=".2s">
                                                <ul class="item-rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="item-quotation">Engage with
                                                    our
                                                    professional real estate agents sell Following
                                                    buy or rent your home.Get emails directly to your area reach
                                                    inbox and manage the lead with
                                                </div>
                                                <div class="item-title">
                                                    <h3>Maria Zokatti </h3>
                                                </div>
                                                <div class="item-subtitle">
                                                    <h4>CEO, PSDBOSS</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-test">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-md-12">
                                            <div class="testimonial-img wow fadeInUp" data-wow-delay=".2s">
                                                <img src="img/blog/testimonial3.jpg" alt="blog" width="500" height="321">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12">
                                            <div class="testimonial-box1 wow fadeInUp" data-wow-delay=".2s">
                                                <ul class="item-rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="item-quotation">Engage with
                                                    our
                                                    professional real estate agents sell Following
                                                    buy or rent your home.Get emails directly to your area reach
                                                    inbox and manage the lead with
                                                </div>
                                                <div class="item-title">
                                                    <h3>Maria Zokatti </h3>
                                                </div>
                                                <div class="item-subtitle">
                                                    <h4>CEO, PSDBOSS</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-test">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-md-12">
                                            <div class="testimonial-img wow fadeInUp" data-wow-delay=".2s">
                                                <img src="img/blog/testimonial4.jpg" alt="blog" width="500" height="321">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12">
                                            <div class="testimonial-box1 wow fadeInUp" data-wow-delay=".2s">
                                                <ul class="item-rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="item-quotation">Engage with
                                                    our
                                                    professional real estate agents sell Following
                                                    buy or rent your home.Get emails directly to your area reach
                                                    inbox and manage the lead with
                                                </div>
                                                <div class="item-title">
                                                    <h3>Maria Zokatti </h3>
                                                </div>
                                                <div class="item-subtitle">
                                                    <h4>CEO, PSDBOSS</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- navigation buttons -->
                <div class="swiper-button-prev testimonial-btn"></div>
                <div class="swiper-button-next testimonial-btn"></div>
            </div>
        </div>
        <!-- Slider main container -->


    </section>
<!--=====================================-->
<!--=   Blog     Start                  =-->
<!--=====================================-->

    <section class="blog-wrap1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-8">
                    <div class="item-heading-left">
                        <span class="section-subtitle">What’s New Trending</span>
                        <h2 class="section-title">Latest Blog & Posts</h2>
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">Blogs</span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4">
                    <div class="heading-button">
                        <a href="blog1.html" class="heading-btn">See All Blogs</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box1 wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="blog1.html"><img src="img/blog/blog1.jpg" alt="blog" width="520" height="350"></a>
                        </div>
                        <div class="thumbnail-date">
                            <div class="popup-date">
                                <span class="day">13</span><span class="month">Aug</span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="blog2.html">Apartment, Room</a></li>
                                    <li><a href="blog2.html">5 min</a></li>
                                </ul>
                            </div>
                            <div class="heading-title">
                                <h3><a href="blog1.html">How To Do Market Research For to Sell Faster</a></h3>
                            </div>
                            <div class="blog-button">
                                <a href="blog1.html" class="item-btn">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img">
                            <a href="blog1.html"><img src="img/blog/blog2.jpg" alt="blog" width="520" height="350"></a>
                        </div>
                        <div class="thumbnail-date">
                            <div class="popup-date">
                                <span class="day">13</span><span class="month">Aug</span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="blog2.html">Building, Room</a></li>
                                    <li><a href="blog2.html">4 min</a></li>
                                </ul>
                            </div>
                            <div class="heading-title">
                                <h3><a href="blog1.html">Develop Relationships With Human Resource</a></h3>
                            </div>
                            <div class="blog-button">
                                <a href="blog1.html" class="item-btn">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="item-img">
                            <a href="blog1.html"><img src="img/blog/blog3.jpg" alt="blog" width="520" height="350"></a>
                        </div>
                        <div class="thumbnail-date">
                            <div class="popup-date">
                                <span class="day">13</span><span class="month">Aug</span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="blog2.html">Entertainment, Room</a></li>
                                    <li><a href="blog2.html">3 min</a></li>
                                </ul>
                            </div>
                            <div class="heading-title">
                                <h3><a href="blog1.html">Unique Real Estate Marketing: Have A Tent Business Card</a></h3>
                            </div>
                            <div class="blog-button">
                                <a href="blog1.html" class="item-btn">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=====================================-->
<!--=   Banner     Start                =-->
<!--=====================================-->

    <section class="banner-collection1 motion-effects-wrap" data-wow-delay=".2s">
        <div class="shape-img1">
            <img src="img/svg/video-bg-2.svg" alt="figure" height="149" width="230">
        </div>
        <div class="shape-img2">
            <img src="img/svg/video-bg-2.svg" alt="figure" height="149" width="230">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="banner-box1">
                        <div class="item-img">
                            <img src="img/banner/banner1.png" alt="banner" height="252" width="169"
                                class="img-bg-space">
                            <div class="motion-effects3"><img src="img/figure/shape3.png" alt="shape" height="113"
                                    width="113"></div>
                            <div class="motion-effects4"><img src="img/figure/shape4.png" alt="shape" height="157"
                                    width="154"></div>
                            <div class="motion-effects5"><img src="img/figure/shape5.png" alt="shape" height="91"
                                    width="102"></div>
                        </div>
                        <div class="item-content">
                            <h2 class="heading-title">Become a Real Estate Agent</h2>
                            <p>We only work with the best companies around the globe to survey</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="banner-button">
                        <a href="agency-lists1.html" class="banner-btn">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
