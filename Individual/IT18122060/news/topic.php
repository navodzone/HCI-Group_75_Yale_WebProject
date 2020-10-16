<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News - YALE School of Art</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/articulate.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar navbar-light bg-light box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <strong>YALE SCHOOL OF ART</strong>
            </a>
            <div>
                <a href=".././about.php" onclick="stop()" >
                    <button class="btn btn-outline-dark">About</button>
                </a>
                <a href=".././history/index.html" onclick="stop()" >
                    <button class="btn btn-outline-dark">History</button>
                </a>
                <a href=".././apply.html" onclick="stop()" >
                    <button class="btn btn-outline-dark">Apply</button>
                </a>
                <a href=".././gallery.html" onclick="stop()" >
                    <button class="btn btn-outline-dark">Gallery</button>
                </a>
                <a href="index.php" onclick="stop()" >
                    <button class="btn btn-outline-dark active">News</button>
                </a>
            </div>
        </div>
    </div>
</header>
<main role="main">
    <div style="background: #e9ecef; padding-top: 16px;">
    <div class="container">
<?php

$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, image, imgPosition, date, content FROM news WHERE id=$id";
$result = $conn->query($sql);
$news = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
} else {
    echo "0 results";
}
$item = $news[0];
$content = $item['content'];
$position =$item['imgPosition'];
echo "
<div class='row'>
<div class='col-12' style='height: 600px; padding-left:0; padding-right:0;background-position: $position; background-image: url(images/$item[image]);background-size: cover;background-repeat: no-repeat; color: white'><div class='col-12 bg-dark-new'><div class='row'><div class='col-1' style='margin: auto'><a href='index.php' onclick='stop()' class='btn btn-primary'>Back</a></div><h3 class='col-9' style='padding: 0.75rem;text-align: center;'>$item[title]</h3><div class='col-2' style='margin: auto;'><p style='text-align: right; margin: 0'>$item[date]</p></div></div> </div></div>
<div class='card mb-4 box-shadow'>
                    <div class='card-body'><p class='col-12' id='article' style='padding-top:20px;color: rgb(41, 41, 41); font-size: 21px;; letter-spacing: -0.003em;line-height: 32px;font-weight: 400;'> <button style='margin-right: 7px;' onclick='speak()'><img style='width: 26px;' src='./images/noise.png'></button>";echo nl2br($content); echo "</p></div></div>
</div>

";
$conn->close(); ?>
        <script>
            function speak(){
                $('#article').articulate('speak');
            };
            function stop(){
                $().articulate('stop');
            }
        </script>
    </div>
    </div>
</main>
<footer class="text-muted p-3">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>© 2020 Yale School Of Art</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/vendor/popper.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/vendor/holder.min.js"></script>

</body>
</html>

