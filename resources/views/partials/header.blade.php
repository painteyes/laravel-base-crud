

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="{{route('homepage')}}">
                <img class="logo" src="{{asset('img/logo.jpg')}}" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link {{ Request::route() && Request::route()->getName() === 'comics.index' ? 'active' : ''}}" aria-current="page" href="{{route('comics.index')}}">All comics</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::route() && Request::route()->getName() === 'comics.create' ? 'active' : ''}}" href="{{route('comics.create')}}">Add new comic</a>
                    </li>

                </ul>

            </div>

        </div>
        
    </nav>

</header>