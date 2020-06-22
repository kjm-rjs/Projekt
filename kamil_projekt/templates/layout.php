<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kamil Kotulak</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="nav-bar">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="../kamil_projekt">
                <img src="images/logo.png" width="80px"  alt="logo">
            </a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="../kamil_projekt">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php?page=products">Produkty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php?page=courses">Kursy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php?page=contact">Kontakt</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-sm shadow p-3 mb-5 bg-white rounded">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum turpis mollis tortor ultricies gravida. Phasellus ullamcorper ex enim, in ornare massa varius eu. Cras vulputate varius posuere. Vestibulum nec libero nunc. Aenean sollicitudin dolor eget nisl elementum placerat. Vivamus aliquet dignissim massa sit amet volutpat. Sed sollicitudin congue elit, vel porttitor turpis tristique nec.
        </div>
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
                    if ($strona == "rejestracja")
                    {
                        include ('register.php');
                    }
                    if ($strona == "delete")
                    {
                        include('delete.php');
                    }
                    if ($strona == "edit")
                    {
                        include ('edit.php');
                    }
                    if($strona == "wyloguj"){
                        include('logout.php');
                    }
                }
            }
            else{
                include ('glowna.php');
            }
            ?>
        </div>
        <div class="col-sm shadow p-3 mb-5 bg-white rounded">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum turpis mollis tortor ultricies gravida. Phasellus ullamcorper ex enim, in ornare massa varius eu. Cras vulputate varius posuere. Vestibulum nec libero nunc. Aenean sollicitudin dolor eget nisl elementum placerat. Vivamus aliquet dignissim massa sit amet volutpat. Sed sollicitudin congue elit, vel porttitor turpis tristique nec.
        </div>
    </div>
    <div id="footer">
        <p> Copyright by Kamil Kotulak &copy;</p>
    </div>
</div>
</body>
</html>
