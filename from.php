<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <link rel="stylesheet" type="text/css" href="css/from.css?v=<?php echo time();?> "> 
</head>
<body><?php
include 'menu.php';
?>
<BR>
<div class="fcontainer">
  <div class="box">
  <form target="#" action="data.php" method="POST">
    <h1>Registration</h1>
    <div class="input">
      <span>Name</span>
      <input type="text" id="name" name="name" placeholder="name">
    </div>

    <div class="input">
      <span>email</span>
      <input type="email" name="email" placeholder="abc@gmail.com">
    </div>
    
    <div class="input">
      <span>Mobile</span>
      <input type="text/number" name="mobile" placeholder="XXXXXXX789">
    </div>

    <div class="input sel">
      <span>Course</span>
      <select name="course">
        <option>MBA</option>
        <option>BBA</option>
        <option>B Com.</option>
        <option>B.Ed</option>
        <option>D.Ed</option>
        <option>BSc(cs)</option>
        <option>BSc(Micro)</option>
        <option>BCA</option>
        <option>D.pharma</option>
        <option>B.farma</option>
      </select>
    </div>

     <div class="input">
      
      <input id="button" onclick="audio()" class="button" type="Submit" name="submit" value="Submit">
    </div>
  </form>
</div>
</div>

  <!-- <?php 
  include "footer.php";
   ?> - -->
  <script type="text/javascript">
  function audio() {
    let name =document.getElementById('name').value;
    x = name+"thnkyou for apply . our techer contect as soon ";
    let speech= new SpeechSynthesisUtterance();
    speech.lang="en-US";
    speech.text=x;
    speech.volume=1;
    speech.rate=1;
    speech.pitch=1;

    window.speechSynthesis.speak(speech);
  }

</script>
</body>
</html>