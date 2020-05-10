@extends('layouts.admin')

@section('adminReport')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.home')}}">Profile</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.createCourse')}}">Create Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.viewCourse')}}">View Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.approveStudent')}}">Approve Student</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.approveTeacher')}}">Approve Teacher</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.viewStudent')}}">Student Info</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.viewTeacher')}}">Teacher Info</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.notesUpload')}}">Notes Upload</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.noticeUpload')}}">Notice Upload</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('admin.marksCreate')}}">Create Marks</a>
                </li>

                <li>
                    <i class="fas fa-hands-helping"></i> <a href="{{route('admin.entrySalary')}}">Entry Salary</a>
                </li>

                <li>
                    <i class="fas fa-hands-helping"></i> <a href="{{route('admin.viewSalary')}}">View Salary</a>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i> <a href="{{route('admin.alertParent')}}">Alert Parents</a>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i> <a class="ad-active" href="{{route('admin.report')}}">Report</a>
                </li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 mb-4 mr-auto">
                        <h1> View Report</h1>
                    </div>
                    <div class="col-lg-8 mb-4 ml-auto">
                        <form action="{{route('admin.report')}}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success">Download Excel</button>
                        </form>
                    </div>
                    <div class="col-lg-10">
                        <table class="table table-hover table-primary">
                            <thead class="table-danger">
                            <tr>
                                <th>STUDENT ID</th>
                                <th>NAME</th>
                                <th>FEES</th>
                                <th>PAID</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $value)
                                <tr>
                                    <th>{{$value->id}}</th>
                                    <th>{{$value->name}}</th>
                                    <th>{{$value->fees}}</th>
                                    <th>{{$value->paid}}</th>
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
