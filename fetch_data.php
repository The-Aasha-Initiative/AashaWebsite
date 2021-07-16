<?php
session_start();
if(isset($_POST['get_option']))
{
    //session_start();
    $username = "root";
    $password = "";
    $database = "aasha";
    
    //$location = $_POST['ls'];
    $mysqli = new mysqli("localhost", $username, $password, $database);
 
 $state = $_POST['get_option'];
 $loc = $_SESSION['location'];

 $find="SELECT * FROM `therapists` AS `T` inner join `personal details` as `P` ON `T`.`Therapist ID` = `P`.`Therapist ID` WHERE `Location` LIKE '%".$loc."%' and  `Designation` LIKE '%".$state."%'";
 if ($result = $mysqli->query($find)) {
                    
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

       // if($myVar = $field3name)
        //{
                echo '<div id="square-box">
                        <div id="intro"><p>';echo $field2name;echo'</p><p>';echo $field3name;echo'</p><p>';echo $field10name;echo'</p><p>';echo $field8name;echo'</p><p></div>
                        <div id="links"><p>';echo $field13name;echo $field12name;echo $field11name;echo'</p><p class="showphone"><span class="clickshow" style="display: inline;"><b>Show Phone Number</b></span>
                        <span class="hiddenphone" style="display: none;">
                                    <span>';echo $field9name;echo'</span>
                                    
                        </span></p></div>
                    </div>';//;echo $field9name;echo
        //}           
    }

    /*freeresultset*/
    $result->free();
    }
}

?>