@extends('layouts.main')

@section('login')
<section class="nav-section">
    <nav class="nav-design">
        <div class="logo">
            <h2>Vanila</h2>
        </div>

        <ul>
            <li>
                <a href="{{route('landingpage')}}"> Home </a>
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
                <a href="{{route('login')}}" class="active"> Sign In </a>
            </li>
            <li>
                <a href="{{route('student.reg')}}" class="n-btn"> Register </a>
            </li>
        </ul>
    </nav>
</section>

<section class="form-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-5">
                @foreach($errors->all() as $err)
                <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                >{{$err}} </span>
                @endforeach
                <span style="font-size: 18px;  font-weight: 700; display:block;"
                   >{{session('msg')}} </span>

                   <br>
                <form class="login-form" action="{{route('login')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="uemail">Email address</label>
                      <input type="text" class="form-control" name="uemail"      placeholder="enter email" value="{{old('uemail')}}">
                    </div>
                    <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" class="form-control" name="upassword" placeholder="enter password" value="{{old('upassword')}}">
                    </div>

                    <button type="submit"  class="btn btn-dark" >LogIn</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
