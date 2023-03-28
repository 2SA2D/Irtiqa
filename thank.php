<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Done!</title>
    <meta title="Irtiqa Tech Guide and Online Assistance">
    <link rel="stylesheet" href="thankStyle.css">
    <link  rel="shortcut icon" href="IRTIQA2.png">
    <style>
        h3{
            font-size: 16pt;
        }
    </style>
</head>
<body>
    <?php
    $db = mysqli_connect("localhost","root","","irtiqa");
    if (mysqli_connect_errno()){
        printf("Connect failed: %s <br/>",mysqli_connect_errno());
        exit();
    }
     $name = $_POST["theName"];
     $subject = $_POST["theSubject"];
     $email = $_POST["theEmail"];
     $yourmsg = $_POST["yourmsg"];
     
     session_start();
     if (!IsSet($_SESSION["page_number"])){
         $_SESSION["page_number"] = 1;
     }
     $page_num = $_SESSION["page_number"];
     $_SESSION["page_number"]++;
     $result = mysqli_query($db,"INSERT into dbirtiqa values('$page_num','$email','$name','$subject','$yourmsg','','')");
     if ($name == ""){
        $name = null;
    }
    if($subject == ""){
       $subject = null;
    }
    if($email == ""){
       $email = null;
    }
    if($yourmsg == ""){
        $yourmsg = null;
     }
     ?>
    <div id="size">

            <div class="n1">
                <a href="index.html" id="c1">Home</a>
                <a href="services.html" id="c1">Services</a>
                <a href="search.html" id="c1">Search</a>
                <a href="track.html" id="c1">Track page</a>
                <a href="game.html" id="c1">Fun page</a>
                <a href="about.html" id="c1">About us</a>
                <a href="contact.html" id="c1">Contact us</a>
            </div>
            <div class="content">
                <img src="IRTIQA.png" style="margin-top: 100pt;"/>
                <p style="font-size: 2em; color: white;display: inline-block; margin-top: 10pt;margin-left: -110pt;">Irtiqa Tech Guide and Online Assistance</p>
            </div>

            </br>

            <div class="s1">
                <pre style="border-style: double;margin-left: 7em;margin-right: 4.9em; margin-top: 25em; color: aliceblue;"><h1 style="font-size: 10em;color:aliceblue; border-style: double; margin-right: 0.8em; margin-left: 0.9em; margin-bottom: 0.1em;">Done & thanks</h1>
                <h3 style="text-align: center;">Operator System,Software,Network and everything in between.</h3>
                </pre>
            </div>
            
            <div class="n3">
                <img src="IRTIQA.png" style="margin-top: 30pt;"/>
                <h3 style=" margin-left: -40pt;text-align: center;">If you made a transaction or sent an email. Our employee will process it as soon as possible.</h3>
                <h3 style=" margin-left: -40pt;text-align: center;">You can see your request status in the <a href="track.html">Track page<a>.</h3>
                    <table border="border" style=" margin-left: 7.5em;text-align: center;font-size: 2em; border-width: 1em; column-span: all;">
                        <tr style="color: white;">
                            <th> ID</th>
                            <th> Email</th>
                            <th> Name</th>
                            <th> Subject</th>
                            <th> Massege</th>
                        </tr>
                        <tr style="color: white;">
                            <td><?php print ("$page_num")?> </td>
                            <td><?php print ("$email")?> </td>
                            <td><?php print ("$name")?></td>
                            <td><?php print ("$subject")?></td>
                            <td><?php print ("$yourmsg")?></td>
                        </tr>
    
                    </table>   
                <form action="index.html">
                    <input type="submit" value="FINISH" style="margin-left: 10pt; margin-bottom:10pt; margin-top:10pt; font-size: 20pt;color: aliceblue;background-color:cadetblue;"/>
                    </form>
            </div>
            
            
            <div class="footer">
                    <div class="n1" style="margin-top: 15pt;margin-right: -10pt;"> 
                        <a href="index.html" id="c1">Home</a>
                        <a href="services.html" id="c1">Services</a>
                        <a href="search.html" id="c1">Search</a>
                        <a href="track.html" id="c1">Track page</a>
                        <a href="game.html" id="c1">Fun page</a>
                        <a href="about.html" id="c1">About us</a>
                        <a href="contact.html" id="c1">Contact us</a>
                    </div>

                    </br>
                    
                    <pre style="text-align: center; font-size: 20pt;color: aliceblue;margin-top: 80pt;">   <a href="http://facebook.com"><img style="block-size:50pt;" src="FB.jpg"/></a> <a href="http://twitter.com"><img style="block-size:50pt;" src="t.jpg"/></a> <a href="http://Whatsapp.com"><img style="block-size:50pt;" src="W.jpg"/></a>
                    </pre>
                    <p style="display: inline-block;"><img style="block-size: 30pt;" src="IRTIQA.png"/></p>
                    <p style="display: inline-block;">Irtiqa Tech Guide and Online Assistance ©2020</p>
            </div>
        </div>
</body>
</html>