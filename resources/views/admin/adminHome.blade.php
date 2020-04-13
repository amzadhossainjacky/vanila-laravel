
@extends('layouts.admin')
@section('adminHome')

  <section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a class="ad-active" href="admin_dashboard.html">Profile</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="create_course.html">Create Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="view_course.html">View Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="approve_student.html">Approve Student</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="approve_teacher.html">Approve Teacher</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="student_info.html">Student Info</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="teacher_info.html">Teacher Info</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="notes_upload.html">Notes Upload</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="notice_upload.html">Notice Upload</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="marks_entry.html">Create Marks</a>
                </li>

                <li>
                    <i class="fas fa-hands-helping"></i> <a href="entry_salary.html">Entry Salary</a>
                </li>

                <li>
                    <i class="fas fa-hands-helping"></i> <a href="view_salary.html">View Salary</a>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i> <a href="alert_parent.html">Alert Parents</a>
                </li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="mt-5">Admin Info </h1>
                    </div>
                    <div class="col-lg-8 my-5 p-5" style="border: 3px solid #f58776;">
                        <h3>Name: <span>{{$data->uname}}</span></h3>
                        <h3>Email: {{$data->uemail}}</h3>
                        <a href="admin_profile_edit.html" class="btn btn-warning mt-3">Edit</a>
                    </div>
                <div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
