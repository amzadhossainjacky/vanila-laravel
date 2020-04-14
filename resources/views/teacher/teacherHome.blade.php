@extends('layouts.teacher')

@section('teacherHome')
<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a class="ad-active" href="teacher_dashboard.html">Profile</a>
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

                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="student_info.html">Student Info</a>
                </li>
                <li>

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
                    <i class="fas fa-hands-helping"></i> <a href="alert_parent.html">Alert Parents</a>
                </li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="mt-5">Teachers Info</h1>
                        <form class="mt-5">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="uname" value="{{$data->uname}}">
                            </div>
                            <div class="form-group">
                              <label for="email1">Email address</label>
                              <input type="email" class="form-control" value="{{$data->uemail}}">
                            </div>
                            <div class="form-group">
                              <label for="pass">Password</label>
                              <input type="password" class="form-control" value="{{$data->upassword}}">
                            </div>
                            <a href="" class="btn btn-warning"> Edit</a>
                            <button type="submit" class="btn btn-success">Update</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
