<!-- Navbar -->
<div class="container">
    <div class="row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light rounded-pill"data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{route('shop')}}">SHOP</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">CONTACT</a></li>
                    </ul>
                    <a class="navbar-brand" href="{{ route('homepage') }}"><img src="/images/logo.png" alt=""></a>
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{route('parfum.create')}}">FEEDBACK</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('work')}}">WORK WITH US</a></li>
                        <li class="nav-item"><a class="nav-link cart-icon ps-5" href="#">CART 🛒</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>