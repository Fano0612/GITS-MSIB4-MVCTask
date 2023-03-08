<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {

        $("form").submit(function(event) {
          var studentId = $("#exampleInputEmail1").val();
          var studentName = $("#exampleInputName").val();
          var studentExists = false;
          $("table tbody tr").each(function() {
            var id = $(this).find("th:eq(0)").text();
            var name = $(this).find("td:eq(0)").text();
            if (id == studentId || name == studentName) {
              studentExists = true;
              return false;
            }
          });
                if (studentExists) {
            alert("Student ID or name already exists in the table.");
            event.preventDefault();
          }
        });
      });
    </script>

</head>
  <body>
    <h1 class = "text-center mb-5" style="color: blue;">Student List</h1>

    <div class = "container" style ="margin-bottom: 30px;">

<div class = "row justify-content-center">
    <div class ="col-8">
    <div class = "card">
    <div class = "card-body">


<form action="/insertstudent_list" method ="POST" enctype ="multipart/form-data">
@csrf 
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Student ID</label>
  <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onchange="checkIdLength(this.value)" required>
  <script>
    function checkIdLength(id) {
      if (id.length !== 15) {
        alert("Invalid Student ID! \nPlease enter a 15 digit number.");
        document.getElementById("exampleInputEmail1").value = "";
      }
    }
  </script>
</div>

<div class="mb-3">
  <label for="exampleInputName" class="form-label">Name</label>
  <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" onchange="checkNameLength(this.value)" required>
  <span id="name-error-msg" class="error-msg"></span>
  <script>
   function checkNameLength(name) {
  if (name.length > 255) {
    alert("Invalid Name! Please enter a name with less than 255 characters.");
    document.getElementById("exampleInputName").value = "";
    document.getElementById("name-error-msg").textContent = "";
  } else {
    document.getElementById("name-error-msg").textContent = "";
  }
}
  </script>


</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Class</label>
<select class="form-select"name ="class" aria-label="Default select example">
    <option selected>Class</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>

</select>
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Status</label>
<select class="form-select" name ="status" aria-label="Default select example">
    <option selected>Status</option>
    <option value="Alumni">Alumni</option>
    <option value="Active">Active</option>
    <option value="Leave">Leave</option>
</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>
</div>
</div>
</div>


    <div class = "container">
        <div class = "row">


    <table class="table table-dark table-striped-columns">
    <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Status</th>
      <th scope="col" style ="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $std)
    <tr>
      <th scope="row">{{$std->id}}</th>
      <td>{{$std->name}}</td>
      <td>{{$std->class}}</td>
      <td>{{$std->status}}</td>
      <td style="text-align: center;">
        <a href="/showstudent_list/{{$std->id}}}" class="btn btn-success">Edit</a>
        <a href="#" class="btn btn-danger delete" id-data="{{$std->id}}" >Delete</a>
        <!-- <a href="/deletestudent_list/{{$std->id}}}" class="btn btn-danger">Delete</a> -->

    </td>
    </tr>
    @endforeach


  </tbody>

</table>


</div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script>
    $('.delete').click(function(){
        var stdid = $(this).attr('id-data');
        swal({
        title: "Delete Data?",
        text: "Delete " +stdid+"?\n"+"Once it's deleted, you won't be able to recover this data anymore",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/deletestudent_list/"+stdid
            swal("Data has been deleted successfully!", {
            icon: "success",
            });
        } else {
            swal("Data deletion cancelled!");
        }
        });
    });
        
</script>


</html>