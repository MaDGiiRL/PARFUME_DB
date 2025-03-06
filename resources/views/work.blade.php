<x-layout title="Work with us">
    <div class="container work py-5 mt-5">
        <div class="row pt-5 mt-5">
            <div class="col-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <h1 class="pt-5">Work with us.</h1>
            </div>
            <div class="col-6" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <div class="contact-form mt-5">
                    <h2>Send your application</h2>
                    <p>Send us a message introducing yourself and attaching your CV.</p>

                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" cols="30" rows="10" placeholder="Tell us about you.." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload CV</label>
                            <input type="file" class="form-control" name="file">
                        </div>

                        <button type="submit" class="btn btn-custom">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</x-layout>