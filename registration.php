<!DOCTYPE html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1; width: 50%; margin-left: 350px; margin-top: 100px;}

    input[type=text], input[type=password], input[type=email], input[type=number], input[type=date] {
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

  <form action="operation.php" id="frm" enctype="multipart/form-data" method="post">
    <div class="container">
      <label for="fullname"><b>Full Name</b></label>
      <input type="text" placeholder="Enter your name" name="pat_name" required>
       <label for="email" ><b>Email</b></label>
      <input type="email" name="pat_email" required>
      <label for="contactnum"><b>Contact</b></label>
      <input type="number" name="pat_contactno" required>
      <label for="city"><b>City</b></label>
      <?php
    $city_list = array('karachi','lahore','islamabad','sargodha','rawalpindi');
    ?>
    <select name="pat_city" class="form-control" style="width: 100%; padding: 8px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
      <option value="">--cities--</option>
      <?php
        foreach($city_list as $c) 
        {
          ?>
          <option values="<?=$c?>"> <?=$c?> </option>
          <?php
        }
      ?>
    </select>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="password" id="pwd" name="password" required>
      <label for="password"><b>Confirm Password</b></label>
      <input type="password" placeholder="password" id="cpwd" name="password" required>
      <label id="pwd_message" style="display: none;">password doesn't match</label>
      <label for="gender"><b>Gender</b></label>
      <br>
      <input type="radio" name="pat_gender" value="male">
      <label for="gender">Male</label><br>
      <input type="radio" name="pat_gender" value="female">
      <label for="gender">Female</label><br>  
      <button id="signup" type="submit" name="btn_signup">signup</button>
    </div>

  </form>

<script type="text/javascript">
        $('#cpwd').change(function(){
            var password = $('#pwd').val();
            var confirm_password = $('#cpwd').val();
            if (password != confirm_password)
            {
                $('#pwd_message').show();
                $('#signup').hide();
                console.log('if');
                $(':input[type="submit"]').prop('disabled', true);
            }
            else
            {
                $('#pwd_message').hide();
                $('#signup').show();
                console.log('else');
                $(':input[type="submit"]').prop('disabled', false);
            }
        })


    </script>
</body>

</html>