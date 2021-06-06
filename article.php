<?php
include 'header.php';

 ?>


<h1>Article Page</h1>

<div class="article-container">

  <?php
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    
    $url = mysqli_real_escape_string($conn, $_GET['url']);

    $sql = "SELECT * FROM justdial WHERE name='$name' AND speciality='$url'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if($queryResults > 0){
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='article-box'>
          <h3>".$row['name']."</h3>
          <p>".$row['address']."</p>
          <p>".$row['url']."</p>
          <p>".$row['landmark']."</p>
        </div>";
      }
    }
   ?>
</div>
  </body>
</html>
