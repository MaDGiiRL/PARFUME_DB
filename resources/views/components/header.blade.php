@if(Route::currentRouteName() == "homepage")
<section class="header" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1800">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8" data-aos="fade-left"
     data-aos-easing="linear"
     data-aos-duration="1900">
                <h1>Elevate <em>everyday</em> moments to <em>extraordinary</em>.</h1>
            </div>
        </div>
        <a href="#" class="btn btn-shop" data-aos="fade-left"
     data-aos-easing="linear"
     data-aos-duration="2000">Shop Our Fragrances</a>
    </div>
</section>
@else(Route::currentRouteName() == "about")
<section class="header-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8" data-aos="fade-left"
     data-aos-easing="linear"
     data-aos-duration="1900">
                <h1>Our <em>guiding</em><br>
            principles.</h1>
            </div>
        </div>
        <a href="#" class="btn btn-shop" data-aos="fade-left"
     data-aos-easing="linear"
     data-aos-duration="2000">Shop Our Fragrances</a>
    </div>
</section>

@endif