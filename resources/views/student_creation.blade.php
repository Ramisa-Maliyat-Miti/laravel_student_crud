<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">



      <center>  <h1><b>Student Data<b></h1> </center>

      <br><br>

  <form method="post" action="/student"  enctype="multipart/form-data">

    @csrf

     Student Name: <input type="text" name="name" placeholder="Enter Student Name"> 
     @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
     
     <br> <br>
     
     Student Age:  <input type="number" name="age" placeholder="Enter Student Age"> <br> <br>
     @if ($errors->first('age'))<div class="alert alert-danger">{!! $errors->first('age') !!}</div> @endif

     Department:   <input type="text" name="department" placeholder="Enter Department Name">
     @if ($errors->first('department'))<div class="alert alert-danger">{!! $errors->first('department') !!}</div> @endif
      <br> <br>

     Current CGPA: <input type="text" name="cgpa" placeholder="Enter CGPA">
     @if ($errors->first('cgpa'))<div class="alert alert-danger">{!! $errors->first('cgpa') !!}</div> @endif
      <br> <br>
   
     Upload Image: <input type="file" name="image"> 
     @if ($errors->first('image'))<div class="alert alert-danger">{!! $errors->first('image') !!}</div> @endif
     
    
     
     <br> 
 
     <input type="submit">







</form>
</div>

</body>
</html>