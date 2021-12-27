<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<!-- Dispaly error validation-->
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


  <h2>Register</h2>


  <form  action="<?php echo url('/user/info');?>"   method="get" >


  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name"  placeholder="Enter name" value="<?php echo old('name');?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail">E-Mail</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="email"  placeholder="Enter Email" value="<?php echo old('email');?>">
  </div>


  <div class="form-group">
    <label for="exampleInputName">Password</label>
    <input type="password" class="form-control" id="exampleInputName"  name="password"  placeholder="Enter password" value="<?php echo old('password');?>">
  </div>


  <div class="form-group">
    <label for="exampleInputName">Address</label>
    <input type="text" class="form-control" id="exampleInputName"  name="address"  placeholder="Enter Address" value="<?php echo old('address');?>">
  </div>


  <div class="form-group">
    <label for="exampleInputName">Gender</label>
    <input type="radio" class="form-control" id="exampleInputName"  name="gender"  value="male">Male
    <input type="radio" class="form-control" id="exampleInputName"  name="gender"  value="female">Female

  </div>


  <div class="form-group">
    <label for="exampleInputName">LinkidIn</label>
    <input type="text" class="form-control" id="exampleInputName"  name="linkidin"  placeholder="Enter linkidin" value="<?php echo old('linkidin');?>">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
