
<?php


if(isset($_POST['get_option']))
{   session_start();
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
    
    $username = "root";
    $password = "";
    $database = "aasha";
    
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
 
    $state = $_POST['get_option'];
    $loc = $_SESSION['location'];

    $find="SELECT * FROM `therapists` AS `T` inner join `personal details` as `P` ON `T`.`Therapist ID` = `P`.`Therapist ID` WHERE(`Location` LIKE '%".$loc."%' AND  `Designation` LIKE '%".$state."%') OR (`Location` LIKE '%".$loc."%' AND  `Identifies As` LIKE '%".$state."%') OR (`Location` LIKE '%".$loc."%' AND  `Client Group` LIKE '%".$state."%') OR (`Location` LIKE '%".$loc."%' AND  `Languages` LIKE '%".$state."%') OR (`Location` LIKE '%".$loc."%' AND  `Issues Treated` LIKE '%".$state."%') OR (`Location` LIKE '%".$loc."%' AND  `Designation` LIKE '%".$state."%' AND  `Identifies As` LIKE '%".$state."%')";
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
                <div class="name-desig">
                    <p class="therapist-name">';echo $field2name;echo'</p>
                    <p>';echo $field3name;echo'</p>
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
        echo "<script type='text/javaScript'>
              $('.hiddenphone').hide();//hide the initial phone number

              $('.showphone').on('click', function (event) {
                event.stopPropagation();
        
                if ($(this).find('.hiddenphone').is(':hidden')) {
                    // change text
                    $(this).find('.hiddenphone').show();
                    $(this).find('.clickshow').hide();
                }
              }); 
              </script>";
    /*freeresultset*/
    $result->free();
    }
}

?>
