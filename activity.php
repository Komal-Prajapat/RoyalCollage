<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal</title>
    <link rel="stylesheet" href="css/css_file.css?v=<?php echo time();?> ">

</head>
<body>
<?php
include 'menu.php';
?>
<br>
<!-- /* sport --> 
<h2>GIRLS SPORT DAY (2022-2023)</h2><br>

<div class="com_img">
     <img class="mySlides" src="img/girls_sport2.jpg" >
     <img class="mySlides" src="img/girls_Sport.jpg" >
      <img class="mySlides" src="img/girls_sport1.jpg" >
    <img class="mySlides" src="img/girls_sport3.jpg" >
    <img class="mySlides" src="img/girls_sport4.jpg" >
    <img class="mySlides" src="img/girls_sport5.jpg">
<!-- end sport -->
<!-- goa  -->
<h2>GOA Tour</H2><BR>
<div class="com_img">
    <img class="mySlides2" src="img/goa2.jpg" >
    <img class="mySlides2" src="img/goa5.jpg" >
    <img class="mySlides2" src="img/goa1.jpg" >
    <img class="mySlides2" src="img/goa3.jpg" >
    <img class="mySlides2" src="img/goa4.jpg" >
       
  <br>
  <button class="left_button_goa" onclick="plusDivs(-1)">&#10094;</button>
  <button class="right_button_goa" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!-- end goa -->
    <!-- <h1> loan</h1>
    <img src="img/loan.jpg" height="300px" width="300px">
    <img src="img/loan1.jpg" height="300px" width="300px">
    <img src="img/loan2.jpg" height="300px" width="300px">
    <img src="img/loan3.jpg" height="300px" width="300px">
</div> -->
<div >

            <!-- Self defence -->
<h2>SELF DEFENCE </H2>
    <img src="img\self_defence.jpg"  class="self">
    <img src="img\self_defence1.jpg" class="self">
</div>

        <!-- cyber security -->
<div >
<h2>Cyber security Awareness workshop (2022-2023) </H2>
<h1>Event speaker : - <i color="darbule">Dr.Varun Kapoor IPS ADGP<i> </h1>
   <img src="img/att4.jpg" class="acti" >
   <img src="img/att1.jpg" class="acti">
    <img src="img/att2.jpg" class="acti">
    <img src="img/att3.jpg" class="acti">
</div>

<br>
<!-- <?php
include 'footer.php';
?> -->
</body>
</html>