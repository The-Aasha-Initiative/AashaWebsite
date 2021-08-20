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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
    <link rel="stylesheet" href="css/main.css"> 
    <link href="https://allfont.net/allfont.css?fonts=league-spartan" rel="stylesheet" type="text/css" />
</head>
<body>
    <img id="blog-banner" src="images/For Therapists.png">

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top navbar-border nav-shadow">
            
        <a class="navbar-brand nb" href="index.html">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right flex-grow-1 mr-right" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5 flex-nowrap">
                <a class="nav-link border-r" href="therapists.php">Find Therapists</a>
                <a class="nav-link me-5 mr-right" href="for-professionals.html">For Professionals</a>
                
            </div>
        </div>

    </nav>

    <div class="t-header"> 
        <h2 class="mt-5">You have the community's back, We have yours.</h2>
        <h5 class="mt-3 mb-5">Curing the mind is tough enough, to be a techie, a marketing expert, data analyst and market strategist with that is, easier said than done.<br> Let us help you out with your online presence and all the boring and complex marketing related jargon while you focus on creating healthy minds <br> Reach out to us to get your free website and get listed, publish your writings and cases and more. Yes, its Free.<br> TO BE EDITED AND SIMPLIFIED FURTHER</h5>
    </div>

    <div class="fp-form">
        <div class="fp-form-heading">Provide your information</div>
        <form action="" method="post" ng-app="myApp" ng-controller="validateCtrl" 
        name="myForm" novalidate>
            <label for="name">
                <span class="label">
                    Name<span class="required">*</span>
                </span>
                <input type="text" class="input-field" name="name" placeholder="Enter your name" ng-model="name" required/>
                <span style="color:red" ng-show="myForm.name.$dirty && myForm.name.$invalid">
                    <span class="validation_error" ng-show="myForm.name.$error.required">Name is required.</span>
                </span>
            </label>

            <label for="professional_title">
                <span class="label">Professional Title<span class="required">*</span></span>
                
                <select name="professional_title" class="select-field">
                    <option selected disabled>Choose your professional title</option>
                    <option value="Psychiatrist">Psychiatrist</option>
                    <option value="Counsellor">Counsellor</option>
                    <option value="Psychologist">Psychologist</option>
                </select>
            </label>

            <label for="qualifications">
                <span class="label">
                    Qualifications<span class="required">*</span>
                </span>    
                    <input type="text" class="input-field" name="qualifications" placeholder="Enter your qualification" ng-model="qualifications" required/>
                    <span style="color:red" ng-show="myForm.qualifications.$dirty && myForm.qualifications.$invalid">
                        <span class="validation_error" ng-show="myForm.qualifications.$error.required">Qualifications are required.</span>
                    </span>
            </label>

            <p class="mandatory_text">EMAIL ID is mandatory. Phone number and Instagram handle are optional.</p>

            <label for="email">
                <span class="label">
                    Email ID<span class="required">*</span>
                </span>
                <input type="text" class="input-field" name="email" placeholder="Enter your email ID" ng-model="email"  ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/"required/>
                    <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                        <span class="validation_error" ng-show="myForm.email.$error.required">Email ID is required.</span>
                        <span class="validation_error" ng-show="myForm.email.$error.pattern">Invalid email ID</span>
                    </span>    
            </label>
            
            <label for="phone">
                <span class="label">
                    Phone
                </span>
                
                <input type="number" class="tel-number-field" name="phone" placeholder="Enter your number" ng-model="phone"  ng-pattern="/^[7-9][0-9]{9}$/"/>
                <span style="color:red" ng-show="myForm.phone.$dirty && myForm.phone.$invalid">
                    <span class="validation_error" ng-show="myForm.phone.$error.pattern">Invalid phone number</span>
            </label>
            
            <label for="instagramHandle">
                <span class="label">
                    Instagram Handle
                </span>
                    <input type="text" class="input-field" name="instagramHandle" placeholder="Enter your Instagram Handle" ng-model="instagramHandle" ng-pattern="/(http://)?instagram.com/[a-z\d-_]{1,255}/i">
                    <span style="color:red" ng-show="myForm.instagramHandle.$dirty && myForm.instagramHandle.$invalid">
                        <span class="validation_error" ng-show="myForm.instagramHandle.$error.pattern">Invalid Instagram Handle</span>
                    </span>
            </label>
            <?php
            
                $username = "root";
                $password = "";
                $database = "align";
                $mysqli = new mysqli("localhost", $username, $password, $database);
            
                if (isset($_POST['name'], $_POST['professional_title'], $_POST['qualifications'], $_POST['email'], $_POST['phone'], $_POST['instagramHandle'])) {
                
                    // Taking all 5 values from the form data(input)                    
                    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
                    $professional = mysqli_real_escape_string($mysqli, $_POST['professional_title']);
                    $qualifications = mysqli_real_escape_string($mysqli, $_POST['qualifications']);
                    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
                    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
                    $instagram_handle = mysqli_real_escape_string($mysqli, $_POST['instagramHandle']);
                   
                    $sql = "INSERT INTO therapists_contact_details (name, professional_title, qualifications, email, phone, instagramHandle)  VALUES ('$name',  
                        '$professional', '$qualifications', '$email', $phone, '$instagram_handle')";
                    
                    if(mysqli_query($mysqli, $sql)){
                        echo "<h3>data stored in a database successfully." 
                            . " Please browse your localhost php my admin" 
                            . " to view the updated data</h3>"; 
                    } else{
                        echo "ERROR: Hush! Sorry $sql. " 
                            . mysqli_error($mysqli);
                    }
                    
                    // Close connection
                    mysqli_close($mysqli);
                }
        ?>
            <div class="fp-buttons">
                <input class="btn main-btn btn-md" type="submit" value="Submit" />  
                <button class="btn main-btn btn-md" type="reset" value="Reset"> Reset </button> 
            </div>
        </form>
        <script>
            var app = angular.module('myApp', []);
            app.controller('validateCtrl', function($scope) {
                $scope.user = '';
                $scope.phone = '';
                $scope.instagramURL = '';
            });
            </script>
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