<?php

session_start();
include_once __DIR__.'/controller/AuthController.php';

$auth_controller = new AuthController();
$auth_controller->forAuthUser();

$auth_controller = new AuthController();
$userLists = $auth_controller->userLists();



if (isset($_POST['submit']))
{
    
    $emails = [];
    $i = 0 ;

    if(!empty($userLists))
    {
        foreach($userLists as $userList)
        {
            $emails[$i] = $userList['email'];
            $i++;
        }
    }

        if (in_array($_POST['email'],$emails))
        {
            $email = $_POST['email'];
            $otp = $auth_controller->changePasswordMail($email);

            if(!empty($otp))
            {
                session_start();
                $_SESSION['otp'] = $otp;
                $_SESSION['email'] = $email;

                header('location:verifyOtp.php');
            }
            else 
            {
                $emailError = 'We have an error while sending OTP code. Please try again.';
            }
        }
        else
        {
            $emailError = 'This email is not registered.';
        }
    
        
    if (empty($_POST['email']))
        $emailError = 'Please Enter Your Email Address';

    if (isset($emailError))
    {
        $errorCondition = true;
    }
            
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="public/css/style1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
     <!-- Login From -->
    <section class="home">
        <div class="form_container">
        <a href="index.php">
            <i class="uil uil-times form_close"></i>
        </a>
            <div class="form">
              <form action="#" method="post">
                <h2>Reset Password</h2>

                <div class="input_box">
                  <input type="email" name="email" placeholder="Enter your email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>"/>
                  <i class="uil uil-envelope-alt email"></i>
                  <?php if (isset($emailError) && $errorCondition)  echo '<span class="errorMsg">'.$emailError.'</span>'; ?>
                </div>
                
                <button class="button" type="submit" name="submit">Continue</button>

                <div class="login_signup">Don't have an account? <a href="signUp.php" id="signup">Signup</a></div>
              </form>
            </div>
        </div>
    </section>

  <script src="public/js/custom.js"></script>
</body>
</html>