
@extends('layouts.main')

@section('banner')
<section class="nav-section">
    <nav class="nav-design">
        <div class="logo">
            <h2>Vanila</h2>
        </div>

        <ul>
            <li>
                <a href="{{route('landingpage')}}" class="active"> Home </a>
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
                <a href="{{route('login')}}"> Sign In </a>
            </li>
            <li>
                <a href="register.html" class="n-btn"> Register </a>
            </li>
        </ul>
    </nav>
</section>


<section class="banner">
        <div class="contain">
            <h1>Vanila Academy Coaching Center</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat laborum aut omnis illo, error sequi culpa laudantium? Velit maxime provident eligendi natus obcaecati fugit, culpa quaerat eos sit, quasi facilis.</p>
        </div>
</section>
@endsection


@section('about')
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('public/assets/images/teac2.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Kamal Hossain</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" >
                        <img class="card-img-top" src="{{asset('public/assets/images/teac3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Jahidul Haque</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('public/assets/images/teac1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Sudipto Roi</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

@endsection
