@extends ('master')
@section('content')

<!DOCTYPE html>
    <html>
        <head>
            <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
            <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    .container{
margin-top:10px;
margin-left:-10px;
    }

    .table{
        margin-top:20px;
        margin-bottom:20px;
    }

    .dataTables_wrapper{
        margin-top: 60px;
    }

    form .user-details .input-box{
  margin: 20px 0 12px 0;
  width: calc(100% / 2 -20px);
}

.user-details .input-box .details{
  display: block;
  font-weight:500;
  margin-bottom: 5px;
}

.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box textarea{
  height: 60px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}

form .gender-details{
  font-size: 16px;
  font-weight: 500;
  margin: 20px 0 12px 0;
}

form .gender-details .gender-title{
  font-size: 16px;
  font-weight: 500;
  margin: 20px 0 12px 0;
}

form .gender-details .category{
  display: flex;
  width: 80%;
  margin: 14px 0;
  justify-content: space-between;
}

.gender-details .category label{

  display: flex;
  align-items: center;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 5px;
}

.gender-details .category .dot{
  height: 18px;
  width: 18px;
  background: #d9d9d9;
  border-radius: 50%;
  margin-right: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two{
  border-color: #d9d9d9;
  background: black;
}

form input[type="radio"]{
  display: none;
}

form .status-details{
  font-size: 16px;
  font-weight: 500;
  margin: 20px 0 12px 0;
}

form .status-details .status-title{
  font-size: 16px;
  font-weight: 500;
  margin: 20px 0 12px 0;
}

form .status-details .category1{
  display: flex;
  width: 80%;
  margin: 14px 0;
  justify-content: space-between;
}

.status-details .category1 label{

  display: flex;
  align-items: center;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 5px;
}

.status-details .category1 .dott{
  height: 18px;
  width: 18px;
  background: #d9d9d9;
  border-radius: 50%;
  margin-right: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-3:checked ~ .category1 label .three,
#dot-4:checked ~ .category1 label .four{
  border-color: #d9d9d9;
  background: black;
}

form input[type="radio"]{
  display: none;
}

form .btn{
  margin-top: 15px;
  margin-left: 3%;
  margin-bottom: 15px;
  background: white;
  border: 3px solid #9b59b6;
  font-size: 18px;
  font-weight: 500;
  border-radius: 35px;
  letter-spacing: 1px;
  white-space: nowrap;
  padding: 0.5rem 1rem;
  color:black;
}

form .btn:hover{
  background: #9b59b6;
  border: 3px solid white;
}

form .hr3{
  margin-top: 3%;
  background: black;
  margin-left: 22%;
}

form img{
  border: 2px solid black;
}

form .btn{
    margin-left:60%;
}

#updateBtn{
  margin-top: 12px;
  margin-bottom: 15px;
  background: white;
  border: 3px solid #9b59b6;
  font-size: 18px;
  font-weight: 500;
  border-radius: 35px;
  letter-spacing: 1px;
  white-space: nowrap;
  padding: 0.5rem 1rem;
  color:black;
  width:30%;
}

#updateBtn:hover{
  background: #9b59b6;
  border: 3px solid white;
}

#updateBtn{
    margin-left:60%;
}
@media all and (max-width: 800px) {
  .modal-body {
    display: block !important;
    display: inline-block;
  }

  .choose {
    margin-top:10px;
  }

  form .saveBtn{
    display: inline-block;
    margin: 10px 0 0 0;
    width: 100%;
  }

  form .updateBtn{
    display: inline-block;
    margin: 10px 0 0 0;
    width: 100%;
  }
}

@media all and (max-width: 700px) {
  .choose {
    margin-top:10px;
  }

  form .hr3{
    margin: 0 0 0 0;
  }
}

    </style>

<div class="container">
<div id="success_message"></div>
<table class="table table-bordered data-table">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <thead>
<tr>
	<th>Student's ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Gender</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
</thead>
      </table>
<!-- Add Modal -->
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="model-title" id="modalHeading"></h4>
            </div>
            <div class="modal-body">
            <ul id="save_msgList"></ul>
                <form id="studentForm" name="studentForm" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">ID</span>
                        <input type="text" class="form-control" placeholder="Student's Id" name="id" id="id" value="" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" class="form-control" placeholder="Student's Name" name="name" id="name" value="" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email Address</span>
                         <input type="text" class="form-control" placeholder="Student's Email Address" name="email" id="email" value="" required>
                    </div>

                    <div class="gender-details">
                        <input type="radio" name="gender" class="form-control" value="MALE" id="dot-1" required>
                        <input type="radio" name="gender" class="form-control" value="FEMALE" id="dot-2" required>

                        <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                     <span class="gender">MALE</span>
                                </label>

                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">FEMALE</span>
                                </label>
                            </div>
                    </div>

                    <div class="status-details">
                        <input type="radio" name="status" value="Active" id="dot-3" required>
                        <input type="radio" name="status" value="Inactive" id="dot-4" required>

                        <span class="status-title">Status</span>
                            <div class="category1">
                                <label for="dot-3">
                                    <span class="dott three"></span>
                                    <span class="status">Active</span>
                                </label>

                                <label for="dot-4">
                                    <span class="dott four"></span>
                                    <span class="status">Inactive</span>
                                </label>
                            </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary" id="saveBtn" value="Create" onclick="alert"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Update Modal -->
<div class="modal fade" id="editModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="model-title" id="editmodalHeading"></h4>
            </div>
            <div class="modal-body">
            <ul id="save_msgList"></ul>
                <form id="studenteditForm" name="studentForm" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">ID</span>
                        <input type="text" class="form-control" placeholder="Student's Id" name="id" id="id2" value="" readonly>
                    </div>

                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" class="form-control" placeholder="Student's Name" name="name" id="name2" value="" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email Address</span>
                         <input type="text" class="form-control" placeholder="Student's Email Address" name="email" id="email2" value="" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Gender</span>
                         <input type="text" class="form-control" placeholder="FEMALE or MALE" name="gender" id="gender2" value="" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Status</span>
                         <input type="text" class="form-control" placeholder="Actine or Inactive" name="status" id="status2" value="" required>
                    </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary update_student" id="updateBtn" value="Update" onclick="alert"> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<a class ="btn btn-success" href="javascript:void(0)" id="createNewStudent" style="float:right">Create New Profile</a>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    
<script type="text/javascript">
    $(function(){
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table=$(".data-table").DataTable({
        processing:true,
        serverSide:true,
        ajax:"{{route('students.index')}}",
        columns:[
            {data:'id',name:'id'},
            {data:'name',name:'name'},
            {data:'email',name:'email'},
            {data:'gender',name:'gender'},
            {data:'status',name:'status'},
            {data:'action',name:'action'},
        ]
    });
    

    $("#createNewStudent").click(function(){
        $("#student_id").val();
        $('#studentForm').trigger("reset");
        $("#modalHeading").html("Add Student");
        $('#ajaxModel').modal('show');
    });
    

    $("#saveBtn").click(function(e){

        e.preventDefault();
        $(this).html('Save');

        $.ajax({
          data:$("#studentForm").serialize(),
            url:"/students",
            type:"POST",
            dataType:'json',
      success: function(response) {
          if (response.success === false) {
             alert('ID already exist !');
             console.log('Error',data);
                $("#saveBtn").html('Save');
          } else {
             $("#id").val(response.id);
             $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                setTimeout(function() {
                            $('#success_message').alert(close);
                        }, 10000);
                $("#studentForm").trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw(); 
            }
          }
});
    });


    $('body').on('click','.deleteStudent',function(){
        var id=$(this).data("id");
        var confirmation= confirm("Are you sure want to delete?");
        if(confirmation){
          $.ajax({
            type:"DELETE",
            url: "/delete-student/" + id,
            error:function(data){
                console.log('Error',data);
            },
            success: function (response) {
              table.draw();
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        setTimeout(function() {
                            $('#success_message').alert(close);
                        }, 10000);
                }
        });
      }else{
        $("#studentForm").trigger("reset");
      }
    });

    $('body').on('click','.editStudent',function(){
        var id=$(this).data('id');
        $.ajax({
                type: "GET",
                url: "/students/edit-student/" + id,
                success:function(data){
                  $("editmodalHeading").html("Edit Student");
                  $('#editModel').modal('show');
            $("#id2").val(data.id);
            $("#name2").val(data.name);
            $("#email2").val(data.email);
            $("#gender2").val(data.gender);
            $("#status2").val(data.status);
                }
            });

        });

        $("#updateBtn").click(function(e){

e.preventDefault();
$(this).html('Update');

$.ajax({
    data:$("#studenteditForm").serialize(),
    url: "/update-student/" + id,
    type:"PUT",
    dataType:'json',
  success:function(response){
        $('#success_message').addClass('alert alert-success');
        $('#success_message').text(response.message);
        $("#studenteditForm").trigger("reset");
        $('#editModel').modal('hide');
        table.draw(); 
        setTimeout(function() {
                            $('#success_message').alert(close);
                        }, 10000);
    },
    error:function(data){
        console.log('Error',data);
        $("#updateBtn").html('Update');
    }
});
});

    });
    </script>
</html>

@endsection