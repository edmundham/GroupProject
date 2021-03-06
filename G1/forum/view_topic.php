<!DOCTYPE html>
<html lang="en">
<head>
    <title>MKM Reviews</title>
    <link rel="icon" href="../images/titleimg2.ico"/>
    <style></style>
    <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <link rel="stylesheet" href="../styles/base.css" />
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
    <nav>
        <div id="navwrapper">
            <ul>
                <li>
                    <!-- Button is seperate from the div -->
                    <div class="dropdown"><a href="../products/mouse.php" class="dropdown">Mouse</a>
                        <div class="dropdown_content">
                            <p><a href="../products/mouse.php#pricebracketlow">$</a></p>
                            <p><a href="../products/mouse.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/mouse.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/keyboard.php" class="dropdown">Keyboard</a>
                        <div class="dropdown_content">
                            <p><a href="../products/keyboard.php#pricebracketlow">$</a></p>
                            <p><a href="../products/keyboard.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/keyboard.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/monitor.php" class="dropdown">Monitor</a>
                        <div class="dropdown_content">
                            <p><a href="../products/monitor.php#pricebracketlow">$</a></p>
                            <p><a href="../products/monitor.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/monitor.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="../index/index.php"><img id="imgid" src="../images/logonew.PNG" alt="Logo"></a>
                </li>
                <li><div class="dropdown"><a href="../information/info.php" class="dropdown">About Us</a></div></li>
                <li><div class="dropdown"><a href="../information/info.php#contactheader" class="dropdown">Contact Us</a></div></li>
                <li><div class="dropdown"><a href="./forum.php" class="dropdown">Forum</a></div></li>
            </ul>
        </div>
    </nav>
        
    <?php
        include '../php/functions.php';
        require_once('../php/config.php');
        session_start();

        if (isLoggedIn()) {
            echo '
            <div class="indexSignUp_LogIn">
                <span>Hi '.$_SESSION['SESS_FIRST_NAME'].
                '</span>
                <a href="../index/logout.php"><span>Log Out</span></a>
            </div>';
        } else {
            echo '
                <div class="indexSignUp_LogIn">
                    <a href="../index/register_form.php"><span>Sign Up</span></a>
                    <a href="../index/login_form.php"><span>Log In</span></a>
                </div>';
        }
    ?>
    <!-- Main Page Content -->
    <main id="signupmain">
    <!-- center image is random placeholder -->
        <div id="centerlogo"> 
            <a href="#"><img id="largeLogo" src ="../images/logonew.PNG" alt="Logo"/></a>
        </div>

        <?php
    
            // Connect to server and select database.
            ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
            ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
            $tbl_name="topic"; // Table name

            // get value of id that sent from address bar
            $id=$_GET['id'];

            $sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id where id='$id'";
            $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

            $rows=mysqli_fetch_array($result);
        ?>

        <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
                        <tr>
                            <td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
                        </tr>
                        <tr>
                            <td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="#F8F7F1"><strong>By :</strong> &nbsp;<?php echo $rows['firstname']; ?><strong></td>
                        </tr>
                        <tr>
                            <td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br>
        
        <?php
        
            $tbl_name2="response"; // Switch to table "response"

            $sql2="SELECT * FROM $tbl_name2 JOIN members ON members.member_id = response.member_id where topic_id='$id'";
            $result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

            while($rows=mysqli_fetch_array($result2)) {
        
        ?>

        <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                            <td bgcolor="#F8F7F1"><strong>ID</strong></td>
                            <td bgcolor="#F8F7F1">:</td>
                            <td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
                        </tr>
                        <tr>
                            <td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
                            <td width="5%" bgcolor="#F8F7F1">:</td>
                            <td width="77%" bgcolor="#F8F7F1"><?php echo $rows['firstname']; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="#F8F7F1"><strong>Response</strong></td>
                            <td bgcolor="#F8F7F1">:</td>
                            <td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
                            <td bgcolor="#F8F7F1">:</td>
                            <td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br>

        <?php
        
            }
            if (isLoggedIn()) {
            ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
            }
        ?>

        <br>
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <form name="form1" method="post" action="add_response.php">
                    <td>
                        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                            <tr>
                                <td valign="top"><strong>Response</strong></td>
                                <td valign="top">:</td>
                                <td><textarea name="response" cols="45" rows="3" id="answer" required></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
                                <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
                            </tr>
                        </table>
                    </td>
                </form>
            </tr>
        </table>
    </main>
    <!-- Footer -->
    <footer>
        <div class="footerconstraint">
            <div class="bottomleftcolumn">
                <ul>
                    <li><a href="../index/index.php">Home</a></li>
                    <li><a href="../information/info.php#contactheader">Contact</a></li>
                    <li><a href="../information/info.php">About Us</a></li>
                </ul>
            </div>
            <div class="middleleftcolumn">
                <ul>
                    <li><a href="../products/mouse.php">Mice</a></li>
                    <li><a href="../products/keyboard.php">Keyboard</a></li>
                    <li><a href="../products/monitor.php">Monitor</a></li>
                </ul>
            </div>
            <div class="middlerightcolumn">
                <ul>
                    <li><a href="./forum.php">Forum</a></li>
                </ul>
            </div>
            <div class="bottomrightcolumn">
                <ul>
                    <li>
                        <?php
                            if (!isLoggedIn()) {
                                echo '<a href="../index/register_form.php">Sign-Up</a>';
                            } else {
                                echo '<a href="../index/logout.php">Log-Out</a>';
                            }
                        ?>
                    </li>
                    <li><a href="../information/sitemap.php">Sitemap</a></li>
                </ul>
            </div>
            <p>&copy; Copyright 2017 | lol </p>
        </div>
    </footer>
</body>
</html>