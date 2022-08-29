<div class="sticky">

    <div class="app-sidebar mb-5">
        <div class="logo-area">
            <a href="index.html" class="temp-logo">
                <img src="{{ asset('homlisti/img/logo.svg') }}" width="157" height="40" alt="logo"
                    class="img-fluid">
            </a>
        </div>
        {{-- <div class="main-sidemenu">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                    </svg>
                </div> --}}
        <ul class="side-menu">
            <li>
                <h3>Menu</h3>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href=" {{ route('dashboard') }}">

                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('category.create') }}">

                    <span class="side-menu__label">Create catregory</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('category.index') }}">

                    <span class="side-menu__label">liste  catregories</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('villes.create') }}">

                    <span class="side-menu__label">Create ville</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('villes.index') }}">


                    <span class="side-menu__label">les Villes</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('maisons.create') }}">


                    <span class="side-menu__label">Ajouter une maison</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('maisons.index') }}">


                    <span class="side-menu__label">  Les maisons</span>
                </a>
            </li>


        </ul>

    </div>
</div>
