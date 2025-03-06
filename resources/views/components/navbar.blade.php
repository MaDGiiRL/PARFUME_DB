<!-- Navbar -->
<div class="container">
    <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light rounded-pill">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('shop')}}">SHOP</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">ABOUT</a></li>
                    </ul>
                    <a class="navbar-brand" href="{{ route('homepage') }}"><img src="/images/logo.png" alt=""></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('parfum.create')}}">FEEDBACK</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">CONTACT</a></li>
                        <li class="nav-item"><a class="nav-link cart-icon" href="#">🛒</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>