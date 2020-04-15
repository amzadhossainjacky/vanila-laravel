<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coaching Management System</title>
    <link rel="stylesheet" href="{{asset('public/assets/fontawesome/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}" />
</head>

<body>
    <section class="nav-section">
        <header class="admin-panel">
            <nav class="nav-design">
                <div class="logo">
                    <h2>Vanila</h2>
                </div>
                <ul>
                    <li>
                        <h5>{{session('uname')}}</h5>
                    </li>
                    <li>
                        <a href="" class="btn-primary"><i class="fas fa-bell"></i></a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="n-btn"> Logout </a>
                    </li>
                </ul>
            </nav>
        </header>
    </section>

    @yield('teacherHome')
    @yield('createCourse..')

    <script src="{{asset('public/assets/js/jquery.js')}}"></script>
    <script src="{{asset('public/assets/js/proper.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.js')}}"></script>
</body>

</html>
