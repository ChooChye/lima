<?Php

include "include/session.php";
include "config.php"; 

@$count=$dbo->prepare("update plus_login set status='OFF' where userid='$_SESSION[userid]'");
@$count->execute();

session_unset();
session_destroy();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>BBM Asia Pacific</title>
<style>
a.navwhite:link { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:visited { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:hover { text-decoration: underline; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:link { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:visited { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:hover { text-decoration: underline; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
</style>
        <meta name="keywords" content="loyalty, membership, telemarketing" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>
        <style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #212121}
-->
        </style>
</head>
    <body>
	<img src="images/explorasia-logo.png" border="0" width="58" height="58" alt="explorasia-logo" style="position:absolute; left:3px; top:2px; width: 55px; height: 53px;">
<div style="position:absolute;left:67px;top:20px;width:242px;height:18px;overflow:hidden;">
<p>Member of Explorasia Group</p>
</div>
        <div id="menu_bg">
        	<div id="menu">
        		<ul>
                    <li><a class="active" href="index.php">Home</a>
                    <li><a href="concept.html" >Concept</a>
                    <li><a href="establishments.php" >Establishments</a>
                    <li><a href="data.html"> Data</a>
					<li><a href="careers.php"> Careers</a>
        	        <li><a href="contact.html">Contact Us</a></li>
                </ul>
        	</div>
        </div>
		<div id="logo">
			<h1><a href="#"><font color="#808080" 
size=4><strong>BBM</strong></font></a><font color="#808080" size="4">   
 Asia Pacific</font></h1>
		</div>
		
		<div id="header_repeat_bg">
			<div id="header_bg">
				<div id="header">
					
					<div class="scrollable">
				<div class="items">
					<div class="item">
						<div class="header1">
						<div class="header_left">
						<h3 align="left"><font size="3">Welcome to Our 
Website</font>   </h3>
						<div class="text" style="WIDTH: 404px; HEIGHT: 84px">
<p align="left"><font color="#c0c0c0">We 
appreciate your interest in our company. Our 
site is organized to make it easy for you to find the information you want, while 
telling you our story - who we are, what we do, and where we are heading 
in achieving our ultimate goal.</font> </p>                                              </div>
					</div>
					<div class="header_right">
						<img style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 10px" title="" alt="" src="images/header_img1.jpg" >
					</div>
					<div class="clear"></div>
					</div>                                    
					</div><!-- item -->
					<div class="item">
					    <div class="header2">
						
						   <div class="header_left">
						<h3 align="left"><font size="3">What We Value</font>&nbsp; </h3>
						<div class="text" style="WIDTH: 407px; HEIGHT: 80px">
<p align="left"><font color="#c0c0c0">At BBM Asia Pacific we 
value an environment based on respectful relationships, a strong network of 
collaborators, the integrity of ones work, quality assurance and most 
importantly dedication.</font> </p>                                              </div>
					</div>
					<div class="header_right">
						<img style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 10px" title="" alt="" src="images/header_img2.jpg" >
					</div>
					<div class="clear"></div>
	
						
						</div>						
					</div><!-- item -->
					<div class="item">
					    <div class="header3">
						
						   <div class="header_left">
						<h3 align="left"><font size="3">Our Focus</font>&nbsp; </h3>
						<div class="text">                  </div>
						<div class="text" style="WIDTH: 409px; HEIGHT: 100px">
<p align="left"><span class="cms_citem_824718"><font 
color=#c0c0c0>We will continue to focus on integrating our businesses onto a 
common platform across the Asia Pacific, enhancing the end-to-end and client 
experience by simplifying the way we do business, and improving the productivity 
in our&nbsp;service network.</font></span> 
</p>                                              </div>
					</div>
					<div class="header_right">
						<img style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FLOAT: left; PADDING-TOP: 10px" title="" alt="" src="images/header_img3.jpg" >
					</div>
					<div class="clear"></div>
						
						</div>						
					</div><!-- item -->			
											
					
				</div><!-- items -->
			</div><!-- scrollable -->
			<div class="navi"></div><!-- create automatically the point dor the navigation depending on the numbers of items -->		   
			  
                <div style="CLEAR: both"></div>			
					
					
				</div>
			</div>
		</div>
		
		<div id="content">
				<h2>About BBM Asia Pacific</h2>
				<img style="PADDING-BOTTOM: 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 20px; FLOAT: left; PADDING-TOP: 0px" title="" alt="" src="images/img2.jpg" >
					<p> BBM Asia Pacific is a fast growing professional group 
of consultants, specializing in the implementation, design and management of 
highly skilled IT and Loyalty programs in the region.<br>
                   With more than 30 years of expertise&nbsp; as a unique marketing arm of some of the most established hotels resorts and spas in the Asia Pacific region. </p>
					<p>
                          BBM Asia Pacific is also involved in the medical hospitality industry and recruitment of skilled professionals for the IT Industry. </p>
					<p>
                               It has a team of highly qualified employees with a vast network beyond your imagination. </p>
					<p>BBM Asia Pacific also operates and manages&nbsp;<strong><em><font 
color=#408080><a href="http://www.ctexplorer.com"><font 
color=#408080>CTExplorer</font></a> ,&nbsp; </font></em> 
</strong> a unique loyalty program for independent three, four 
and five star hotels, offering 
members cross property benefits under the network. Participating hotels are located in most cities in the Asia Pacific region. Not only hotels but also specialized shops that would offer our membership various goods and services at a special discount on presentation of a valid membership card. </p>
					<p>         
     
          </p>
					<p>
          </p>
			<div class="grey_border"></div>
			
			<div class="column3_box">
				<div class="column1">
					<h2><font color="#408080">Statement of Core 
Business</font>   </h2>
					<p><font color="#408080">We are dedicated to bring highly 
effective and profitable Customer Loyalty Programs that are designed to 
substantially increase revenue throughout our client's operations.</font> 
                  </p>
					<p> 
                  </p>
				</div>
				<div class="column2">
					<h2><font color="#408080">Strategic Vision</font>    </h2>
					<p><font color="#408080">Throughout our innovative, committed 
and dynamic approach, supported by leading edge technology, we will establish 
ourselves as the market leader in every field of our chosen operations. 
</font>
                  </p>
					<p>
                  </p>
				</div>
				<div class="column3">
					<h2><font color="#408080">Outlining Strategies</font>      </h2>
					<p><font color="#408080">We recruit, train and develop high 
caliber individuals. We are committed to establishing long term relationships 
with each and every client, achieving measurable results for them in terms of 
revenue and profit increase. We will continually evolve our growth strategies 
and work practices, through encouragement of creativity, supported by a 
commitment to the use of enabling technology. </font>        
         
                  </p>
					<p><font color="#408080"></font>        
         
                  </p>
				</div>
				<div class="clear"></div>
			</div>
			
			
			

			<div class="clear"></div>
		</div>
		
		
		
		
		
		<div id="footer_repeat_bg">
			<div id="footer_bg">
				<div id="footer_width">
					<div id="footer_top">
						<div id="footer_left">
							<h2>About Us</h2>
							<img style="PADDING-BOTTOM: 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 20px; FLOAT: left; PADDING-TOP: 0px" title="" alt="" src="images/img1.jpg" >
							<p>  BBM Asia Pacific is a fast growing professional group 
of consultants, specializing in the implementation, design and management of 
highly skilled IT and Loyalty programs in the region.<br> 
                          </p>
						</div>
						<div id="footer_middle">
							<h2>Core Business</h2>
							<ul class="ul_hover_bg">
								<li><a href="loyalty.html" >    Loyalty Membership Program</a></li>
								<li><a href="it.html">    IT and Advertising Solutions</a></li>
								<li><a href="http://explorasia-card.com" >Explorasia Card</a></li>
								<li><a href="health.html">Health And Leisure </a></li>
								<li><a href="event.html">Event Management </a></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					  <div id="footer_right">
							<h2>Employee&nbsp;Log In</h2>
                                                        
							<form action='loginck.php' method=post>
		<table width="75%" border="0">
			<tr> 
				<td width="27%">Username</td>
				<td width="73%"><input type ='text' class='bginput' name='userid' size="22"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type ='password' class='bginput' name='password' size="22" ></td>
			</tr>
			<tr> 
				
			  <td>&nbsp;</td>
				<td><div align="center">
				  <input type="submit" name="submit" value="Sign In" />
				  <input name="reset" type='reset' value='Reset' />
			    </div></td>
			</tr>
		</table>
	</form>
	                        <div align="center"><span class="style1"><span class="style1"><a href="forgot-password.php">Forgot Password?</a></em></span>
                            </p>
                            </span>
	                          </fieldset>
                                </form>
                            </div>
					  </div>
						<div class="clear"></div>
					</div>
					<div id="footer_bot">
						<div id="footer_bot_left">
							<p>Copyright 2012(C)&nbsp; BBM Asia Pacific <!-- Do not remove --></p>		
						</div>
						
					<div class="clear"></div>
				</div>
			</div>
		</div>
<?Php
require "bottom.php";
?>
    </body>
</html>