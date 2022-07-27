<nav style="background-color: #262626;" class="navbar navbar-expand-lg   ">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="https://cdn-icons-png.flaticon.com/512/1441/1441035.png" class="icon" alt="todosmarticon">
    </a>
    @guest

    <!-- @if (request()->route()->uri == 'notes')
    
        <div></div>
    @endif
    @endguest -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 70px;">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @guest
                    @if (Route::has('register'))

                    @endif
                    @else
                    <div>
            <li>
                <a class="btn btn-outline-light btn-lg px-5" href="{{ URL::to('/') }}" class="list-group-item  bg-light">New <i class="fas fa-plus-circle"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li>
                <a class=" btn btn-outline-light btn-lg px-5" href="{{ url('/notes') }}" class="list-group-item  bg-light">Notes</a>
            </li>
        </ul>

    </div>

    <a class="btn btn-outline-light btn-lg px-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>



    </div>
    @endguest
    </div>
    </li>
    </ul>
    </div>
</nav>