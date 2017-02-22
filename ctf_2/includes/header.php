<?php

if(isset($_SESSION['userid']))
    if(isset($_REQUEST['disablerightclick']))
        if(!$_REQUEST['disablerightclick'])
            enablerightclick($con);
    function isrightclickdisabled($con){
        $id = $_SESSION['userid'];
        $resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
        if($resultrow['rightclickdisabled'])
            return true;
        else
            return false;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CTF! is a collection of brain-storming questions. Hack your brain till the very depth of it and get the job done." />
        

    <title>Online Treasure Hunt - Capture the flag!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/home_styling.css" rel="stylesheet">

<?php
        if(!isset($_SESSION['userid']))
                //echo '<script type="text/javascript" src="main-js.js"></script>';
            ;
        else if(isrightclickdisabled($con))
            echo '<script type="text/javascript" src="main_js.js"></script>';
        else
            echo '<script type="text/javascript" src="main_js1.js"></script>';
        echo '<script type="text/javascript" src="main-js.js"></script>';
        ?>

</head>

<body style="padding:0px; margin:0px;">

    <div class="home_header" style="padding:0px; margin-top:-25px;">
        <div class="sponser" style="position: absolute; left: 15px;">
        <img class="sponser" style="margin-top:20px; width:25%; height: 10%;" src="includes/apptus_logo.png"></img>
        <h3 style="position:absolute; left:25px; color:#fff;">Coding Event Sponser</h3>
      </div>
        <h1 style="margin-top:40px; margin-left:500px; position:absolute; color:#FFFFFF;">Online Treassure Hunt<br><small style="margin-left:80px;">Capture the Flag!</small></h1> 
        <div id="links">
            
            <?php 
            if(!isset($_SESSION['userid']))
                echo ' <div id="login" onclick="logmein()" >
               <p>
               <p style="color: #fff;">The Contest will begin from 11:00 pm on 17 Feb 2017<p>
                 <!--<a href="#" class="btn btn-primary" >Login</a>-->
                </p> 
           </div></br></br></br>
            <div id="register">
               <p>
                <a href="register.php" target="_blank" class="btn btn-primary">Register</a>
                </p> 
           </div>
          ';
            else
            {
                $id = $_SESSION['userid'];
                $resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
                echo '<div id="login">
               <p style="color:#FFF;">
                  Hi '.$resultrow['username'].'!
                 <a href="logout.php" class="btn btn-primary">Logout</a>
                </p> 
           </div>';
            }
            ?>
          

        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
 

</body>

</html>
