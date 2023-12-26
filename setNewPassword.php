<?php

session_start();
include_once __DIR__.'/controller/AuthController.php';

$auth_controller = new AuthController();
$auth_controller->forAuthUser();


if (isset($_POST['submit']))
{

    if (strlen($_POST['password']) < 6)
        $passwordError = 'Password must be at least six characters';

    if (empty($_POST['password']))
        $passwordError = 'Please Enter Password';

    if ($_POST['password'] != $_POST['confirm_password'])
        $confirmPasswordError = 'Passwords must be same';


    if (isset($passwordError) ||isset($confirmPasswordError))
    {
        $errorCondition = true;
    }
    else 
    {

        $data = [
            'email' => $_SESSION['email'],
            'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
            'confirm_password' => password_hash($_POST['confirm_password'],PASSWORD_DEFAULT),
        ];


        $status = $auth_controller->editPasswordByEmail($data);

        if ($status)
        {
            header('location:login.php?status='.$status.'');
        }
    }
            
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="stylesheet" href="public/css/style1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
     <!-- Login From -->
    <section class="home">
        <div class="form_container">
        <i class="uil uil-times form_close"></i>
            <div class="form">
              <form action="#" method="post">
                <h2>New Password</h2>
                
                <div class="input_box">
                  <input type="password" name="password" placeholder="Enter your new password"  />
                  <i class="uil uil-lock password"></i>
                  <i class="uil uil-eye-slash pw_hide"></i>
                  <?php if (isset($passwordError) && $errorCondition)  echo '<span class="errorMsg">'.$passwordError.'</span>'; ?>
                </div>

                <div class="input_box">
                  <input type="password" name="confirm_password" placeholder="Confirm your new password"  />
                  <i class="uil uil-lock password"></i>
                  <i class="uil uil-eye-slash pw_hide"></i>
                  <?php if (isset($confirmPasswordError) && $errorCondition)  echo '<span class="errorMsg">'.$confirmPasswordError.'</span>'; ?>
                </div>

                <button class="button" type="submit" name="submit">Continue</button>

              </form>
            </div>
        </div>
    </section>

  <script src="public/js/custom.js"></script>
</body>
</html>