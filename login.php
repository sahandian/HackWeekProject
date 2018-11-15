<?php include('server.php') ?>
<!Doctype html>
<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    
<style>
    
    body{
        background-image: url(StLouis.jpg);
        background-size: cover;
    }
    
    .login{
        margin-top: 100px;
    }
    
    .login .card{
        background: rgba(0, 0, 0, .6);
    }
    
    .login label{
        font-size: 16px;
        color: #ccc;
    }
    
    .login input{
        font-size: 20px !important;
        color: #fff;
    }
</style>
</head>
<body class="registerAndLogin">

    <div class="container" action="server.php">
    <div class="row login">
        <div class="col s12 14 offset-14 center-alignment">
            <form class="form" action="login.php" method="post">
                <?php include('errors.php'); ?>
                <div class="card">
                    <div class="card-action red white-text">
                        <h3>Login Form</h3>
                    </div>
                    
                    <div class="card-content">
                        
                        <div class="form-field">
                            <label for ="email">Email</label>
                            <input type="text" name ="email" id="email">
                        </div><br>
                        
                        
                        <div class="form-field">
                            <label for ="password">Password</label>
                            <input type="password" name= "password" id="password">
                        </div><br>
                        
                        <div class="form-field center-alignment">
                            <button type="submit" name="login_user" class="btn-large red">Login</button>
                        </div>
                        
                        
                    </div>
                    <div class="right-align">
                        <p class="red white-text">Don't Have an Account?  <a href="register.php">Sign Up </a></p>
                        </div>
                </div>
            </form>
        </div>
            
    </div>
    </div>
</body>






</html>