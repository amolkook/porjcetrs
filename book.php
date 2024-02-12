<?php 
require_once('header.php');
?>

<div class="heading" style="background:url(img/aerial-shot-small-green-island-middle-ocean.jpg) no-repeat">
    <h1>book now<h1>
    </div>



    <!--bookig section start-->

<section class="booking">

    <h1 class="heading-title">Book your trip!</h1>
    <form action="book-form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
        <span>Name : </span>
        <input type = "text" placeholder="enter name" name="name">
    
        
            </div>
    
            <div class="inputBox">
        <span>Email : </span>
        <input type = "email" placeholder="enter email" name="email">
    
        
            </div>
    
            <div class="inputBox">
        <span>Phone : </span>
        <input type = "number" placeholder="enter number" name="phone">
    
        
            </div>
    
            <div class="inputBox">
        <span>address : </span>
        <input type = "text" placeholder="enter Address" name="address">
     </div>
    
     <div class="inputBox">
        <span>where to : </span>
        <input type = "text" placeholder="place you want to vist" name="location">
     </div>
    
     <div class="inputBox">
        <span>how many : </span>
        <input type = "number" placeholder="number of guests" name="guests">
    </div>
    
    <div class="inputBox">
        <span>arrivals : </span>
        <input type = "date" name="arrivals">
    </div>
    
    <div class="inputBox">
        <span>leaving : </span>
        <input type = "date" name="leaving">
    </div>
        </div>
    
    <input type="submit" value="submit" class="btn" name="send">
    
    </form>
    
    </section>
    
    <!--bookig section ends-->
    
     










































    <?php 
require_once('footer.php');
?>