<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultancy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>
    <!-- nav bar -->
    <div class="row">
        <nav class="navbar navbar-expand-lg py-0" style="background-color: ;">
            <div class="container-fluid" style="margin-left: 150px ;">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.jpg') }}" alt=""
                        height="80px" width="200px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="nav mx-auto navbar-nav">
                        <!-- Home dropdown -->
                        <li>
                            <div class="navdrop dropdown ">
                                <button class="navbtn dropbtn ">Home</button>
                            </div>
                        </li>
                        <li>
                            <div class="navdrop dropdown ">
                                <button class="navbtn dropbtn ">About Us</button>
                            </div>
                        </li>
                        <li>
                            <div class="navdrop dropdown ">
                                <button class="navbtn dropbtn ">Countries <i
                                        class="fa-solid fa-caret-down"></i></button>
                                <div class="navcontent dropdown-content ">
                                    <a href="#">Australia</a>
                                    <a href="#">Canada</a>
                                    <a href="#">United Kingdom</a>
                                    <a href="#">United States</a>
                                    <a href="#">New Zealand</a>
                                    <a href="#">Netherlands</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="navdrop dropdown ">
                                <button class="navbtn dropbtn ">Contact Us</button>
                            </div>
                        </li>
                        <div class="navdrop dropdown ">
                            <button class="navbtn dropbtn"><i class="fa-solid fa-magnifying-glass"></i>
                                <div class="navcontent dropdown-content ">
                                    <p>Search for course</p>
                                </div>
                            </button>
                        </div>
                        <button type="button" class="btn btn-info">Apply Now</button>
                </div>
            </div>
        </nav>
    </div>

    @php
        use Carbon\Carbon;
        $date = Carbon::now('+5:45');
        echo $date->isoFormat('YYYY-MM-DD');
        $c_date = $date->isoFormat('YYYY-MM-DD');
        $c_time = $date->isoFormat('H:mm');

    $c_week = $date->isoFormat('ddd, MMM DD');

        $ch_time = $date->addHour()->isoFormat('H:mm');
    @endphp


    <div class="container">
        <h2 class="mt-5">Appointment Availability</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h5>Available days</h5>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>{{$date->isoFormat('ddd, MMM DD')}}</option>
                    @for ($i = 0; $i < 6; $i++)
                        <option value="1">{{$date->addDay()->isoFormat('ddd, MMM DD');}}</option>
                    @endfor
                </select>

                <div class="d-grid gap-2 d-md-block">
                    <h5>Available time slots</h5>

                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><a class="time" href="">10:00</a></button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><a class="time" href="">11:00</a></button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><a class="time" href="">12:00</a></button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><a class="time" href="">2:00</a></button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><a class="time" href="">3:00</a></button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><a class="time" href="">4:00</a></button>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/appoint.svg') }}" alt="">
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #83aef7;">
                        <h5 class="modal-title" id="exampleModalLabel">Appointment with Nepal Education Consultancy
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fa-regular fa-calendar-days "></i> Sunday , 4 Sept 2022</p>
                        <p><i class="fa-solid fa-clock"></i> 06:15 (UTC+05:45)
                            Start time</p>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-user"></i></label>Name
                            <div class="col-sm-9">
                                <input type="name" class="form-control"
                                    id="name"placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-phone"></i></label>Phone
                            <div class="col-sm-9">
                                <input type="phone" class="form-control" id="phone"
                                    placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-envelope"></i></label>Email
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-clipboard"></i></label>Description
                            <div class="col-sm-9">
                                <textarea class="form-control" id="description" placeholder="Enter appointment description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary">Place Appointment</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----Footer-- -->

        <div class="container mt-5">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-4 mb-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">About Us</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Career Quiz</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Universities</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Mini IELTS Mock
                                    Test</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">SOP Guidelines</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Academic Calender</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Nepal Postal Code</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i
                                        class="fa-solid fa-phone"></i> 015910770, 015910776, 9818306105, 015911235
                                    (Lalitpur Branch) </a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i
                                        class="fa-solid fa-envelope"></i> info@nepalec.edu.np </a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i
                                        class="fa-solid fa-location-dot"></i> Head Office: Maha Ananga Niwas,
                                    Putalisadak, Opposite of Century Bank, Kathmandu, Nepal</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i
                                        class="fa-solid fa-location-dot"></i> Lalipur Branch: Kumaripati, Beside
                                    Machhapuchchhre Bank , Lalitpur, Kathmandu, Nepal </a></li>
                        </ul>
                    </div>



                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                        <p>© 2022 Company, Inc. All rights reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li>Follow Us</li>
                            <li class="ms-3"><a class="link-dark" href="#"><i
                                        class="fa-brands fa-square-facebook"></i></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><i
                                        class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
            </footer>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>
