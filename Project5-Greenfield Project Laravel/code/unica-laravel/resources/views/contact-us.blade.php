@extends('unicaApp')
@section('mainunica')

    <!-- Contact Information & Map Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Keep in touch with us</h2>
                <p>Been tearing your hair out to find the perfect gift for your loved ones? Try visiting our nationwide
                    local stores. You can also contact us to become partner or distributor. Call us, send us an email or
                    make an appointment now.</p>
            </div>
            <!-- Section Title End -->


        </div>
    </div>
    <!-- Contact Information & Map Section End -->

    <!-- Contact Form Section Start -->
    <div class="section section-padding pt-0">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Send a message</h2>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="contact-form">
                        <form action="https://htmlmail.hasthemes.com/yeasin/learts.php" id="contact-form" method="post">
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Your Name *"
                                        name="name"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *"
                                        name="email"></div>
                                <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center learts-mb-30"><button
                                        class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Form Section End -->

@endsection
