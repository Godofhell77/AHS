<?php include 'header.php'; ?>
<h1>Search Page</h1>
<div class="article-container">




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
        echo "<a href=".$row['url']." target='_blank'>
          <div class='article-box'>
            <h3>".$row['name']."</h3>
            <p>".$row['address']."</p>
        </div></a>";
      }
    }

}

 ?>

</div>
