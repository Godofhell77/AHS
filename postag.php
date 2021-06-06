<!DOCTYPE html>
<html lang="en">
<head>
<title>In the Event of an Accident</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bf.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Accident &nbsp;Alert&nbsp; Healthcare</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b> Other Resources </b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="postag.php">Post Accident Guidelines</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="faq.php">FAQ's</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="commis.php">Common Mistakes</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="mvr.php">Myth v/s Reality</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-black"><u>In the Event of an Accident</u></h1><br><br>
      
      

      <h2>Brief of an Accident Event</h2>
        <h5>The majority of auto injuries occur in accidents under 5mph! It is common to feel fine initially because the body is still in shock then a couple weeks later you may not even be able to get out of bed due to back pain! Be sure you see a chiropractor who specializes in auto accident injuries and your medical doctor right after an accident even if you feel fine.<br>

After an accident, it is wise to seek counsel from a personal injury attorney. Never try and settle a personal injury case on your own. Don’t work with the other parties’ insurance agent to settle your bodily injury case on your own, always hire an attorney. There are normally zero out of pocket expenses and you only pay a percentage of what is collected. A qualified attorney will inform you of your rights according to the state your accident took place in and will make sure you are justly compensated for your injuries, car, possessions, and passengers.<br>

Make sure your children are protected after an accident. Is your child’s car seat ok to reuse after an accident? Find out what to do with a car seat after an accident, how to assure your children are properly evaluated for hidden injuries.<br>

Often people make very costly mistakes when it comes to their automobile after an accident. Thousands of dollars of structure damage can occur even in a 5mph yet the car may appear to be without damage. It can be frustrating to find a reputable auto body shop, be compensated for a rental car, and to know what to do with your car after an accident. </h5><br><br>

<div class="w3-panel w3-padding-16 w3-teal ">
  <video width="100%" controls>
  <source src="images/postag.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>
<div class="jumbotron">

  <h1>Follow these recommended guidelines when involved in an accident.</h1><br>
  <h5><p>
1)   Stay calm and avoid placing blame on anyone until the police have arrived.<br><br>
2)  Check for injuries. When in doubt, call an ambulance.<br><br>
3)  Turn on your vehicle’s hazard lights. Place warning cones, flares or warning triangles for safety.<br><br>
4)  Insist on contacting the police even if the other driver does not believe it is warranted.<br>
    Note:  Always consult with an attorney or your own insurance company before signing any paperwork, unless it is for the police or medical personnel.<br><br>
5)  State only the facts and leave emotions out of your statement to the police officer.<br><br>
6)  Obtain names and telephone numbers of eye witnesses.<br><br>
7)  Take pictures if possible.<br><br>
8)  File your accident report when required by law, unless a police report was taken by an officer.<br><br>
9)  If you have serious injuries, do not try to settle your own claim. Contact a personal injury attorney to learn more about your rights. Report your loss to your insurance company, 
    but do not give an official statement to the other drivers’ insurance adjuster without consulting with your attorney or your own insurance company first.<br><br>
10) If you are injured, it is important that you get a thorough evaluation of your injuries by a doctor, such as a chiropractor who specializes in the musculoskeletal system — your bones, muscles, ligaments and tendons</p></h5>
</div>
    
  
    </div>
    <div class="w3-third w3-container">
      
      <img src="images/cc11.jpg" alt="HTML tutorial" style="width:100%; height:100%; margin-top:130px">
  </div>



  

      <img src="images/acc4.jpg" width="460" height="345" style="margin-top: -900px; margin-left: 1150px;">



      


  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-12">
      <h4><center>Trilogy Productions</center></h4>
    </div>

    
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
