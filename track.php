<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Track</title>
    <meta title="Irtiqa Tech Guide and Online Assistance">
    <link rel="stylesheet" href="trackStyle.css">
    <link  rel="shortcut icon" href="IRTIQA2.png">

    <style>
        body{
            background-color: #66CCCC;
        }   
    </style>
</head>
<body>
<?php

    $db = mysqli_connect("localhost","root","","irtiqa");

    $output="";
    if (mysqli_connect_errno()){
        printf("Connect failed: %s <br/>",mysqli_connect_errno());
        exit();
    }
    if(isset($_POST["search"])){
        $searchq = $_POST["search"];
        $query = mysqli_query($db,"SELECT dbirtiqa.email,dbirtiqa.name,dbirtiqa.status,dbirtiqa.explanition FROM dbirtiqa WHERE dbirtiqa.email LIKE '%$searchq%'");
            while($row = mysqli_fetch_assoc($query)){
                $email = $row["email"];
                $name = $row["name"];
                $status = $row["status"];
                $explanition = $row["explanition"];
            }
        }
    ?>
    <a href="feedback.html"><button class="fab">FeedBack</button></a>
    <div id="size">
            <div class="n1">
                <a><img style="block-size: 30pt;display:inline-flexbox;background-color: aliceblue;margin-bottom: -10px" src="IRTIQA.png"></a>
                <a href="index.html" id="c1">Home</a>
                <a href="services.html" id="c1">Services</a>
                <a href="search.html" id="c1">Search</a>
                <a href="track.html" id="page-head">Track page</a>
                <a href="game.html" id="c1">Fun page</a>
                <a href="about.html" id="c1">About us</a>
                <a href="contact.html" id="c1">Contact us</a>
            </div>
            <div>
                <img src="IRTIQA.png" style="margin-top: 100pt;"/>
                <p style="font-size: 2em; color: white;display: inline-block; margin-top: 10pt;margin-left: -110pt;">Irtiqa Tech Guide and Online Assistance</p>
            </br>
            <div class="s1">
                <pre style="border-style: double;margin-left: 2em;margin-right: .9em; margin-top: 25em; color: aliceblue;"><h1 style="font-size: 10em;color:aliceblue; border-style: double; margin-right: 1.2em; margin-left: .9em; margin-bottom: 0.1em;">Track & Status</h1>
                <h3 style="text-align: center;">Operator System,Software,Network and everything in between.</h3>
                </pre>
            </div>
            <div class="n3">
                </br>
                </br>
                <h3 style=" margin-left: -40pt;text-align: center;color: white;">Information & status about your Email to us!.</h3>
                <table border="border" style=" margin-left: 7.5em;text-align: center;font-size: 2em; border-width: 1em; column-span: all;">
                    <tr style="color: white;">
                        <th> Email</th>
                        <th> Name</th>
                        <th> Status</th>
                        <th> Explanition</th>
                    </tr>
                    <tr>
                        <td><?php print ("$email")?></td>
                        <td> <?php print ("$name")?></td>
                        <td> <?php print ("$status")?></td>
                        <td><?php print ("$explanition")?></td>
                    </tr>

                </table>
            </br>
            <form action="index.html">
                <input type="submit" value="FINISH" style="margin-left: 10pt;margin-bottom: 10pt; font-size: 20pt;color: aliceblue;background-color:cadetblue; outline-style: double;"/>
                </form>
            </div>
            
            
            <div class="footer">
                    <div class="n1" style="margin-top: 15pt;margin-right: 40pt;"> 
                        <a><img style="block-size: 30pt;display:inline-flexbox;" src="IRTIQA.png"></a>
                        <a href="index.html" id="c1">Home</a>
                        <a href="services.html" id="c1">Services</a>
                        <a href="search.html" id="c1">Search</a>
                        <a href="track.html" id="page-head">Track page</a>
                        <a href="game.html" id="c1">Fun page</a>
                        <a href="about.html" id="c1">About us</a>
                        <a href="contact.html" id="c1">Contact us</a></div>
                    </br>
                    <pre style="text-align: center; font-size: 20pt;color: aliceblue;margin-top: 80pt;">   <a href="http://facebook.com"><img style="block-size:50pt;" src="FB.jpg"/></a> <a href="http://twitter.com"><img style="block-size:50pt;" src="t.jpg"/></a> <a href="http://Whatsapp.com"><img style="block-size:50pt;" src="W.jpg"/></a>
                    </pre>
                    <p style="display: inline-block;"><img style="block-size: 30pt;" src="IRTIQA.png"/></p>
                    <p style="display: inline-block;">Irtiqa Tech Guide and Online Assistance ©2020</p>
            </div>
        </div>
</body>
</html>