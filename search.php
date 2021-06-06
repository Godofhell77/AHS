<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Accident HealthCare Centre</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="About.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Kuchh Bhi
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0 " action="search.php" method="post">
				<input class="form-control mr-sm-2" type="text" name="search" placeholder="Find a Hospital . . ." aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" name="btn-search" type="submit">Search</button>
			</form>
		</div>
	</nav>
  <br/> <br/>

</div>
<div style="width: 100%;"  class="w3-card-number">  
<h2>Result</h2>
<br/> 
<!-- class='article-box' -->
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
      while ($row = mysqli_fetch_assoc($result)) {
        // echo "<a href=".$row['url']." target='_blank'>
        //   <div>
        //     <h3 style='font-family: sans-serif;color:black;'>".$row['name']."</h3>
        //     <p style='font-family: sans-serif;color:black;'>".$row['address']."</p>
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




