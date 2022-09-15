<html>
    <head>
        <title> PDC 10 Lab Activity </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script>
        var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirmPassword').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password does not match';
        }
        }
        function check_pass() {
        if (document.getElementById('password').value ==
                document.getElementById('confirmPassword').value) {
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('submit').disabled = true;
        }
        }
    </script>
      </head>
    <body>
    <h1 style= margin: 35px> Registration Form </h1>
      <br>
  <div class="container">
  <form method="POST" enctype="multipart/form-data" action="form-handler.php">
  <div class="form-group row">
  
    <label for="inputName" class="col-sm-2 col-form-label" required>Complete Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputName" placeholder="Name" name="complete_name">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label" required>Email Address</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="email" name="email">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label" required>Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputPassword2" class="col-sm-2 col-form-label" required>Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password1" id="inputPassword3" placeholder="Confirm Password">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputPicture" class="col-sm-2 col-form-label" required>Picture</label>
    <div class="col-sm-10">
    <input type="file" value="Attach Picture" name="inputPicture" class="form-control"> </button>
    </div>
  </div>
  <br>
  <div class="text-center">
    <div class="col-sm-auto">
      <button type="submit" class="btn btn-primary" required>Register</button>
    </div>
  </div>
</div>
</form>
</body>
</html>