<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">



      <center>  <h1><b>Student Data CRUD Operation<b></h1> </center>

      <br><br>

      <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        Student Name: <input type="text" name="name" value="{{$student->name}}">
     @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
     
     <br> <br>
     
     Student Age:  <input type="number" name="age" value="{{$student->age}}"> <br> <br>
     @if ($errors->first('age'))<div class="alert alert-danger">{!! $errors->first('age') !!}</div> @endif

     Department:   <input type="text" name="department" value="{{$student->department}}">
     @if ($errors->first('department'))<div class="alert alert-danger">{!! $errors->first('department') !!}</div> @endif
      <br> <br>

     Current CGPA: <input type="text" name="cgpa" value="{{$student->cgpa}}">
     @if ($errors->first('cgpa'))<div class="alert alert-danger">{!! $errors->first('cgpa') !!}</div> @endif
      <br> <br>
   
     Upload Image: <input type="file" name="image"> 
     
     <br> 
     <img src="{{ asset('image/' . $student->image) }}" alt="" height="90px" width="120">
      <br> <br>
     <input type="submit">







</form>
</div>

</body>
</html>