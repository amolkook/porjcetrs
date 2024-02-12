<?php 
require_once('header.php');

?>
<!--header section stsrt-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-silde slide" style="background:url(img/wooden-bridge-koh-nangyuan-island-surat-thani-thailand.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3> travel arround the world</h3>
        </div>
            </div>
<div class="heading" style="background:url(imag/header-bg-2.png) no-repeat">
   
    </div>


<!--home packages section start-->

<section class="home-packages">

    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
           

            <?php
                                    require_once('config.php');
                                    $value=$_GET['find'];
                                    $sql="select * from package where pack_title like '%$value%'";
                                    $exe=mysqli_query($conn,$sql);
                                    if(!$exe){
                                        echo "Error" . mysqli_error($conn);
                                    }
                                    while($row=mysqli_fetch_assoc($exe)){
                    
                                    $title=$row['pack_title'];
                                     $text=substr($row['pack_text'],0,250);  // <a href='read_more.php?newsId=$id' class='stretched-link'>Continue reading</a>';
                                    $img=$row['pack_img'];
                                    echo "
                                    <div class='box-container'>
                                                      <div class='box'>
                                                             <div class='image'>
                                                                   <img src='' alt=''>
                                                                           </div>
                                                                                <div class='content'>
                                                                        <h3>$title</h3>
                                                                  <p>$text</p>
                                                                       <a href='book.php' class='btn'>book now</a>
                                                                    </div>
                                                               </div>
                                                                      ";                                   
                                    }
                                    mysqli_close($conn);
                                ?>
            

    
    </section>
    
    <!--home packages section ends-->



    <?php 
require_once('footer.php');
?>