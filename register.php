<?php include('server.php') ?>
<!Doctype html>
<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Create Account</title>
    

<link rel="stylesheet" href="css.css">

</head>
<body class="registerAndLogin">

    <div class="container">
    <div class="row login">
        <div class="col s12 14 offset-14 center-alignment">
            <div class="card">
                <div class="card-action red white-text">
                    <h3>Create an Account</h3>
                </div>
                
<!--
                <div class="card-content">
                    
                    <div class="form-field">
                        <label for ="username">Username</label>
                        <input type="text" id="username">
                    </div><br>
                    
                    
                    <div class="form-field">
                        <label for ="password">Password</label>
                        <input type="password" id="password">
                    </div><br>
                    
                    <div class="form-field center-alignment">
                        <button class="btn-large red">Login</button>
                    </div>
                    
                </div>
-->
                
    <form class="form" action="register.php" method="post">
        <?php include('errors.php'); ?>
      <div class="row">
        <div class="input-field col s6 ">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" value="<?php echo $email; ?>">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="confirmpassword" name="confirmpassword" type="password" class="validate">
          <label for="confirmpassword">Confirm Password</label>
        </div>
      </div>
      <div class="form-field center-align">
        <button type="submit" name="reg_user" class="btn-large red">Submit</button>
      </div>
      <div class="right-align">
        <p class="red white-text">Already Have an Account?  <a href="login.php">Login </a></p>
      </div>
    </form>
            </div>
        </div>
    
    </div>
    </div>
</body>






</html>