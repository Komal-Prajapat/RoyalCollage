<?php
$profpic = "img/bg_im.jpg";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/facilities.css?v=<?php echo time();?>">
    <style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
background-size:cover;
background-repeat:no-repeat;
filter: white(px); 
}

</style>
</head>
<body>
<?php
include 'menu.php';
?>
<div class="container">
<img src="img/fac_img12.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>Bio Lab</h1>
</div>
</div>
<div class="container">
<img src="img/fac_img11.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>ATOMS</h1>
</div>

</div><div class="container">
<img src="img/fac_im9.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1><B>Bio LAb</B></h1>
</div>
<!-- </div><div class="container">
<img src="img/fac_img7.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>sadas</h1>
</div> -->
</div><div class="container">
<img src="img/fac_img6.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>COMPUTER LAB</h1>
</div>
</div>

</div><div class="container">
<img src="img/fac_img4.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>CHEMISTRY LAB</h1>
</div>
</div><div class="container">
<img src="img/fac_img3.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>CHEMISTRY LAB</h1>
</div>
</div><div class="container">
<img src="img/fac_img2.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>LIBRARY</h1>
</div>
</div><div class="container">
<img src="img/fac_img1.jpg" class="fac_img"  width="400" height="400">
<div class="content">
    <h1>sadas</h1>
</div>

</div>

<br>
<br>
<?php
include 'footer.php';
?>
</body>
</html>