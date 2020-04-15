
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

    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-right">
                    <a href="{{route('teacher.reg')}}" class="btn btn-primary">Teacher Registration</a>
                </div>

                <div class="col-lg-8 my-2">
                    <h2 class="mb-2">Student Registration</h2>
                    @foreach($errors->all() as $err)
                    <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                    >{{$err}} </span>
                    @endforeach
                </div>

                <div class="col-lg-8">
                <form action="{{route('student.reg')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="fullname">Full Name of Student:</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Enter Name"
                        name="name" value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="SchoolCollege">Name of School/college:</label>
                        <input type="text" class="form-control" id="SchoolCollege" placeholder="Enter school/college"
                        name="institution" value="{{old('institution')}}">
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
                        <label for="SPhoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="SPhoneNumber" placeholder="Phone Number"
                        name="phone" value="{{old('phone')}}">
                    </div>

                    <div class="form-group">
                        <label  for="parents">Full Name of Parent:</label>
                        <input type="text" class="form-control" id="parents" placeholder="Enter Parents Name"
                        name="pname" value="{{old('pname')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Parent Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter Email Address"
                        name="pemail" value="{{old('pemail')}}">
                    </div>

                    <div class="form-group">
                        <label for="PPhoneNumber">Parent Phone Number</label>
                        <input type="text" class="form-control" id="PPhoneNumber" placeholder="Phone Number"
                        name="pphone" value="{{old('pphone')}}">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
            </form>
            </div>
            </div>
        </div>
    </section>

@endsection



