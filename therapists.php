<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Aasha Initiative</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>

    #square-box {
        box-sizing: border-box;
        width: 25%;
        height: 100%;
        border: 2px solid black;
    }
    #intro
    {
        background-color:white; 
    }
    #links
    {
        background-color:red;
    }

    </style>

<script>
    $("#lsearch").keypress(function(event) {
        if (event.which == 13) {
            event.preventDefault();
            $("#search-box").submit();
        }
    });
</script>
</head>
<body>
    <img id="blog-banner" src="images/sreerag.png">

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="blog-nav">
            
        <!-- <a class="navbar-brand" href="#">Aasha</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-border" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link"  aria-current="page" href="index.html">HOME</a>
                <a class="nav-link" href="#">Find Therapists</a>
                <a class="nav-link" href="#">For Professionals</a>
            </div>
        </div>

    </nav>
    <div> 
    <h2>Find Mental Health Professionals</h2>
    <h5>Find Psychotherapists,Counsellors,Psychologists,Psychiatrists and Mental Health Clinics</h5>
    </div>
    
    <center><form id="search-box" method="post">
        <label for="lgsearch">Search by Location:</label>
        <input type="search" id="lsearch" name="lsearch" placeholder="Area (e.g. Delhi)" title="Type in the city" width="300px">
        <hr>
    </form></center>
    
    
    <?php
    $username = "root";
    $password = "";
    $database = "aasha";
    $mysqli = new mysqli("localhost", $username, $password, $database);

    if (!empty($_REQUEST['lsearch'])) {

    $term = $mysqli -> real_escape_string($_REQUEST['lsearch']);     
    
    $query = "SELECT * FROM THERAPISTS WHERE Location  LIKE '%".$term."%'";
    //echo "<b> <center>Database Output</center> </b> <br> <br>";
    
    if ($result = $mysqli->query($query)) {
    
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["Therapist ID"];
            $field2name = $row["Name"];
            $field3name = $row["Designation"];
            $field4name = $row["Identifies As"];
            $field5name = $row["Client Group"];
            $field6name = $row["Languages"];
            $field7name = $row["Issues Related"];
            $field8name = $row["Location"];
           
            echo '<div id="square-box">
                    <div id="intro">';echo $field2name;echo'</div>
                   <div id="links">';echo $field8name;echo'</div>
                  </div>';

        }
    
        /*freeresultset*/
        $result->free();
        }
    }
      ?>

<div id="footer" style="position: relative; z-index: 9;">
        <img src="images/coverfooter.jpg" class="img-fluid" id="footerbanner" alt="...">  
    </div>

    <div class="footer-basic" style="position: relative; z-index: 9;">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item fw-bold fs-4">Reach Us</li>
            </ul>
            
            <div class="social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/the-aasha-initiative/"><i class="fab fa-linkedin"></i></a>
                <!-- <a href="#"><i class="icon ion-social-twitter"></i></a>
                <a href="#"><i class="icon ion-social-facebook"></i></a></div> -->
            
            <p class="copyright">The Aasha Initiative © 2021</p>
        </footer>
    </div>



</body>
</html>