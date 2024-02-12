<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equive="X-UA-Compatible" content ="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>home</title>
     <!--swiper link css-->
        <!-- <link rel="stylesheet" href="htpps://unpkg.com/swiper-bundle.min.css" /> -->
        <!--font link css-->
        <!-- <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <!-- <link rel ="stylesheet" href="style.css"> -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  font-family:'Poppins',sans-serif;
}
body{
  direction: ltr;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 40px;
  
}

.container{
  text-align: center;
  padding-bottom: 30px;
  flex-direction: column;
  transition: .5s ease-in-out;

}
form{
  position: absolute;
  display: block;
  text-align: center;
  justify-content: center;
  top: 10%;
  left: 32%;
  margin-bottom: 20px;
  right: 40%;
  border: 30px solid transparent; 
  box-shadow: 0 0 20px #9e81ab;
  width: 450px;
  height: 840px;
  margin-bottom: 20px;
  border-radius: 10px;
  box-sizing: border-box;
  overflow: hidden;
  z-index: 2;
}
span{
  margin: 10px;
  padding: 30px 0;
  top: 30%;
 justify-content: center;

}
span ,a{
  font-size: 20px;
}
a{
  color: #73378d;
  margin-left: 5px;
}
header{
  margin: 10px;
  padding: 10px;
  font-size: 30px;

}
input{
  border: none;
  width: 450px;
  height: 50px;
  
}
.tow-forms{
display: flex;
gap: 10px;
}

.form-control{
  font-size: 15px;
  color: #8e44ad;
  background-color: rgba(140, 148, 150, 0.301);

  border-radius: 10px;
  box-sizing: border-box;
  padding: 0 5px 0;
  outline: none;
  transition: .2s ease;
  
}
/* .form-control:hover,.form-control:focus{
  background-color: rgba(205, 119, 196, 0.822);} */

  input.form-control::placeholder {
    color: rgb(0, 1, 1);
    left: 500px;

  }
.input-box i{
  position:absolute;
  color: rgb(1, 1, 0);

}
.submit{
  font-size: 15px;
  font-weight: 500;
  color: #060505;
  height: 45px;
  width: 100%;
  border: none;
  border-radius: 10px;
  outline: none;
  background-color: rgba(92, 108, 250, 0.99);
  cursor: pointer;
  transition: .3s ease-in-out;
  box-shadow: 1px 5px 7px 1px rgba(255, 255, 255, 0.699);
}
/* .submit:hover{
  background-color: rgba(185, 135, 185, 0.548);
  box-shadow: 1px 5px 7px 1px rgba(255, 255, 255, 0.699);
} */
.tow-col{
  display:block ;
  justify-content: space-between;
  font-size: small;
  color: #000;
  margin-top: 10px;
}
.tow-col.one{
  display:flex;
  gap: 5px;
}
.label-link{
  text-decoration: none;
}
.form2{
  position: absolute;
  display: block;
  text-align: center;
  justify-content: center;
  top: 15%;
  left: 32%;
  margin-bottom: 20px;
  right: 40%;
  border: 30px solid transparent; 
  box-shadow: 0 0 20px #d4b9ce;
  width: 450px;
  height: 550px;
  margin-bottom: 20px;
  border-radius: 20px;
  box-sizing: border-box;
  overflow: hidden;
  z-index: 2;
 
}

.label-link2{
  text-decoration: none;
  font-size: medium;
 
}

.bx-envelope{
  width: 330px;
  top: 190px;
  }
  .bx-lock-alt{
    width: 930px;
    top:220px;
  }
  #e{
    width:330px ;
    top:320px;
  }
  .bx-phone{
    width:330px ;
    top:390px;
  }
  
  .bx-user{
    width: 530px;
    top: 125px;
  }
  .bx-lock-alt{
    width: 330px;
    top: 250px;
  }
  

</style>
    </head>
    <body>
        
<?php
$E_user_Fname = "";
$E_user_Lname = "";
$E_email = "";
$E_password1 = "";
$E_password2 = "";
$E_eq = "";
$E_phone = "";
$E_gender ="";
$E_country = "";

if(isset($_POST['ok'])){
    require_once('config.php');
    $Fname = $_POST['user_Fname'];
    $Lname = $_POST['user_Lname'];
    $email = $_POST['user_email'];
    $password1 = $_POST['user_password1'];
    $password2 = $_POST['user_password2'];
    $phone = $_POST['user_tel'];
    $gender = $_POST['user_gender'];
    $country = $_POST['user_country'];
    $type = "User";
    // header('location:book.php');
            
           
     // Password Strength
     $uppercase = preg_match('@[A-Z]@', $password1);
     $lowercase = preg_match('@[a-z]@', $password1);
     $number    = preg_match('@[0-9]@', $password1);
     $specialChars = preg_match('@[^\w]@', $password1);


     if (empty($Fname) || !(ctype_alpha($Fname))) {
        $E_user_Fname = "You must enter the first name";  
    } elseif(empty($Lname) || !(ctype_alpha($Lname))) {
        $E_user_Lname = "You must enter the last name";
    } elseif (empty($password1) || !$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 4 ) {
        $E_password1 = "Password should be at least 4 characters in length and should include at least one upper case letter, one number, and one special character";
    } 
    
    
    elseif (empty($password2)) {
        $E_password2 = "You must enter the confirming password";
    } elseif ($password2 !== $password1) {
        $E_eq = 'Your confirming password is not correct';
    } elseif (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || (!preg_match("/\w+@(gmail|hotmail|yahoo)\.(com|net|org)$/",$email))) {
        $E_email = 'Your email is either empty or Enter only with EMAIL FORMAT';
    } 

 elseif (empty($phone) || !(ctype_digit($phone)) || strlen($phone) < 9) {
        $E_phone = 'Your phone is either empty or Enter only NUMERIC data';
    } elseif (empty($gender)) {
        $E_gender = "You must choose the gender";
    } elseif (empty($country)) {
        $E_country = "You must choose the country";
    }
                
    elseif(isset($_FILES['user_uplode']) && empty($_FILES['user_uplode']['tmp_name'])) {
        $password2 = md5($_POST['user_password2']);
        $sql = "INSERT INTO users(user_Fname, user_Lname, user_password, user_email, phone, user_gender, user_country, user_type)
                VALUES ('$Fname', '$Lname', '$password2', '$email', '$phone', '$gender', '$country', '$type')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Insert Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    } 

    else {
        $folder = "./img/";
        $img = $_FILES['user_uplode']['name'];
        $tmp = $_FILES['user_uplode']['tmp_name'];
        $password2 = md5($_POST['user_password2']);
        $sql = "INSERT INTO users(user_Fname, user_Lname, user_password, user_email, phone, user_gender, user_country, user_img, user_type)
        VALUES ('$Fname', '$Lname', '$password2', '$email', '$phone', '$gender', '$country','$img', '$type')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Insert Error: " . mysqli_error($conn);
        }
        move_uploaded_file($tmp, $folder.$img);
        mysqli_close($conn);
    }
}
?>

<!-- main  -->
<div style="margin-top:20px;margin-bottom:20px;" class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
       
        <form name="Register" id="reg" action="" method="post" enctype="multipart/form-data">
        <span>Have an account? <a href="sing_in.php" onclick="login()">login</a></span>
                    <header>Sign Up </header> 
                     <!-- //////////////////////////////////////////////////////////////// --> 
                <div class="tow-forms">
                    <div class="input-box">
                        <input class="form-control" id="name" type="text" name="user_Fname" placeholder="  FristName">
                        <?php echo $E_user_Fname;?>
                        <br>
                    </div>   
                   <!-- //////////////////////////////////////////////////////////////// -->
                
                    </div>       
      <!-- /////////////////////////////////////////////////////////////////////////// -->
                <div class="input-box">
                          <input class="form-control" id="email" type="email" name="user_email"placeholder="  Email">
                          <?php echo $E_email;?>
                          <br>
                        </div>
                    <!-- /////////////////////////////////////////////////////////////////////////// -->
                    <div class="input-box">
                         <input class="form-control" id="pass" type="password" name="user_password1"placeholder="  Password"> 
                         <?php echo $E_password1;?>
                         <br>
                        </div>
                    <!-- /////////////////////////////////////////////////////////////////////////// -->
                    <div class="input-box">
                            <input class="form-control" id="pass1" type="password" name="user_password2"placeholder="  Confirm Password">    
                            <?php echo $E_password2; echo $E_eq;?>
                            <br>
                        </div>
                     <!-- /////////////////////////////////////////////////////////////////////////// -->
                     <div class="input-box">
                            <input class="form-control" id="tel" type="tel" name="user_tel" placeholder="  Phone Number">           
                            <?php echo $E_phone;?>
                            <br>
                             </div>
                     <!-- /////////////////////////////////////////////////////////////////////////// -->
                     <label>Gender:</label>
                                <input class="form-check-input" id="gender" type="radio" name="user_gender"
                                    value="Male">Male
                                <input class="form-check-input" id="gender" type="radio" name="user_gender"
                                    value="Female">Female
                                    <?php echo $E_gender;?>
                                    <br>
                     <!-- /////////////////////////////////////////////////////////////////////////// -->
                     <select name="user_country" id="country" required>
                                    <option>Choose your country</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="China">China</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Egypt">Egypt</option>  
                                </select>
                                <?php echo $E_country;?>
                                <br>
                   <!-- /////////////////////////////////////////////////////////////////////////// -->
                   <p>Uplode Image:</p>
                            <label id="format"><input class="form-control" type="file" name="user_uplode" id="user_img" >
                                The allowed formats here are (jpg,png,svg,jpeg)</label>
                                <br>
                 <!-- /////////////////////////////////////////////////////////////////////////// -->
                 <label class="form-check-label">Agree:</label> 
                            <input class="form-check-input" type="checkbox" name="agree" onclick="theChecker();">
                            <br>
                                <input class="submit" type="submit" value="Register" name="ok">
                            <div class="tow-col">
                                <div class="one">
                                    <label class="Register-check">Remember Me:</label> 
                            <input class="form-check-input" type="checkbox" id="Register-check" name="Remember" onclick="theChecker();">

                                 </div>
                             <div class="tow">
                             <label><a class="label-link" href="#">TERMS & Conditions</a></label> 
                            </div>
                            </div> 
        </form>
    </div>
    <div class="col-md-2"></div>
</div>


<script>
document.getElementById("reg").onsubmit = function () {
    // Email
    let emin = document.getElementById("email").value;
    let emiR = /\w+@(gmail|hotmail|yahoo).(com|net|org)$/i;
    let va = emiR.test(emin);
    // Image Type
    let fileInput = document.getElementById('user_img');
    let filePath = fileInput.value;
    // Allowing file type
    let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;

    if (document.querySelector("#name").value === "") { 
        alert("You must enter the frist name or Enter only ALPHABET characters");
        return false;
    }
    if (/^(?=.[0-9])(?=.[A-Z])(?=.[!@#$%^&])[a-zA-Z0-9!@#$+()={}/|_%^&\u0621-\u064A-]{4,}$/s.test(document.querySelector("#pass").value) === false) {
        alert("Password should be at least 4 characters in length and should include at least one upper case letter, one number, and one special character");
        return false;
    }
    if (document.querySelector("#pass1").value.length === 0) {
        alert("You must enter the confirming password");
        return false;
    }
    if (document.querySelector("#pass1").value !== document.querySelector("#pass").value) {
        alert("Your confirming password is not correct");
        return false;
    }
    if (emin === "") {
        alert("You must enter your email");
        return false;
    }
    if (va === false) {
        alert("You must enter your email correctly");
        return false;
    }
    if (/^[0-9]{9}$/g.test(document.getElementById("tel").value) === false){
        alert("You must enter the number and it must be correct");
        return false;
    }
    if (document.querySelector('input[name="user_gender"]:checked') === null) {
        alert("You must choose the gender");
        return false;
    }
    if (document.querySelector("#country").selectedIndex === 0) {
        alert("You must select the country");
        return false;
    }
    if (!allowedExtensions.test(filePath)) {
        alert("Invalid file type");
        fileInput.value = '';
        return false;
    }
    return true;
};

function theChecker() {
    if (document.getElementById("agree").checked === true)
        document.getElementById("ok").disabled = false;
    else
        document.getElementById("ok").disabled = true;
}

</script>
