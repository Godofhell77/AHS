<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">

</head>

<body>
	<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Accident & HealthCare System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a id="Our Motto, Mission & Vision"></a>
                    <a class="nav-link" href="#os">Specialities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accident Response System
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="modal.php">Report an Accident</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accident Guideline Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="postag.php">Post Accident Guidelines</a>
                        <a class="dropdown-item" href="faq.php">Auto Accident FAQ's</a>
                        <a class="dropdown-item" href="commis.php">Common Mistakes</a>
                        <a class="dropdown-item" href="mvr.php">Myths v/s Reality</a>
                    </div>
                </li>
            </ul>
		</div>
	</nav>
<br/><br/>
	</div>		
	
	<div style="width: 100%;"  class="w3-card-number">  
<h2>Result</h2>
<br/>	
			<?php include 'header.php'; ?>
<?php

if(isset($_POST['btn-search'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM justdial WHERE name LIKE '%$search%' OR landmark LIKE '%$search%' OR address LIKE '%$search%' OR url LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    $queryResult = mysqli_num_rows($result);


       # if($queryResult == 1){
        #echo "There is " . $queryResult . " result matching your query.";
        #}else {
        #echo "There are " . $queryResult . " results matching your query.";
        #}

    if ($queryResult > 0) {
      // code...
      while ($row = mysqli_fetch_assoc($result)) {
        // echo "<a href=".$row['url']." target='_blank'>
        //   <div class='article-box'>
        //     <h3>".$row['name']."</h3>
        //     <p>".$row['address']."</p>
        // </div></a>";
		echo "<a href=".$row['url']." target='_blank'>
        <ul class='w3-ul w3-hoverable'>
          <li class='w3-padding-large' style='color:black;'=>".$row['name']." <br/>".$row['address']."</li>
        </ul> </a>";
      }
    }

}

 ?>
</div>
<footer>
		<p class="p-3 bg-dark text-white text-center"></p>
	</footer>
</body>
</html>
