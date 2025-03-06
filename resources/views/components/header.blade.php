@if(Route::currentRouteName() == "homepage")
<section class="header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Elevate <em>everyday</em> moments to <em>extraordinary</em>.</h1>
            </div>
        </div>
        <a href="#" class="btn btn-shop">Shop Our Fragrances</a>
    </div>
</section>
@else(Route::currentRouteName() == "about")
<section class="header-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Our <em>guiding</em><br>
            principles.</h1>
            </div>
        </div>
        <a href="#" class="btn btn-shop">Shop Our Fragrances</a>
    </div>
</section>

@endif