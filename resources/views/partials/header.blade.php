<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ (Request::route() -> getName() == 'home_page') ? 'active' : '' }}" href="{{ route('home_page') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link {{ (Request::route() -> getName() == 'passengers.index') ? 'active' : '' }}" href="{{ route('passengers.index') }}">Passengers</a>
                <button type="button" class="btn btn-success btn-sm">
                    <a class="nav-link text-white" href="{{ route('passengers.create') }}">add</a>
                </button>
            </div>
        </div>
    </nav>
</header>