<!DOCTYPE html>
<html lang="en">
<head>
<title>Myth v/s Reality</title>
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
      <h1 class="w3-text-black"><u>Myth v/s Reality</u></h1><br><br>
      
      

      <h3>Myth: Auto accident injuries are usually in proportion to the amount of damage done to a vehicle</h3>
        <p>Reality: There is no proven correlation between the extent of injuries suffered and vehicle damage. Significant trauma to the body can occur inside a vehicle that endured only a minor collision and shows only a dent or two. Studies have shown that neck injuries can result from auto accidents that happen at speeds as low as 5 mph!</p><br><br>
    
  <h3>Myth: Men and women are equally as likely to suffer a neck injury in an auto accident</h3>
  <p>Reality: Women are more likely than men to suffer whiplash in a auto accident. A recent study from the Umea University of Sweden evaluated a number of low-velocity auto accidents and determined that women suffer whiplash more often than men. The difference was attributed to the way female drivers sit in cars, which is usually closer to the steering wheel and more vertical than male drivers.</p><br><br>
  
<h3>Myth: If you don’t have pain right after an auto accident, you’re probably fine</h3>
  <p>Reality: Many soft tissue injuries — neck injuries in particular — are often not discovered for many hours after an accident. Giving the body time to recover from the initial shock of an accident can help determine and diagnose many symptoms that were previously unnoticed.</p><br><br>


<h3>Myth: No immediate symptoms means you do not have whiplash</h3>
  <p>Reality: Just because an auto accident victim does not report immediate neck pain or stiffness does not mean that whiplash has not occurred. The symptoms of whiplash can be evident immediately after an auto accident, or can manifest days — even weeks — later, even for severe cases. Whiplash is a soft tissue injury that requires careful diagnosis. A whiplash injury can exist even if MRIs and X-rays do not indicate that trauma has occurred.</p><br><br>

  <h3>Myth: Using a hands-free device minimizes cellular phone-related auto accidents</h3>
  <p>Reality: Many states now require the use of hands-free devices for cell phones with the intention of reducing the number of auto accidents caused by distracted drivers. Recent studies indicate, though, that the real risk associated with talking on a cell phone while driving is linked to the distraction caused by the act of talking itself, whether or not a hands-free device is used.</p><br><br>

  <h3>Myth: Most auto accidents happen far from home</h3>
  <p>Reality: Actually, most auto accidents happen within 5 miles of your home. Over-familiarity with the streets near home can lead drivers to bypass certain traffic precautions, skip the seatbelts and not notice things like new stop signs in their neighborhoods, all of which can have devastating consequences.</p><br><br>

  <h3>Myth: Auto accidents cause whiplash, not lower back pain</h3>
  <p>Reality: Some people think neck pain is the most common auto accident injury for low-velocity crashes, but lower back pain is also a common complaint. Lower back pain is likely to result from an auto accident because collisions — especially from the rear and side — cause the spine to twist abnormally, putting stress on the joints where the pelvis and spine meet.</p><br><br>

    </div>
    <div class="w3-third w3-container">
      
      <img src="images/mvr.jpg" alt="HTML tutorial" style="width:100%;height:100%;">
  </div>



  

      <img src="images/acc3.jpg" width="460" height="345" style="margin-top: -1100px; margin-left: 1150px;">



      


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
