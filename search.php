
<style>
    /* تنسيق حقل البحث */
    input[name="find"] {
      margin-bottom: 10px;
      padding: 5px;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    /* تنسيق زر البحث */
    input[name="sub_find"] {
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }

    /* تنسيق النتائج */
    .results {
      margin-top: 20px;
      padding: 10px;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
  </style>
<form  method="GET">
    <input style="margin-bottom:10px;" name="find" placeholder="Write here to search for package ..." class="form-control" type="text">
    <input type="submit" name="sub_find" class="form-control btn btn-success" value="Search">
    <?php
    if(isset($_GET['sub_find']))
    {
        $v=$_GET['find'];
        header("location:rel.php?find=$v");
        //يسوي نقل الى الصفحة المطلوبة الموجودة صفحة النيجة
    }
    ?>
</form>
