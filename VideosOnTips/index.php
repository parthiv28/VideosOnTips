<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE HTML>

<head>
    <title>HOME PAGE</title>
    <link rel="shortcut icon" href="images/title.PNG">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    
</head>

<body>
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" title="logo" /></a>
            </div>
            <div class="top-menu">
                <div class="top-nav">
                    <ul>
                        <li><a href="categories.php">RECENT UPLOADS</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form>
                        <input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value=" " />
                    

                    </form>
                </div>
                
                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
            <br>
            <div class="user">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to VideosOnTips &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="btn"><a href="logout.php">LOGOUT</a></div></div>
            

        </div>
    </div>
    <div class="clear"> </div>
    <div class="main-content">
        <div class="wrap">
            <div class="left-sidebar">
                <div class="sidebar-boxs">

                    <div class="clear"> </div>
                    <div class="type-videos">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="JAVA.html">JAVA.</a></li>
                            <li><a href="DE.html">Digital Electronics.</a></li>
                            <li><a href="COMI.html">Computer Organization & Microprocessor Interfacing.</a></li>
                            <li><a href="snt.html">Statical & Numerical Techniques.</a></li>
                            <li><a href="DSA1.html">DATA Stucture & Algorithm</a></li>
                            <li><a href="DC.html">Data Communication</a></li>
                            <li><a href="DBMS.html">DataBase Management System</a></li>
                            <li><a href="CN.html">Computer Networks</a></li>
                            <li><a href="Avdwebtech.html">Advanced Web Technologies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <div class="right-content-heading">
                    <div class="right-content-heading-left">
                        <h3>Latest Collections of videos</h3>
                    </div>
                    <div class="right-content-heading-right">
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a class="facebook" href="" target="_blank"> </a>
                                </li>
                                <li>
                                    <a class="twitter" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="googleplus" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="pinterest" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="dribbble" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="vimeo" href="" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="content-grids">
                    <div class="content-grid">
                        <a href="java_1.html"><img src="images/Chapter1.png" title="Recent video" /></a>
                        <h3>FUNDAMENTAL OF OOP</h3>
                        <a class="button" href="java_1.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="java_2.html"><img src="images/Chapter2.png" title=" Recent video" /></a>
                        <h3>CLASS FUNDAMENTALS</h3>
                        <a class="button" href="java_2.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="java_3.html"><img src="images/Chapter3.png" title=" Recent video" /></a>
                        <h3>ARRAY & STRING HANDLING</h3>
                        <a class="button" href="java_3.html">Watch now</a>
                    </div>
                    <div class="content-grid ">
                        <a href="java_4.html"><img src="images/Chapter4.png" title=" Recent video" /></a>
                        <h3>INHERITANCE, INTERFACES & <br>PACKAGES</h3>
                        <a class="button" href="java_4.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="snt_ch1.html"><img src="images/Chapter1.png" title=" Recent video" /></a>
                        <h3>BASIC STATISTICS AND INTRODUCTION TO PROBABILITY</h3>

                        <a class="button" href="snt_ch1.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="snt_ch2.html"><img src="images/Chapter2.png" title=" Recent video" /></a>
                        <h3>RANDOM VARIABLES AND PROBABILITY DISTRIBUTIONS</h3>

                        <a class="button" href="snt_ch2.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="snt_ch3.html"><img src="images/Chapter3.png" title=" Recent video" /></a>
                        <h3>REGRESSION AND CORRELATION</h3>

                        <a class="button" href="snt_ch3.html">Watch now</a>
                    </div>
                    <div class="content-grid ">
                        <a href="snt_ch4.html"><img src="images/Chapter4.png" title=" Recent video" /></a>
                        <h3>INTERPOLATION, CURVE FITTING</h3>

                        <a class="button" href="snt_ch4.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="de_1.html"><img src="images/Chapter1.png" title=" Recent video" /></a>
                        <h3>NUMBER SYSTEMS</h3>
                        <a class="button" href="de_1.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="de_2.html"><img src="images/Chapter2.png" title=" Recent video" /></a>
                        <h3>BOOLEAN ALGEBRA AND LOGIC GATES</h3>

                        <a class="button" href="de_2.html">Watch now</a>
                    </div>
                    <div class="content-grid">
                        <a href="comi_1.html"><img src="images/Chapter1.png" title=" Recent video" /></a>
                        <h3>INTRODUCTION TO CA</h3>
                        <a class="button" href="comi_1.html">Watch now</a>
                    </div>
                    <div class="content-grid last-grid">
                        <a href="comi_2.html"><img src="images/Chapter2.png" title=" Recent video" /></a>
                        <h3>INSTRUCTION SET ARCHITECTURE</h3>

                        <a class="button" href="comi_2.html">Watch now</a>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
    </div>
    <div class="clear"> </div>
</body>

</html>