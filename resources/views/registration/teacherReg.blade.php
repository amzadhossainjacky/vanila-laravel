
@extends('layouts.main')

@section('studentReg')

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
                    <a href="{{route('login')}}"> Sign In </a>
                </li>
                <li>
                    <a href="{{route('student.reg')}}" class="n-btn"> Register </a>
                </li>
            </ul>
        </nav>
    </section>

    <section>
        <div class="container my-5">
            <div class="row justify-content-center ">
                <div class="col-lg-8 my-2">
                    <h2>Teacher Registration</h2>
                    @foreach($errors->all() as $err)
                    <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                    >{{$err}} </span>
                    @endforeach
                </div>
                <div class="col-lg-8">
                    <form action="{{route('teacher.reg')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                                <label for="fullname">Full Name of Teacher:</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Enter Name"
                                name="name" value="{{old('name')}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Email Address"
                                name="email" value="{{old('email')}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password" value="{{old('password')}}">
                            </div>

                            <div class="form-group">
                                <label for="TPhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="TPhoneNumber" placeholder="Phone Number"
                                name="phone" value="{{old('phone')}}">
                            </div>

                            <div class="form-group">
                                <label for="qualification_details">Qualification</label><br>
                                <textarea type="text" name="qualification" id="" cols="50" rows="10"></textarea>
                            </div>

                            <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection



