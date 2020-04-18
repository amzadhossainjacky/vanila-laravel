@extends('layouts.admin')

@section('adminProfileEdit')

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
                        <h1 class="mt-5">Admin Info</h1>

                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach


                        <form action="{{route('admin.profileUpdate',['id'=>$data->id])}}" class="mt-5">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                              <label for="email1">Email address</label>
                              <input type="text" class="form-control" id="email1" value="{{$data->email}}" name="email">
                            </div>
                            <div class="form-group">
                              <label for="pass">Password</label>
                              <input type="password" class="form-control" id="pass" value="{{$data->password}}" name="password">
                              <i class="fas fa-eye btn btn-dark mt-1 eye" onclick=" myFunction()"></i>

                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    /*var v = true;
    $('document').ready(function(){
        $('.eye').click(function(){
            if(v){
                $("#pass").attr("type", "text");
                v = false;
            }else{
                $("#pass").attr("type", "password");
                v = true;
            }
        });
    }); */

    function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>
@endsection
