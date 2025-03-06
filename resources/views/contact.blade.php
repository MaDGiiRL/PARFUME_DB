<x-layout title="Contact">
    <div class="container py-5 mt-5">
        <div class="row pt-5 mt-5">
            <div class="col-6">
                <img src="/images/contact.png" class="img-fluid">
            </div>
            <div class="col-6">
                <div class="contact-form mt-5">
                    <h2>Let’s chat.</h2>
                    <p>Send us a message and we’ll get right back to you.</p>

                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-custom">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <x-marquee />

    <x-review />
</x-layout>