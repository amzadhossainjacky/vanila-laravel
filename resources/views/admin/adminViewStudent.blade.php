
@extends('layouts.admin')

@section('adminViewStudent')
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
                    <i class="fas fa-users"></i> <a class="ad-active"  href="student_info.html">Student Info</a>
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
                        <h1>Student Info</h1>
                    </div>
                    {{-- <div class="col-lg-10 mb-4">
                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline ml-auto">
                              <input type="search"  class="form-control mr-sm-2" type="search" placeholder="Search" id="search">
                            </form>
                          </nav>
                    </div> --}}

                    <div class="col-lg-10 ajaxdata">
                        <table class="table table-hover table-primary" id="myTable" >
                            <thead class="table-danger">
                            <tr>
                                <th>STUDENT ID</th>
                                <th>STUDENT NAME</th>
                                <th>User Type</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

    /* function search(){
        var search = $('#search').val();
        console.log(search);
    } */

   /*  $(document).ready(function () {
        $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': '{{csrf_token()}}'
             }
             });

        $('#search').keyup(function (e) {
            e.preventDefault();
            var search = $('#search').val();
            console.log(search);

             if(search){

                $('.ajaxdata').show();
                 $('.general-data').hide();

             }else{

                $('.ajaxdata').hide();
                 $('.general-data').show();
             }

            $.ajax({
            type: "post",
            url: "{{route('admin.viewStudent')}}",
            data: {
                search: search
            },
            dataType:'html',
            success: function (response) {
                console.log(response);
               $('#success').html(response);
            }
            });
         });
    });

 */

 $(document).ready( function () {

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });
});
        var table1= $('#myTable').DataTable({

        processing: true,
        serverSide: true,
        ajax: "{!! route('admin.viewAllStudent') !!}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'utype', name: 'utype',searchable:false },
            { data: 'action', name: 'action', orderable: false, searchable:false}
        ]
    });

    function deleteData(id){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });

        $.ajax({
            type: "post",
            url:"{{URL::to('/admin/viewStudent')}}"+'/'+id,
            success: function (data) {
                table1.ajax.reload();
                alert(data.success);
            }
        });
    }

</script>

@endsection
