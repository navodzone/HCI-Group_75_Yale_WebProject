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

      <section class="jumbotron text-center" style="background-image:url(images/background.jpg);margin-bottom: 0;">
        <div class="container">
          <div class="wrapper">
             <div class="block-1">
                <img src="./images/news.png" style="width: 516px">
             </div>
             <div class="block-2" style="height: 275px">
             <img src="./images/newsletter.png" style="width:200px;">
                 <div style="margin-top: 15px;">
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Email Address" aria-describedby="emailHelp" style="margin-bottom: 10px;">
                    <button type="submit" onclick="subscribe()" id="newsBtn" class="btn btn-primary" style="width: 100%">Submit</button>
                 </div>
                 <div id="successMsg" class="newsletterS alert alert-success" role="alert">
                     Subscribe Successfully!
                 </div>
                 <div id="errorMsg" class="newsletterS alert alert-danger" role="alert">
                     Enter a valid email!
                 </div>
                 <script>
                     function subscribe(){
                         let success = document.getElementById("successMsg");
                         let error = document.getElementById("errorMsg");
                         let emailBox = document.getElementById("inputEmail1");
                         let email = document.getElementById("inputEmail1").value;
                         var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                         if (email.match(mailformat)){
                             success.style.display = "block";
                             emailBox.disabled = true;
                             document.getElementById("newsBtn").style.display = "none";
                             error.style.display = "none";
                             emailBox.classList.remove("is-invalid");
                             emailBox.classList.add("is-valid");
                         }else {
                             error.style.display = "block";
                             emailBox.focus();
                             emailBox.classList.add("is-invalid");
                         }
                     }
                 </script>
             </div>
             </div>
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <?php
          

            require 'database.php';
            global $newsList;
            foreach ($newsList as $news){
            echo "
            <div class='col-md-4 card-group'>
              <div class='card mb-4 box-shadow'><a href='topic.php?id=$news[id]'>
                <img class='card-img-top' src='./images/$news[image]' alt='Card image cap'>
                <div class='card-body'>
                  <p class='card-text'>$news[title]</p>
                  <div class='d-flex justify-content-between align-items-center'>
                    <small class='text-muted'>$news[date]</small>
                  </div>
                </div>
              </div></a>
            </div>";} ?>
          </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/vendor/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/vendor/holder.min.js"></script>
  </body>
</html>