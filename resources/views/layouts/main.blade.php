<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vanila Academy</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}" />
</head>

<body>
    <section class="nav-section">
        <nav class="nav-design">
            <div class="logo">
                <h2>Vanila</h2>
            </div>

            <ul>
                <li>
                    <a href="index.html" class="active"> Home </a>
                </li>
                <li>
                    <a href="#about-us"> About Us</a>
                </li>
                <li>
                    <a href="courses.html"> Courses</a>
                </li>
                <li>
                    <a href="notice.html"> Notice </a>
                </li>
                <li>
                    <a href="contact.html"> Contact </a>
                </li>
                <li>
                    <a href="login.html"> Sign In </a>
                </li>
                <li>
                    <a href="register.html" class="n-btn"> Register </a>
                </li>
            </ul>
        </nav>
    </section>

    {{-- yield show --}}
    @yield('banner')
    @yield('about')
    
    <footer>
        <div class="top-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="footer-nav">
                            <h6>Navigation</h6>
                            <hr>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-service">
                            <h6>Course Type</h6>
                            <hr>
                            <ul>
                                <li><a href="#">Regular</a></li>
                                <li><a href="#">Model Test</a></li>
                                <li><a href="#">Revision</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-contact">
                            <h6>Contact Info</h6>
                            <hr>
                            <p>
                                Lorem ipsum dolor sit amet, consect etur adipis.
                            </p>
                            <span><strong>Tel:</strong>+01-788-873338</span>
                            <span><strong>Email:</strong>vanilaacademy.com</span>
                            <span><strong>Location:</strong>Mohammadpur,Dhaka-1207</span>
                        </div>                              
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('public/assets/js/jquery.js')}}"></script>
    <script src="{{asset('public/assets/js/proper.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.js')}}"></script>
</body>

</html>