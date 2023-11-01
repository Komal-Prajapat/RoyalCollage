
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>royal</title>
  
</head>

<body class="bg">
<link rel="stylesheet" href="css/css_file.css?v=<?php echo time();?> ">
<?php
include 'menu.php'; 
?>
<br>
<div class="com_img">
  <img class="mySlides" src="img/new_img1.jpg" style="width:70%"  height="400">
  <img class="mySlides" src="img/new_img2.jpg" style="width:70%" height="400">
  <img class="mySlides" src="img/new_img3.jpg" style="width:70%" height="400">
  <img class="mySlides" src="img/new_img4" style="width:70%" height="400">
  <!-- <img class="mySlides" src="img/new_img5.jpg" style="width:70%"  height="400">
  <img class="mySlides" src="img/new_img6.jpg" style="width:70%" height="400">
  <img class="mySlides" src="img/new_img7.jpg" style="width:70%" height="400"> -->
  <!-- <img class="mySlides" src="img/new_img9.jpg" style="width:70%" height="400"> -->
<br>
  <button class="left_button" onclick="plusDivs(-1)">&#10094;</button>
  <button class="right_button" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<br><br>
<video width="320" height="240" controls class="viedo_2">
  <source src="viedo/rell.mp4" type="video/mp4" >
</video>

<video width="320" height="240" controls class="viedo_2">
  <source src="viedo/rell2.mp4" type="video/mp4" >
</video>
<video width="320" height="240" controls class="viedo_2">
  <source src="viedo/rell3.mp4" type="video/mp4" >
</video>


<?php 
include 'footer.php';
?>

</body>
</html>
