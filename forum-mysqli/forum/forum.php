<!DOCTYPE html>
<html lang="en">
<head>
   <title>Forum</title>
   <link rel="icon" href="../../images/titleimg2.ico"/>
   
   <style></style>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../../styles/base.css" />
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
</head>

<body>
   <nav>
        <div id="navwrapper">
            <div id="navleft">
                <ul>
                    <li>
						<!-- Button is seperate from the div -->
						<div class="dropdown"><a href="../products/mouse.html" class="dropdown">Mice</a>
							<div class="dropdown_content">
							<p><a href="../../products/mouse.html#pricebracketlow">$</a></p>
							<p><a href="../../products/mouse.html#pricebracketmid">$$</a></p>
							<p><a href="../../products/mouse.html#pricebrackethigh">$$$</a></p>
							</div>
						</div>
					</li>
                    <li><div class="dropdown"><a href="../products/keyboard.html" class="dropdown">Keyboard</a>
                            <div class="dropdown_content">
                            <p><a href="../../products/keyboard.html#pricebracketlow">$</a></p>
                            <p><a href="../../products/keyboard.html#pricebracketmid">$$</a></p>
                            <p><a href="../../products/keyboard.html#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li><div class="dropdown"><a href="../products/monitor.html" class="dropdown">Monitor</a>
                            <div class="dropdown_content">
                            <p><a href="../../products/monitor.html#pricebracketlow">$</a></p>
                            <p><a href="../../products/monitor.html#pricebracketmid">$$</a></p>
                            <p><a href="../../products/monitor.html#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
                <a href="../index/index.html"><img id="imgid" src="../../images/logonew.PNG" alt="Logo"></a>
            <div id="navright">    
                <ul>
                    <li><div class="dropdown"><a href="../info.html" class="dropdown">About Us</a></div></li>
                    <li><div class="dropdown"><a href="../info.html#contactheader" class="dropdown">Contact</a></div></li>
                    <li><div class="dropdown"><a href="forum.php" class="dropdown">Forum</a></div></li>
                </ul>
            </div>
        </div>
    </nav>
	<!-- Main Page Content -->
	<section>
	<div id="pagecontent">
		<div id="forumcontainer">

            <?php
            	require_once('config.php');
            
            	// Connect to server and select database.
            	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
            	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
            	$tbl_name="topic"; // Table name
            
            
            	$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
            	// ORDER BY id DESC is order result by descending
            	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
            ?>
            
            <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
                    <td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
                    <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
                </tr>
                
                <?php
                while($rows=mysqli_fetch_array($result)){ // Start looping table row
                ?>
                
                <tr>
                    <td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
                    <td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
                </tr>
                
                <?php
                // Exit looping and close connection
                }
                ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
                ?>
                <tr>
                    <td colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
                </tr>
            </table>


        </div>
    </div>
	</section>
	<!-- Footer -->
   <footer>
		<div class="footerconstraint">
        <div class="bottomleftcolumn">
            <ul>
                <li><a href="../../index/index.html">Home</a></li>
                <li><a href="../info.html#contactheader">Contact</a></li>
				<li><a href="../info.html">About Us</a></li>
			</ul>
		</div>
		<div class="middleleftcolumn">
			<ul>
                <li><a href="../../products/mouse.html">Mice</a></li>
                <li><a href="../../products/keyboard.html">Keyboard</a></li>
                <li><a href="../../products/monitor.html">Monitor</a></li>
			</ul>
		</div>
		<div class="middlerightcolumn">
			<ul>

                <li><a href="forum.html">Forum</a></li>				
            </ul>
        </div>
        <div class="bottomrightcolumn">
            <ul>
				<li><a href="../signup.html">Sign-Up</a></li>
                <li><a href="../sitemap.html">Sitemap</a></li>
            </ul>
        </div>
		<p>&copy; Copyright 2017 | lol </p>
		</div>
   </footer>
   
</body>
</html>


	