<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class = "text-center mb-5" style="color: blue;">Student List Data Update</h1>

    <div class = "container">

<div class = "row justify-content-center">
    <div class ="col-8">
    <div class = "card">
    <div class = "card-body">
<form action="/editstudent_list/{{$studentdata->id}}" method ="POST" enctype ="multipart/form-data">
@csrf 
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Student ID</label>
<input type="number" name ="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ="{{$studentdata->id}}" readonly>
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Name</label>
<input type="text" name ="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value ="{{$studentdata->name}}">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Class</label>
<select class="form-select"name ="class" aria-label="Default select example">
    <option selected>{{$studentdata->class}}</option>
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
    <option selected>{{$studentdata->status}}</option>
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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>