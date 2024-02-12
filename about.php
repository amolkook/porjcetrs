<?php 
require_once('header.php');
?>
<!--header section ends
url(images/) no-repeat-->
<div class="heading" style="background:url(img/aerial-shot-small-green-island-middle-ocean.pngx) no-repeat">
    <h1>about us<h1>
    </div>


<!--about section start-->
<section class="about"></section>
<!--about section ends-->








<!--home about section start-->

<section class="home-about">
    <div class="image">
        <img src ="img/close-up-hands-holding-tasty-cookies.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us<h3>
        <?php 
                    require_once('config.php');
                    $sql="select * from about order by about_id desc";
                    $ressult = mysqli_query($conn,$sql);
                    if(!$ressult){
                        die("selected Erorr"); }
                    $row=mysqli_fetch_assoc($ressult);
                    $text=$row['about_text'];
                    echo"<p> $text</p>";
                    ?>
            </div>
</section>

<!--home about section ends-->


<?php 
require_once('footer.php');
?>




























