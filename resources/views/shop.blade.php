<x-layout title="Shop">
    <section class="header-shop">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1>All <em>fragrances</em>.</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container featured py-5 my-5">
        <div class="row py-5 my-5">
            <h2 class="fw-bold">Shop <em>fragrances</em>.</h2>

            @foreach($parfums as $parfum)
            <div class="col-md-3 pt-3" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">
                @if($parfum['on_sale'])
                <div class="featured-card position-relative p-3">
                    <span class="sale-badge">ON SALE</span>
                    <img src="{{ asset($parfum['image']) }}" class="featured-img" alt="Perfume">
                    <h5 class="featured-name">{{ $parfum['name'] }}</h5>
                    <p class="featured-desc">{{ $parfum['scent'] }}</p>
                    <p class="price">${{ $parfum['price'] }}.99</p>
                    <a href="{{ route('show', ['id' => $parfum['id']]) }}" class="btn btn-featured w-100">SHOP NOW</a>
                </div>
                @else
                <div class="featured-card position-relative p-3">
                    <img src="{{ asset($parfum['image']) }}" class="featured-img" alt="Perfume">
                    <h5 class="featured-name">{{ $parfum['name'] }}</h5>
                    <p class="featured-desc">{{ $parfum['scent'] }}</p>
                    <p class="price">${{ $parfum['price'] }}.99</p>
                    <a href="{{ route('show', ['id' => $parfum['id']]) }}" class="btn btn-featured w-100">SHOP NOW</a>
                </div>
                @endif
            </div>
            @endforeach

        </div>
    </div>
</x-layout>