
@extends('layouts.admin')

@section('adminNotesUpload')
<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a href="admin_dashboard.html">Profile</a>
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
                    <i class="fas fa-users"></i> <a class="ad-active" href="notes_upload.html">Notes Upload</a>
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
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 mb-4 mr-auto">
                        <h1>Notes Upload</h1>
                    </div>
                    <div class="col-lg-5">

                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach

                        <form class="form" action="{{route('admin.notesUpload')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <h5 class="mt-3">Course Id</h5>
                            <select class="form-control" name="courseId" id="courseId">
                                @foreach ($data as $value)
                                    <option> {{$value->id}} </option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group">
                                <h5>Title</h5>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            </div>

                            <div class="form-group">
                                <h5>File</h5>
                                <input type="file" class="form-control" name="fileDetails">
                            </div>
                            <button type="submit" class="btn btn-info">Upload</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
