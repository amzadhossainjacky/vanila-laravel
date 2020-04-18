
@extends('layouts.admin')

@section('adminViewCourse')
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
                    <i class="fas fa-users"></i> <a  class="ad-active" href="view_course.html">View Course</a>
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
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 mb-4 mr-auto">
                        <h1> Course Details</h1>
                    </div>
                    <div class="col-lg-10">
                        <table class="table table-hover table-primary">
                            <thead class="table-danger">
                            <tr>
                                <th>COURSE ID</th>
                                <th>COURSE TYPE</th>
                                <th>BATCH</th>
                                <th>DAY</th>
                                <th>Time</th>
                                <th>FEES</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $course)
                                <tr>
                                    <th>{{$course->id}}</th>
                                    <th>{{$course->courseType}}</th>
                                    <th>{{$course->batch}}</th>
                                    <th>{{$course->classDay}}</th>
                                    <th>{{date('h:i:s a ', strtotime($course->classTime))}}</th>
                                    <th>{{$course->fees}}</th>
                                    <th>
                                        <a href="edit_course.html" class="btn btn-warning">Edit</a>
                                        {{-- <form action="{{route('admin.destroyCourse', $user['id'])}}" method="get">
                                            <button type="submit" class="btn btn-danger"> Delete</button>
                                        </form> --}}
                                        <a href="{{route('admin.destroyCourse', $course->id)}}" class="btn btn-danger">Delete</a>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
