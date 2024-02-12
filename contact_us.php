<?php 
require_once('header.php');
?>

<style>
    /* تحديد العنصر الرئيسي */
    .row {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
        margin-bottom: 20px;
    }

    /* تحديد الحاوية */
    div.container {
        text-align: center;
        border: var(--border);
        box-shadow: var(--box-shadow);
        background: var(--white);
        padding: 1rem;
        text-align: center;
    }

    /* تحديد العمود */
    div.col-md-3,
    div.col-md-6 {
        /* أضف أي تنسيقات إضافية تحتاجها هنا */
    }

    /* تنسيق العنوان */
    h3 {
        display: flex;
        flex-wrap: wrap;
        gap: 8rem;
    }

    /* تنسيق حقل إدخال الاسم */
    input[name="name_sender"],
    input[name="email_sender"],
    textarea[name="message"] {
        width: 100%;
        padding: 0.5rem;
        border: var(--border);
        box-shadow: var(--box-shadow);
        border-radius: 4px;
    }
    textarea{
        border:none;
    }
    /* تنسيق زر الإرسال والإعادة */
    input[type="submit"],
    input[type="reset"] {
        padding: 0.5rem 1rem;
        margin-right: 0.5rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
    }

    input[type="submit"] {
        background-color: var(--main-color);
        color: var(--black);
    }

    input[type="reset"] {
        background-color: var(--main-color);
        color: var(--black);
    }
</style>

        <!-- main  -->
        <div style="margin-top:15px;margin-bottom:20px;   text-align: center;    border: var(--border);   box-shadow: var(--box-shadow);
    background: var(--white);  padding: 1rem;
    text-align: center;
        " class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 style="display:flex;
        flex-wrap: wrap;
        gap:8rem;">Contact Us </h3>
                <form method="POST" action="#">
                    <div class="row">
                        <div class="col-md-12">
                            <input placeholder="Enter Your Name" name="name_sender" class="form-control" type="text">
                        </div>
                    </div>
                    <div style="margin-top:20px;margin-bottom:20px;  text-align: center;" class="row">
                        <div class="col-md-12">
                            <input placeholder="Enter Your Email" name="email_sender" class="form-control" type="email">
                        </div>
                    </div>
                    <div style="margin-top:25px;margin-bottom:25px;   border: var(--border);" class="row" ;>
                        <div class="col-md-12">
                            <textarea name="message" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:20px;margin-bottom:20px; " class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send" class="btn btn-success" name="send">
                            <input type="reset" value="Rest" class="btn btn-secondary" name="Reset">
                        </div>
                    </div>
                </form>
                <?php
                if(isset($_POST['send'])){
                    require_once('config.php');//كود الربط مع قاعدة البيانات
                    $name=$_POST['name_sender'];//هذا الذي داخل nameفي الاقواس 
                    $email=$_POST['email_sender'];
                    $text=$_POST['message'];
                    $new_text=str_replace("'","''","$text");
                    $sql = "insert into control_us(cont_user_name,cont_user_email,cont_user_text)  values ('$name','$email','$new_text')";
                    $exe = mysqli_query($conn,$sql);//تنفيذ الاستعلام
                    if(!$exe){//في حالة ما تنفذ الاستعلام  يكون في رسالة خطا
                    echo "Inserted Error" . mysqli_error($conn);
                    }
                    mysqli_close($conn);//اغلاق الاتصال 
                }
                ?>

                
            </div>
            <div class="col-md-3"></div>
        </div>
        <?php 
require_once('footer.php');
?>







    