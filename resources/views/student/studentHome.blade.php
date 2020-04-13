@extends('layouts.student')

@section('studentHome')

  <section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a class="ad-active" href="student_dashboard.html"> Std Profile</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_enroll_course.html">Enroll Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_view_course.html">View Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_notes.html">Notes Download</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_view_notice.html">View Notice</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_check_results.html">Check Results</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_msg_send.html">Send Message</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_payment.html">Payment</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_pre_course.html">Pre. Course</a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 border border-warning mt-2">
                        <h1 class="mt-5">Personal Info</h1>
                        <form action="" method="POST">
                            <div class="form-group pt-2">
                            <label for="fullname">Full Name of Student: {{$data->uname}}</label>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Email: {{$data->uemail}}</label>

                            </div>
                            <a href="s_edit.html" class="btn btn-warning mb-4"> Edit</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
