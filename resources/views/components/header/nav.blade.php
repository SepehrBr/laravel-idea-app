<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
data-bs-theme="dark">
    <div class="container">
        {{-- left --}}
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>Ideas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- right --}}
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-language" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <h6 class="dropdown-header">Select Language</h6>
                        <a class="dropdown-item" href="{{ route('lang', 'en') }}">
                            <img src="{{ asset('vendor/blade-flags/language-en.svg') }}" width="32" height="32"/> English
                        </a>
                        <a class="dropdown-item" href="{{ route('lang', 'fa') }}">
                            <img src="{{ asset('vendor/blade-flags/language-fa.svg') }}" width="32" height="32"/> فارسی
                        </a>
                    </div>
                  </li>
                @guest
                    <x-header.nav-link href="{{ route('login') }}" :active="Route::is('login')">Login</x-header.nav-link>
                    <x-header.nav-link href="{{ route('register') }}" :active="Route::is('register')">Register</x-header.nav-link>
                @endguest
                @auth
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<i class="ms-2 far fa-user-circle" aria-hidden="true"></i></a>
                    <div class="dropdown-menu mb-0 p-0 pt-2 ">
                            @if (Auth::user()->is_admin)
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}" :active="Route::is('admin.dashboard')">
                                    <i class="fas fa-home" aria-hidden="true"></i> Amin Panel
                                </a>
                            @endif
                          <a class="dropdown-item" href="{{ route('users.show', [ 'user' => Auth::user()->id ]) }}" :active="Route::is('users.show') && Auth::user()->is(request()->user)">
                            <i class="fas fa-user" aria-hidden="true"></i> Profile
                          </a>
                          <form action="{{route('logout')}}" method="post" id="logout-user">
                              @csrf
                              @method('DELETE')
                          </form>
                          <a class="dropdown-item bg-danger " href="#" onclick="event.preventDefault();document.getElementById('logout-user').submit();">Logout</a>
                        </div>
                      </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
