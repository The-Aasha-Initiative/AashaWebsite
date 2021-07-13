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

    /* #square-box {
        box-sizing: border-box;
        width: 25%;
        height: 100%;
        border: 2px solid black;
    } */
    #intro
    {
        background-color:white;   
        padding: 1.5em;
    }

    #links
    {
        background-color: #ff0000;
        color:white;
        padding: 1.5em;
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top navbar-border nav-shadow">
            
        <a class="navbar-brand nb" href="index.html">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right flex-grow-1 mr-right" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5 flex-nowrap">
                <a class="nav-link border-r" href="#">Find Therapists</a>
                <a class="nav-link me-5 mr-right" href="#">For Professionals</a>
            </div>
        </div>

    </nav>

    <div class="container-fluid">

        <div class="t-header"> 
            <h2 class="mt-5">Find Mental Health Professionals</h2>
            <h5 class="mt-3 mb-5">Find Psychotherapists, Counsellors, Psychologists, Psychiatrists and Mental Health Clinics</h5>
        </div>
    
        <form class="ms-5 me-5" id="search-box" method="post">
            <label for="lgsearch">Search by Location:</label>
            <input type="search" id="lsearch" name="lsearch" placeholder="Area (e.g. Delhi)" title="Type in the city">
            
        </form>

        <hr>
        <?php
            $username = "root";
            $password = "";
            $database = "aasha";
            $mysqli = new mysqli("localhost", $username, $password, $database);

            $sql = "SELECT DISTINCT `Designation` FROM `therapists`"; 
            if($res = $mysqli->query($sql))
            {

                echo '<select id="profession">
                <option selected="true" disabled="disabled">Filter by Profession</option> ';

                while ($row = $res->fetch_assoc()) {
                    echo "<option value='" . $row['Designation'] ."'>" . $row['Designation'] ."</option>";
                } 
                echo '</select>';
                $res->free();
            }

            $ids = "SELECT DISTINCT `Identifies As` FROM `therapists`";
            if($res = $mysqli->query($ids))
            {

                echo '<select id="idas">
                <option selected="true" disabled="disabled">Identifies as</option> ';

                while ($row = $res->fetch_assoc()) {
                    echo "<option value='" . $row['Identifies As'] ."'>" . $row['Identifies As'] ."</option>";
                } 
                echo '</select>';
                $res->free();
            }
            
            $clgr = "SELECT DISTINCT `Client Group` FROM `therapists`";
            if($res = $mysqli->query($clgr))
            {

                echo '<select id="idas">
                <option selected="true" disabled="disabled">Client Group</option> ';

                while ($row = $res->fetch_assoc()) {
                    echo "<option value='" . $row['Client Group'] ."'>" . $row['Client Group'] ."</option>";
                } 
                echo '</select>';
                $res->free();
            }
            $istr = "SELECT DISTINCT `Issues Related` FROM `therapists`";
            if($res = $mysqli->query($istr))
            {

                echo '<select id="idas">
                <option selected="true" disabled="disabled">Issues treated</option> ';

                while ($row = $res->fetch_assoc()) {
                    echo "<option value='" . $row['Issues Related'] ."'>" . $row['Issues Related'] ."</option>";
                } 
                echo '</select>';
                $res->free();
            } 
            $lan = "SELECT DISTINCT `Languages` FROM `therapists`";
            if($res = $mysqli->query($lan))
            {

                echo '<select id="idas">
                <option selected="true" disabled="disabled">Languages</option> ';

                while ($row = $res->fetch_assoc()) {
                    echo "<option value='" . $row['Languages'] ."'>" . $row['Languages'] ."</option>";
                } 
                echo '</select>';
                $res->free();
            }   
            
        

        // <select id="istr">
        //     <option selected="true" disabled="disabled">Issues Treated</option> 
        //     <option value="mental health">Mental Health</option>
        //     <option value="website">Website</option>
        //     <option value="css">CSS</option>
        //     <option value="web hosting">Web Hosting</option>
        // </select>

        // <select id="language">
        //     <option selected="true" disabled="disabled">Language</option> 
        //     <option value="english">English</option>
        // </select>
            
        ?>
        <div id="boxes">  
            <?php
            $username = "root";
            $password = "";
            $database = "aasha";
            $mysqli = new mysqli("localhost", $username, $password, $database);
            

            if (!empty($_REQUEST['lsearch'])) {

            $term = $mysqli -> real_escape_string($_REQUEST['lsearch']);   
            
            $query = "SELECT * FROM `therapists` AS `T` inner join `personal details` as `P` ON `T`.`Therapist ID` = `P`.`Therapist ID` WHERE `Location` LIKE '%".$term."%'";
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
                    $field9name = $row["Phone Number"];
                    $field10name = $row["Intro"];
                    $field11name = $row["Instagram Link"];
                    $field12name = $row["Linkedin Link"];
                    $field13name = $row["Aasha URL"];

                    echo '<div id="square-box">
                            <div id="intro"><p>';echo $field2name;echo'</p><p>';echo $field3name;echo'</p><p>';echo $field10name;echo'</p><p>';echo $field8name;echo'</p><p></div>
                            <div id="links"><p>';echo $field13name;echo $field12name;echo $field11name;echo'</p><p>Phone Number: ';echo $field9name;echo'</p></div>
                          </div>';
                }
            
                /*freeresultset*/
                $result->free();
                }
            }
            ?>

        </div>

    </div>

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