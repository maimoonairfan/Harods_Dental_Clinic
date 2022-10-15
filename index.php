<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1; width: 50%; margin-left: 350px; margin-top: 150px;}

  input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: rgb(0, 203, 134);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-left: 170px;
    border: none;
    cursor: pointer;
    width: 50%;
  }

  button:hover {
    opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<?php
  $check_form = isset($_GET['param']) ? $_GET['param'] : "";

  if($check_form == 'success')
    echo '<p> Form submitted succesfully</p>';
?>

<form action="operation.php" method="post">
  <div class="container"> 
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="someone@gmail.com" name="pat_email" required >
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required >     
    <button type="submit" name="btn_login">Login</button>
   <br>
   <a href="registration.php" style="color: white;padding: 12px 138px;text-align: center;text-decoration: none;display: inline-block;background-color: rgb(0, 203, 134); font-size: 14px; margin-left:170px;">register</a>
</div>
</form>
</body>
</html>