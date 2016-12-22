<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$submitcontact=$_POST["submitcontact"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Your Website Title</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<style type="text/css" media="all">@import "style/style.css";</style>
	<!--[if IE 7]>
		<style type="text/css">@import "style/ie7.css";</style>
	<![endif]-->
	<script src="script/jquery.js" type="text/javascript"></script>
	<script src="script/jquery-ui.js" type="text/javascript"></script>
	<script src="script/lightbox.js" type="text/javascript"></script>
	<script src="script/cufon-yui.js" type="text/javascript"></script>
	<script src="script/easing.js" type="text/javascript"></script>
	<script src="script/jcarousel.js" type="text/javascript"></script>
	<script src="script/slideshow.js" type="text/javascript"></script>
	<script src="script/ChunkFive_400.font.js" type="text/javascript"></script>
	<script src="script/twitter.js" type="text/javascript"></script>
	<script src="script/gettwitter.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		Cufon.replace('#maincontent h1, #listcontentslide li h3, .boxfrontsmall h2, .titlenav, .titlefooter');
		$('a.popup').lightBox({fixedNavigation:true});
	});
	</script>
</head>
<body>
<p><a class="skiplink" href="#maincontent">Skip over navigation</a></p>
<div id="wrapper">
	<div id="toparea">
		<ul id="menutop">
			<li><a href="#">Faq</a></li>
			<li><a href="#">Privacy Policy</a>
				<ul>
					<li><a href="#">Terms of Services</a>
						<ul>
							<li><a href="#">Drop Down 1</a></li>
							<li><a href="#">Drop Down 2</a></li>
						</ul>
					</li>
					<li><a href="#">Terms Conditions</a></li>
					<li><a href="#">Online Support</a></li>
				</ul>
			</li>
			<li class="active"><a href="contactus.html">Contact Us</a></li>
		</ul>
	</div>
	<div id="header">
		<a href="#" class="replace" id="logo"><span></span>Persada - Solid Grey Blue Template</a>
		<form method="post" action="#" id="frmsearch">
			<div>
				<input type="text" name="search" class="textboxsearch" value="Search" onblur="if(this.value.length == 0) this.value='Search';" onclick="if(this.value == 'Search') this.value='';" /> <input type="submit" name="submitsearch" class="submitsearch" value="Search" />
			</div>
		</form>
	</div>
	<div id="placemainmenu">
		<ul id="mainmenu">
			<li><a href="index.html">Home</a></li>
			<li class="active"><a href="#">About Us</a></li>
			<li><a href="#">News</a>
				<ul>
					<li><a href="newslist.html">News List</a></li>
					<li><a href="newsdetail.html">News Detail</a></li>
				</ul>
			</li>
			<li><a href="testimonial.html">Testimonial</a></li>
			<li><a href="services.html">Our Services</a></li>
			<li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="#">Layout Variations</a>
				<ul>
					<li><a href="#">Color Variations</a>
						<ul>
							<li><a href="../blue/index.html">Blue</a></li>
							<li><a href="../green/index.html">Green</a></li>
							<li><a href="../red/index.html">Red</a></li>
						</ul>
					</li>
					<li><a href="typography.html">Typography</a></li>
					<li><a href="fullwidth.html">Full Width</a></li>
				</ul>
			</li>
			<li class="active"><a href="contactus.html">Contact</a></li>
		</ul>
	</div>
	<div id="content">
		<div id="maincontent">
			<h1>Contact Us</h1>
			<p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipiscing elit. Integer elementum tincidunt enim a ullamcorper. Donec vitae diam ante, at sagittis ipsum. Donec pretium euismod urna. Duis auctor nisl in magna pharetra condimentum. Sed luctus lorem ac augue aliquam in accumsan risus posuere. Sed ultricies ligula tristique ligula porttitor ac malesuada neque ultrices. Donec ipsum massa, scelerisque eu consequat et, eleifend ac mauris. Maecenas malesuada ligula quis augue elementum eget mollis mauris semper. Donec pellentesque, elit tempor iaculis adipiscing, massa libero vulputate magna, et sodales felis risus id orci. Phasellus porttitor sollicitudin condimentum. Proin sed mauris massa.</p>
			<?php
				if ($submitcontact) {
					$error=0;
					if ($name=="") {
						echo "<div class=\"errordiv\">Please type your name.</div>";
						$error=1;
					}
					if ($email=="") {
						echo "<div class=\"errordiv\">Please type your email address.</div>";
						$error=1;
					} else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)) {
						echo "<div class=\"errordiv\">Please type valid email address.</div>";
						$error=1;
					}
					if ($message=="") {
						echo "<div class=\"errordiv\">Type your message.</div>";
						$error=1;
					} 
					if ($error==0) {
						$myemail="ronggobramantyo@gmail.com"; // Change it with your email address
						$to=$myemail;
						$subject="[Contact Us] $name";
						$header="from: $name <$email>\n";
						$header.="MIME-Version: 1.0";
						$message2="$name $phone \r\n\r\n";
						$message2.="$message \r\n\r\n";
						$sentmail = mail($to,$subject,$message2,$header);
						if ($sentmail) {
							echo "<div class=\"correctdiv\">Thank you for your message, we will reply your message as soon as possible</div>";
							$name="";
							$email="";
							$phone="";
							$message2="";
						}
					}
				}
				?>
				<form method="post" action="contactus.php" id="frmcontact">
					<div>
						<label for="txtname">Your Name:</label> <input type="text" name="name" class="textboxcontact" id="txtname" value="<?=$name?>" /> <span>*</span><br />
						<label for="txtemail">Email Address:</label> <input type="text" name="email" class="textboxcontact" id="txtemail" value="<?=$email?>" /> <span>*</span><br />
						<label for="txtphone">Phone:</label> <input type="text" name="phone" class="textboxcontact" id="txtphone" value="<?=$phone?>" /><br />
						<label for="txtmessage">Message:</label> <textarea cols="50" rows="10" name="message" id="txtmessage" class="textareacontact"><?=$message?></textarea><br />
						<label></label><input type="submit" name="submitcontact" value="Send Message" class="submitcontact" />
					</div>
				</form>
		</div>
		<div id="nav">
			<div class="boxnav">
				<h3 class="titlenav">More About Us</h3>
				<div class="boxnavcontent">
					<ul class="menunav">
						<li><a href="#">Company’s History</a></li>
						<li><a href="#">Vision &amp; Mission</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			<div class="boxnav">
				<h3 class="titlenav">Latest News</h3>
				<div class="boxnavcontent">
					<ul class="listnewsnav">
						<li><img src="images/img_newsfooter1.jpg" alt="Aliquam commodo" /><a href="#">Aliquam commodo, mauris vel sollicitudin cursus</a></li>
						<li><img src="images/img_newsfooter2.jpg" alt="Duis euismod nunc" /><a href="#">Duis euismod nunc metus, id tempor sapien</a></li>
						<li><img src="images/img_newsfooter3.jpg" alt="Proin nulla erat" /><a href="#">Proin nulla erat, iaculis ut fringilla vitae, porta sit</a></li>
					</ul>
					<div class="clear"></div>
					<a href="#" class="butmore">Read More</a>
					<div class="clear"></div>
				</div>
			</div>
			<div class="boxnav">
				<h3 class="titlenav">Testimonial</h3>
				<div class="boxnavcontent">
					<ul class="listtestimonialnav">
						<li>
							<img src="images/avatar_1.png" alt="John Doe" />
							<div class="contenttestinav">
								<h4>John Doe</h4>
								<h5><a href="#">http://www.activeden.net</a></h5>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ornare augue ante, vel faucibus sem.</p>
							</div>
						</li>
						<li>
							<img src="images/avatar_2.png" alt="Jane Doe" />
							<div class="contenttestinav">
								<h4>Jane Doe</h4>
								<h5><a href="#">http://www.themeforest.net</a></h5>
								<p>Donec ornare augue ante, vel faucibus sem. Pellentesque.</p>
							</div>
						</li>
					</ul>
					<div class="clear"></div>
					<a href="#" class="butmore">Read More</a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="placetwitter">
			<div id="icontwitter"></div>
			<div id="slidetwitter">
				<ul>
					<li>Loading...</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="boxfooter">
			<h5 class="titlefooter">Footer Navigation</h5>
			<ul class="menufooter">
				<li><a href="#">Lorem ipsum</a></li>
				<li><a href="#">Dolor sit amet</a></li>
				<li><a href="#">Vestibulum varius</a></li>
				<li><a href="#">Dapibus</a></li>
				<li><a href="#">Consectetur</a></li>
				<li><a href="#">Adispicing</a></li>
			</ul>
		</div>
		<div class="boxfooter">
			<h5 class="titlefooter">News Category</h5>
			<ul class="menufooter">
				<li><a href="#">Web Design &amp; Development</a></li>
				<li><a href="#">CSS Gallery</a></li>
				<li><a href="#">Breaking News</a></li>
				<li><a href="#">International News</a></li>
				<li><a href="#">Chit Chat</a></li>
			</ul>
		</div>
		<div class="boxfooter">
			<h5 class="titlefooter">About Us</h5>
			<div class="contentfooter">
				<img src="images/img_1.png" alt="About Us" class="imgleft" />
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tristique.</p>
				<p>Aliquam commodo, mauris vel sollicitudin cursus, est tellus suscipit erat, nec congue est neque eu enim. Duis ut augue a ligula.</p>
				<a href="#" class="butmore">Read More</a>
			</div>
		</div>
		<div class="boxfooter">
			<h5 class="titlefooter">Latest News</h5>
			<ul class="listnewsfooter">
				<li><img src="images/img_newsfooter1.jpg" alt="Aliquam commodo" /><a href="#">Aliquam commodo, mauris vel sollicitudin cursus</a></li>
				<li><img src="images/img_newsfooter2.jpg" alt="Duis euismod nunc" /><a href="#">Duis euismod nunc metus, id tempor sapien</a></li>
				<li><img src="images/img_newsfooter3.jpg" alt="Proin nulla erat" /><a href="#">Proin nulla erat, iaculis ut fringilla vitae, porta sit</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<div id="footerbottom">
			<h6>Copyright &copy; 2010, My website name. All rights reserved.</h6>
			<ul id="menufooterbottom">
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">News</a></li>
			</ul>
			<ul id="menusocial">
				<li><a href="#" class="replace" id="iconsmallrss"><span></span>RSS Feeds</a></li>
				<li><a href="#" class="replace" id="iconsmalltwitter"><span></span>Twitter</a></li>
				<li><a href="#" class="replace" id="iconsmallfacebook"><span></span>Facebook</a></li>
				<li><a href="#" class="replace" id="iconsmalllinkedin"><span></span>Linkedin</a></li>
				<li><a href="#" class="replace" id="iconsmallflickr"><span></span>Flickr</a></li>
				<li><a href="#" class="replace" id="iconsmallsu"><span></span>StumbleUpon</a></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>