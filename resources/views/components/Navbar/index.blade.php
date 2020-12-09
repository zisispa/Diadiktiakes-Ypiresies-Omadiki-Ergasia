<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">SearchAid</a><button
            class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">ΥΠΗΡΕΣΙΕΣ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#search">ΑΝΑΖΗΤΗΣΗ</a></li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('profile', auth()->user()->id) }}">Λογαριασμός</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item">Αποσύνδεση</button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link js-scroll-trigger bg-primary text-white rounded mr-2"
                            href="/login">ΣΥΝΔΕΣΗ</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger bg-dark text-white rounded pr-2"
                            href="/register">ΕΓΓΡΑΦΗ</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
