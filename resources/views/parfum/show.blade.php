<x-layout title="{{$parfum->name}}">

    <div class="container featured pt-5 mt-5">
        <div class="row pt-5">
            <div class="col-md-6 p-5 d-flex justify-content-start" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <img src="{{Storage::url($parfum->img)}}" class="img-fluid">

            </div>
            <div class="col-md-6 text-start p-5  flex-column" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <H2 class="fw-bold">{{$parfum->name}}</H2>

                <p class="card-text pt-2">$ {{$parfum->price}} | 5 MIN READ</p>

                <p class="lead">
                    {{$parfum->body}}

                    <a href="{{route('parfum.create')}}" class="btn btn-featured w-100 mt-5">GO BACK</a>
            </div>

        </div>
    </div>

    <div class="container featured py-5 mt-5">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center text-center p-5" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <H2 class="fw-bold">Nature as the<br> <em>muse.</em></H2>

                <p class="lead p-5">
                    The sweet blush of blooming petals, the woody embrace of a forest, the crisp freshness of morning dew – these elements find their way into our fragrances, infusing them with life and authenticity. Our artisans capture these fleeting moments, distilling them into scents that encapsulate the beauty of the natural world.
                </p>
            </div>
            <div class="col-md-6 p-5 d-flex justify-content-start" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <img src="/images/herbs.png" class="img-fluid">

            </div>
        </div>

    </div>
    </div>

</x-layout>