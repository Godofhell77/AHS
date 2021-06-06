<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Showing User's Location on Google Map</title>
      <meta name="robots" content="noindex, nofollow">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="maps.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script>
function showPosition() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else {
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}
 
// Define callback function for successful attempt
function showMap(position) {
    // Get location data
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);
    
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {
            style:google.maps.NavigationControlStyle.SMALL
        }
    }
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });
}
 
// Define callback function for failed attempt
function showError(error) {
    if(error.code == 1) {
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2) {
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3) {
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else {
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>
</head>
<body>
    <center><button type="button" onclick="showPosition();">Show My Position on Google Map</button></center>
    <div id="embedMap" style="width: 1900px; height: 900px;">
        <!--Google map will be embedded here-->
    </div>

    <div class="container contact">
         <div class="row">
            <div class="col-md-3">
               <div class="contact-info">
                  <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                  <h2>Contact Us</h2>
                  <h4>Please elaborate the incident situation for immidiate response.</h4>
               </div>
            </div>
            <div class="col-md-9">
               <form method="post" id="frmContactus">
                    <div class="contact-form">
                      <div class="form-group">
                         <label class="control-label col-sm-2" for="name">Name:</label>
                         <div class="col-sm-10">          
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-sm-2" for="email">Email:</label>
                         <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required><br>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-sm-2" for="email">Password:</label>
                         <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-sm-2" for="mobile">Mobile:</label>
                         <div class="col-sm-10">
                            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
                         </div>
                      </div>
                      
                      <div class="form-group">
                         <label class="control-label col-sm-2" for="comment">Brief an Incident :</label>
                         <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                         </div>
                      </div>
                      <div class="form-group">
                         <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
                            <span style="color:red;" id="msg"></span>
                         </div>
                      </div>
                   </div>
               </form>
            </div>
         </div>
      </div>
      <script>
      jQuery('#frmContactus').on('submit',function(e){
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajax({
            url:'submit.php',
            type:'post',
            data:jQuery('#frmContactus').serialize(),
            success:function(result){
                jQuery('#msg').html(result);
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('#frmContactus')[0].reset();
            }
        });
        e.preventDefault();
      });
      </script>

</body>
</html>