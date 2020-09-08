<!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <div class="topbar" id="top" style="background:black">
            <div class="header6">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-lg h6-nav-bar">
                        <a href="/" class="navbar-brand"><img src="{{URL::asset('images/logos/white-text.png')}}" alt="wrapkit" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h6-info" aria-controls="h6-info" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="h6-info">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/">
                                        BERANDA
                                    </a>
                                </li>
                                
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/about">
                                        TENTANG
                                    </a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/lihatkelas">
                                        KELAS
                                    </a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="/contact">
                                        KONTAK
                                    </a>
                                </li>
                               
                            </ul>
                            {{-- <div class="act-buttons">
                                 <a href="/login" class="btn btn-danger-gradiant font-14">LOGIN</a>
                            </div> --}}

                            @guest
                            <div class="nav-item act-buttons">
                                <a class="nav-link btn btn-success-gradiant font-14" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            {{-- @if (Route::has('register'))
                                <div class="nav-item act-buttons">
                                    <a class="nav-link btn btn-danger-gradiant font-14" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif --}}
                            @else
                                
                                <div class="nav-item dropdown act-buttons" style="text-transform:uppercase">
                                    <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="nav-link text-dark" href="/user">
                                            PROFILE
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->