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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".hiddenphone").hide();//hide the initial phone number

        $(".showphone").on("click", function (event) {
            event.stopPropagation();
        
            if ($(this).find(".hiddenphone").is(":hidden")) {
                // change text
                $(this).find(".hiddenphone").show();
                $(this).find(".clickshow").hide();
            }
        }); 
    </script>
</head>
<body>

<?php

   session_start();
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
    
    $username = "root";
    $password = "";
    $database = "align";
    
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
 
    $state1 = $_POST['get_option1'];
    $state2 = $_POST['get_option2'];
    $state3 = $_POST['get_option3'];
    $state4 = $_POST['get_option4'];
    $state5 = $_POST['get_option5'];
    $loc = $_SESSION['location'];

    $find="SELECT * FROM `therapists` AS `T` inner join `personal details` as `P` ON `T`.`Therapist ID` = `P`.`Therapist ID` WHERE(`Location` LIKE '%".$loc."%' AND  `Designation` LIKE '%".$state1."%' AND  `Identifies As` LIKE '%".$state2."%' AND  `Client Group` LIKE '%".$state3."%' AND  `Languages` LIKE '%".$state5."%'  AND  `Issues Treated` LIKE '%".$state4."%')";
    if ($result = $mysqli->query($find)) {
                    
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["Therapist ID"];
            $field2name = $row["Name"];
            $field3name = $row["Designation"];
            $field4name = $row["Identifies As"];
            $field5name = $row["Client Group"];
            $field6name = $row["Languages"];
            $field7name = $row["Issues Treated"];
            $field8name = $row["Location"];
            $field9name = $row["Phone Number"];
            $field10name = $row["Intro"];
            $field11name = $row["Instagram Link"];
            $field12name = $row["Linkedin Link"];
            $field13name = $row["Aasha URL"];
            
            echo '<div id="profile-card">
            <div id="info">
                <div class="name-desig-img">
                    <div class="name-desig">          
                        <a class="therapist-name" href="http://localhost/aasha/profile.php/'. $field2name .'">';echo $field2name;echo'</a>
                        <p>';echo $field3name;echo'</p>
                    </div>
                    <div class="p-img">
                        <img class="prof-img" src="';echo $field14name;echo'">
                    </div>  
                </div>
                <div class="intro">
                    <p>';echo $field10name;echo'</p>
                </div>
                <div class="location">  
                    <p>';echo $field8name;echo'</p><p>
                </div>
            </div>    
            <div id="links">
                <div id="t-socials">
                    <div class="tp"><a class="t-links" href="';echo $field13name;echo'">';echo' Profile </a></div>
                    <div class="tli">|</div>
                    <div class="tli"><a class="t-links" href="';echo $field12name;echo '"><i class="fab fa-linkedin">';echo'</i></a> </div>  
                    <div class="tli">|</div>
                    <div class="tli"><a class="t-links" href="';echo $field11name;echo '"><i class="fab fa-instagram-square">';echo'</i></a></div>
                </div>  
                <p class="showphone">
                    <span class="clickshow" style="display: inline;"><b>Show Phone Number</b></span>
                    <span class="hiddenphone" style="display: none;">
                        <span>';echo $field9name;echo'</span>
                    </span>
                </p>
            </div>
            </div>';       
        }
        
    /*freeresultset*/
    $result->free();
    }

?>
</body>
</html>