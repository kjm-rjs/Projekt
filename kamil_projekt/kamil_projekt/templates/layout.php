<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kamil Kotulak</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="timer.js"></script>
</head>
<body onload="count(); days()">
<div class="container-fluid">
    <div class="nav-bar">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="../kamil_projekt">
                <img src="images/Logo.png" height="40px" alt="logo">
            </a>

            <ul class="nav justify-content-center">
              <li class="nav-item">
                <div id="clock"></div>
                <div id="current_day"></div>
              </li>

                <li class="nav-item">
                    <a class="nav-link" href="../kamil_projekt">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kamil_projekt/index.php?page=products">Produkty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kamil_projekt/index.php?page=courses">Kursy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kamil_projekt/index.php?page=contact">Kontakt</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
      <div class="col-sm shadow p-3 mb-5 bg-white rounded">
          <?php
          if(isset($_GET['page']))
          {
              $strona = $_GET['page'];
              {
                  if ($strona == "products")
                  {
                      include ('products.php');
                  }
                  if ($strona == "courses")
                  {
                      include ('courses.php');
                  }
                  if ($strona == "contact")
                  {
                      include ('contact.php');
                  }
              }
          }
          else{
              include ('glowna.php');
          }
          ?>
      </div>
    </div>

    <div id="footer">    
        Copyright by Kamil Kotulak &copy;
    </div>
</div>
</body>
</html>
