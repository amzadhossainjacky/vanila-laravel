@extends('layouts.admin')

@section('adminEditSalary')
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
                    <i class="fas fa-hands-helping"></i> <a class="ad-active" href="view_salary.html">View Salary</a>
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
                        <h1 class="mt-5 mb-4">Edit Salary</h1>

                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach

                        <form class="mt-2" method="POST" action="{{route('admin.updateSalary',['id'=>$data->id])}}">
                            
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="salaryId">Salary id</label>
                                <select class="form-control" name="salaryId" id="salaryId" aria-readonly="true">
                                        <option> {{$data->id}} </option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="amount">Amount</label>
                              <input class="form-control" id="amount" placeholder="amount value" name="amount" value="{{$data->amount}}">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
