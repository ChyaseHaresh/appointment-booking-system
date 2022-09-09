@extends('layout')
@section('contents')
    {{-- Carousel............... --> --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/imgpsh_fullsize_anim-22.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/imgpsh_fullsize_anim-23.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/NECWebsiteCoverArtboard3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <<<<<<< HEAD <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="images/Study-aroad-platform-1.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <p class="m-0" style="font-size: 2em;">25+ Years Experience</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="text-primary text-uppercase font-weight-bold">About Us</p>
                    <h1 class="mb-4">Study Abroad with us.</h1>
                    <p class="mb-4">Studying abroad helps you to learn new languages, appreciate other cultures, overcome
                        challenges of living in another country and gain a greater understanding of the world. These are all
                        things that modern businesses look for when hiring, and such traits will only become more important
                        in the future.</p>
                    <div>
                        <a href="appointment.html" class="btn btn-primary mt-2 px-4 d-block d-lg-block">Book an appointment
                            with us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        =======

        <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="text-primary text-uppercase font-weight-bold">Our Services</p>
                    <p class="mb-4" style="font-size: 2.5em; background-image: linear-gradient(to right,#a3c2f7,white);">
                        Best Course</p>
                </div>
                <div class="row pb-3">
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center  mb-4 p-4">
                            <img src="images/Arts-Humanities-course-300x300.png" class="" alt="">

                        </div>
                        <p class="text-dark font-weight-medium m-0">Art Humanities</p>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                        <a class="border-bottom text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4 p-4">
                            <img src="images/Business-course-300x300.png" alt="">

                        </div>
                        <p class=" font-weight-medium m-0">Business</p>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                        <a class="border-bottom text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center  mb-4 p-4">
                            <img src="images/Computer-IT-Course-300x300.png" alt="">

                        </div>
                        <p class=" font-weight-medium m-0">Computer</p>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                        <a class="border-bottom text-decoration-none" href="">Read More</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center  mb-4 p-4">
                            <img src="images/Hospitality-management-courses-300x300.png" alt="">

                        </div>
                        <p class=" font-weight-medium m-0">Hospitality management</p>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                        <a class="border-bottom text-decoration-none" href="">Read More</a>
                    </div>

                </div>
            </div>

            <div class="testimonial">
                <div class="container">
                    <div class="text-center pb-2">
                        <p class="text-primary text-uppercase font-weight-bold">Our Consumers</p>
                        <p class="mb-4"
                            style="font-size: 2.5em; background-image: linear-gradient(to right,#a3c2f7,white);">
                            Testimonials</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mx-auto card ">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <img src="images/t1.jpg">
                            <p class="name">Monika Perk</p>
                        </div>
                        <div class="col-md-3 card mx-auto">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <img src="images/t2.jpg">
                            <p class="name">Kelvin Matt</p>
                        </div>
                        <div class="col-md-3 card  mx-auto">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <img src="images/t3.jpg">
                            <p class="name">Merina Sea</p>
                        </div>
                    </div>
                </div>
            </div>

        @endsection
