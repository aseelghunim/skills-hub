<header id="header">

    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a class="logo" href="index.html">
                    <img src="{{ asset('web/assets/img/logo.png') }}" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $cat)
                        <li><a href="{{ route('cat.show',$cat->id) }}">{{ $cat->title }}</a></li>
                        @endforeach


                    </ul>
                </li>

                <li><a href="contact.html">Contact</a></li>
                <li>   <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <a> <button type="submit" class=" text-uppercase">Log out</button></a>

                    </form></li>

            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>

