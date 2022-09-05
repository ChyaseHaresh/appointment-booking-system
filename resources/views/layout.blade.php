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

    @section('contents')
    @show



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('js/appointment.css') }}"></script> --}}
    <script>
        function myFunction(object) {
            let modal_date = document.querySelector('#modal_date');
            let modal_time = document.querySelector('#modal_time');
            let hidden_date = document.querySelector('.dates');
            let hidden_time = document.querySelector('.a_time');
            let selected_date = document.querySelector('.date');
            var valuess = selected_date.options[selected_date.selectedIndex].value;

            let selected_time = object.innerText;

            modal_date.textContent = valuess
            modal_time.innerText = selected_time + " (UTC+5:45)"

            hidden_date.setAttribute('value', valuess);
            hidden_time.setAttribute('value', selected_time);
            console.log(selected_time)
        }

    </script>

</body>

</html>
