<?php 
session_start();

    include "init.php";



?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Sign Up</title>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            $signinemail = $_POST['signinemail'];
            $signinpass  = $_POST['signinpass'];
            $signin_re_pass = $_POST['signin_re_pass'];
            if ($signin_re_pass == $signinpass) {

                $hashsigninpass = sha1($signinpass);

                //add the user in the database

                $stmt = $con->prepare("INSERT INTO pay (email, password) VALUES (:zemail,:zpassword)");
                $stmt->execute(array(
                    'zemail' => $signinemail, 
                    'zpassword' => $signinpass
                ));


            }else{
                    $err = "<h4 class='errorMessage alert alert-danger' role='alert'>Password and re-password not equal</h4>";
            }
        

    }
?>

        <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h4 class="text-center label">Signup page</h4>
            <span><i class="fas fa-sign-in-alt" style="font-size: 4rem;"></i></span>

            <?php if(isset ($err)){
                echo $err;
            }?>

            <input type="text" name="action" value="signin" hidden>
            <input type="text" name="signinemail" placeholder="Email" autocomplete="off">
            <input type="password" name="signinpass" placeholder="Password" autocomplete="new-password">
            <input type="password" name="signin_re_pass" placeholder="Re-password" autocomplete="new-password">
            <h3>I'm new</h3>
            <a href="login.php">Login to my account</a>
            <input type="submit" class="btn btn-primary btn-block" id="signup" value="Sign Up"> 
        </form>

            

<style>
    body{
        overflow-x: hidden;
        width: 100%;
        height: 100%;
        background-color: #b5b3a745;
        margin: 0;
        padding: 0;
    }
    a{
        text-decoration: none !important;
    }
    a:hover{
        color: #8274fbbd;
    }
    form.login,form.signin{
        width: 40%;
        height: 70%;
        margin: 15% 30%;
        margin-bottom: 0;
        text-align: center;
        justify-content: center;
    }
    form.signin{
        display: none
    }
    input{
        display: block;
        margin: 1rem 30%;
        width: 40%;
        height: 2rem;
        border-radius: .2rem;
        border: 1px solid #8274fb;
    }
    input[name="action"] {
        display: none !important;
    }
    input[type="submit"] {
        cursor: pointer;
        font-size: 1rem;
        height: 2.5rem;
        background-color: #8274fb;
        color: #fff;
    }
    input:hover[type="submit"] {
        background-color: #8274fbbd;
    }
</style>