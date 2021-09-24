<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Align</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico"/>
    <link rel="stylesheet" href="css/fontawesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://allfont.net/allfont.css?fonts=league-spartan" rel="stylesheet" type="text/css" />
</head>
<body id="hotlines-body">
    <img id="blog-banner" src="images/Find_Therapists.png">

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top navbar-border nav-shadow">
            
        <a class="navbar-brand nb" href="index.html">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse text-right flex-grow-1 mr-right" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5 flex-nowrap">
                <a class="nav-link border-r" href="#">Find Therapists</a>
                <a class="nav-link me-5 mr-right" href="for-professionals.php">For Professionals</a>
            </div>
        </div> -->

    </nav>

    <div class="t-header"> 
        <h2 class="mt-5">Hotlines</h2>
        <h4>This is an extensive list of suicide prevention hotlines collected from various sources and verified at the time of the collection, please reach out to us and update us if any of the hotlines turn non-responsive.</h4>
    </div>
    
    <form class="ms-5 me-5" id="hotlines-dropdown" method="post"> 
        <label for="hsearch">Search by Location </label>
        <?php
            
                $username = "root";
                $password = "";
                $database = "align";
                $mysqli = new mysqli("localhost", $username, $password, $database);

                $sql = "SELECT DISTINCT `location` FROM `hotlines` ORDER BY `location`"; 
                if($res = $mysqli->query($sql))
                {

                    echo '<div class="select">
                                <select id="location" name="location">
                                <option value="" selected disabled>Select your Location</option>';              
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='" . $row['location'] ."'>" . $row['location'] ."</option>";
                    }
                
                    echo '      </select>
                          </div>';
                    $res->free();
                  
                }
        ?>        
    </form>
    <hr>

    <div class="container-fluid hotlines-container">
         
        <?php

            $query = "SELECT * FROM `hotlines`";

            if ($result = $mysqli->query($query)) {  
                
                while ($row = $result->fetch_assoc()) {
                    
                    $hlname = $row["name"];
                    $hlphone = $row["phone"];
                    $hldaysandtime = $row["dayandtimeactive"];

                    echo '<div class="hcontent">
                            <h4 class="hname">'; echo $hlname;echo'</h4>
                            <p class="hphone"> <span>Phone: </span>'; echo $hlphone;echo'</p>
                            <p class="hdaysandtime">'; echo $hldaysandtime;echo'</p>
                        </div>
                        <hr class="hr">'; 
            
                }  
                $result->free();    
            }    
        ?>              
    </div>   

    <div id="footer" style="position: relative; z-index: 9;">
        <img src="images/footer.png" class="img-fluid" id="footerbanner" alt="...">  
    </div>

    <div class="footer-basic" style="position: relative; z-index: 9;">
        <footer>
            <div class="footer-links">
                <div><a href="for-professionals.php">For Therapists</a></div>
                <div><a href="interns.html">For Volunteers</a></div>
                <div><a href="content_creators.html">For Content Creators</a></div>
            </div>
            <div class="socials">
                <div class="socials-text">Socials</div>
                <div class="socials-icons">
                    <a href="https://www.instagram.com/tryalign/" class="social-icons" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/the-aasha-initiative/" class="social-icons" class="social-lin" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="copyright">ALIGN © 2021</div>
        </footer>
    </div>
                     
</body>
</html>