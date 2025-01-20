<!-- Counter Area Start -->
<div class="counter-area bg-relative bg-cover pd-top-110 pd-bottom-100"
    style="background-image: url('{{ asset('assets/img/bg/55.jpg') }}');">
    <div class="container pd-bottom-90">
    </div>
</div>
<!-- Counter Area End -->

<!-- Contact Area Start -->
<div class="contact-area">
    <div class="container">
        <div class="contact-inner-1">
            <div class="row">
                <div class="col-lg-8 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img class="w-100" src="{{ asset('assets/img/contact.jpg') }}" alt="img">
                </div>
                <div class="col-lg-4 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mb-0">
                        <h6 class="sub-title">GET IN TOUCH</h6>
                        <h2 class="title">Bringing Your <span>Vision</span> To Life</h2>
                        <p class="content">We’re here to help with your digital needs, from custom solutions to platform
                            enhancements. Let’s bring your ideas to life and grow your online presence!</p>
                        <form class="mt-4" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="email" placeholder="Your Email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="Your Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-inner style-border">
                                        <input type="text" placeholder="Your Subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input-inner style-border">
                                        <textarea placeholder="Message" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-black mt-0 w-100 border-radius-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: false,
        timer: 1500
    });

</script>

<!-- Contact Area End -->
