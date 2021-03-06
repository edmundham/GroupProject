<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign-Up</title>
    <link rel="icon" href="../images/titleimg2.ico"/>
    <style></style>
    <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <link rel="stylesheet" href="../styles/base.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
    <script src="../styles/script.js"></script>
</head>
<body>
    <nav>
        <div id="navwrapper">
            <ul>
                <li>
                    <!-- Button is seperate from the div -->
                    <div class="dropdown"><a href="../products/mouse.html" class="dropdown">Mice</a>
                        <div class="dropdown_content">
                            <p><a href="../products/mouse.html#pricebracketlow">$</a></p>
                            <p><a href="../products/mouse.html#pricebracketmid">$$</a></p>
                            <p><a href="../products/mouse.html#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/keyboard.html" class="dropdown">Keyboard</a>
                        <div class="dropdown_content">
                            <p><a href="../products/keyboard.html#pricebracketlow">$</a></p>
                            <p><a href="../products/keyboard.html#pricebracketmid">$$</a></p>
                            <p><a href="../products/keyboard.html#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/monitor.html" class="dropdown">Monitor</a>
                        <div class="dropdown_content">
                            <p><a href="../products/monitor.html#pricebracketlow">$</a></p>
                            <p><a href="../products/monitor.html#pricebracketmid">$$</a></p>
                            <p><a href="../products/monitor.html#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="../index/index.html"><img id="imgid" src="../images/logonew.PNG" alt="Logo"></a>
                </li>
                <li>
                    <div class="dropdown"><a href="info.html" class="dropdown">About Us</a></div>
                </li>
                <li>
                    <div class="dropdown"><a href="info.html#contactheader" class="dropdown">Contact</a></div>
                </li>
                <li>
                    <div class="dropdown"><a href="php/forum.php" class="dropdown">Forum</a></div>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- main is not supported in IE 11; switching back to main is possible -->
    <main id="signupmain">
        <!-- center image is random placeholder -->
        <div id="centerlogo"> 
            <a href="#"><img id="largeLogo" src ="../images/logonew.PNG" alt="Logo"/></a>
        </div>
        <!-- Sign Up Table -->
        <form id="signupform" name="loginForm" method="post" action="http://webdevfoundations.net/scripts/formdemo.asp"
        onsubmit="return formValidate()">
            <table id="signuptable">
                <tbody>
                    <tr>
                        <td><label for="mail">Email:</label></td>      
                        <td><input type="text" placeholder="abc@example.abc" onblur="warnEmailType()" id="mail" name="Email" class="formfield"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" id="errEmail">Please enter a valid email</td>
                    </tr>
                    <tr> 
                        <td><label for="login">Username:</label></td>   
                        <td><input type="text" id="login" name="Username" onblur="warnUsername()" class="formfield"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"  id="errUsername">Please enter a valid username</td>
                    </tr>
                    <tr> 
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" placeholder="********"onblur="warnPassword()" id="password" name="Password" class="formfield"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" id="errPassword">Password must be between 8 and 16 characters in length</td>
                    </tr>
                    <tr> 
                        <!-- to do : confirm password == password2 -->
                        <td><label for="password2">Confirm Password:</label></td>   
                        <td><input type="password" placeholder="********" onblur="warnConfirm()" id="password2" name="Password" class="formfield"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"  id="errConfirm">Does not match password</td>
                    </tr>
                    <tr id="submitbutton"> 
                        <!-- Currently the button cannot be centered because it is in a table-->
                        <td></td>
                        <td><input id="registerbutton" name="Submit" value="Register" type="submit"/></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
   <footer>
        <div class="footerconstraint">
            <div class="bottomleftcolumn">
                <ul>
                    <li><a href="../index/index.html">Home</a></li>
                    <li><a href="info.html#contactheader">Contact</a></li>
                    <li><a href="info.html">About Us</a></li>
                </ul>
            </div>
            <div class="middleleftcolumn">
                <ul>
                    <li><a href="../products/mouse.html">Mice</a></li>
                    <li><a href="../products/keyboard.html">Keyboard</a></li>
                    <li><a href="../products/monitor.html">Monitor</a></li>
                </ul>
            </div>
            <div class="middlerightcolumn">
                <ul>
                    <li><a href="php/forum.php">Forum</a></li>
                </ul>
            </div>
            <div class="bottomrightcolumn">
                <ul>
                    <li><a href="signup.html">Sign-Up</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                </ul>
            </div>
            <p>&copy; Copyright 2017 | lol </p>
        </div>
   </footer>
</body>
</html>