<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Travel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--My Css -->
      <link rel="stylesheet" href="css.css">
</head>


<body>
<?php  
    $E_email = "";
    $E_password = "";
    $er = "";
    $OK = 1;
    if(isset($_POST['ok'])){
      if(isset($_POST['userEmail']) && isset($_POST['userPass'])){
        $email = $_POST['userEmail'];
        $pass = $_POST['userPass'];
        if(empty($email)) {
          $E_email = "Please Enter the Email";
          $OK = 0;
        }
        if(empty($pass)) {
          $E_password = "Please Enter the Password";
          $OK = 0;
        }
        if($OK == 1){
          require_once('./config.php');
          $pass = md5($_POST['userPass']);
          $per = 'user';
          $sql = "select * from users where user_email = '$email' and user_pass = '$pass'";
          $exe = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($exe))
          {
            if($email == $row['user_email'] && $pass == $row['user_pass'] && $per == $row['user_type'])
            {
              $_SESSION['adminId'] = $row ['user_id'];
              $_SESSION['adminName'] = $row ['user_Fnames'];
              header('location:index.php');
            }
          }
          if(!$email == $row['user_email'] && !$pass == $row['user_pass'] && !$per == $row['user_type'])
          {
            $er = 'Error in Email or Password';
          }
        }
      }
    }
    
    
    ?>
    <div class="modal modal-signin position-static d-block bg-white py-5" tabindex="-1" role="dialog"
        id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    
                    <h2 class="fw-bold mb-0">Login to the site</h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form class="form2">
                    <div class="login-container"></div>
                    <span>Don't have an account? <a href="sing_up.php" onclick="register()">Sign Up</a></span>
                    <header>Login </header>  
                    <!-- ////////////////////////////////////////////////////////////////////////// -->
                    <!------------------------ email ------------------------------------> 
                    <div class="input-box">
                          <input class="form-control rounded-3" id="floatingInput" type="email" name="user_email"placeholder=" name@example.com">
                          <p style="background-color:red;"><?php echo $E_email; ?></p>
                          <br>
                        </div>
                           <!------------------------password ------------------------------------> 
                           <div class="input-box">
                         <input class="form-control rounded-3" id="floatingPassword" type="password" name="user_password1" placeholder=" Password">
                         <p style="background-color:red;"><?php echo $E_password; ?></p>
                         <br>
                        </div>
               <!-- ////////////////////////////////////////////////////////////////////////// -->   
               <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit"name="ok">Login</button>              
                                <hr class="my-3">
                   <a href="./home.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-danger" type="submit">Cancel</a>
                            <div class="tow-col">
                                <div class="one">
                                    <label class="login-check">Remember Me:</label> 
                            <input class="form-check-input" type="checkbox" id="login" name="Remember" onclick="theChecker();">

                                 </div>
                             <div class="tow">
                             <label><a class="label-link2" href="sing_up.php">Forget password?</a></label> 
                            </div>
                            </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>