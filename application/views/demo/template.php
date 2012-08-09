<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?> | Higher Bound Inc</title>
          <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
</head>
<body>
<div id="wrapper">
    <div id="main">
        <div id="header">
            <div id="logo"><!-- a href="/" --><!--img src="/assets/img/logo.png" alt="logo" / --><h1 class="replace">Higher Bound Inc</h1><!-- /a --></div>
            <ul id="menu" style="display:none;">
                <li><a href="#">Quick Links</a>
                    <ul>
                        <li> <a href="/page/contact">Contact</a> </li>
                        <!--li> <a href="">Direction</a></li -->
                        <li class="last"><a href="#"></a></li>
                    </ul>
                </li>
                <li><a href="#" id="button">Donate Online</a> </li>
            </ul>
            <div id="nav">
                <ul class="sf-menu">
                    <li class="current"> <a href="/">Home</a> </li>
                    <li><a href="/page/about">Who We Are</a></li>
                    <li><a href="/page/what">What We Do</a></li>
                    <li> <a href="/page/contact">Contact</a> </li>
                    <li> <a href="/page/news">News</a> </li>
                    <li><a href="/page/newsletters">Newsletters</a></li>
                    <li><a href="/page/resources">Resources</a></li>
                    <li style="display:none;"> <a href="#">Media</a>
                        <ul>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/newsletters">Newsletters</a></li>
                        </ul>
                    </li>
                    <!-- li><a href="#">Sample</a>
                        <ul>
                            <li> <a href="test.html">Element Test</a> </li>
                            <li > <a href="#ab">Second Nav 1</a>
                                <ul>
                                    <li><a href="#aba">Third Nav 1</a></li>
                                    <li><a href="#abb">Third Nav 2</a></li>
                                </ul>
                            </li>
                            <li> <a href="#">Second Nav 2</a> </li>
                            <li> <a href="#">Second Nav 3</a> </li>
                        </ul>
                    </li -->
                </ul>
                <div class="search">
                    <form action="" method="post">
                    	<div>
                        <input name="text" type="text"  class="search-field" alt="Search site:" />
                        <input name="submit" type="image" class="search-submit" value="search" src="/assets/img/search.png" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!--header end-->
<!-- Begin contents -->         
<?php echo $content ?>
<!-- End contents -->
        <!--Popup window-->
        <div id="popupContact"> <a id="popupContactClose">x</a>
            <h3 class="replace">Donate to Higher Bound</h3>
            <div class="col left">
                <h4></h4>
                <p>Have you ever wondered how much impact you can have on the lives of middle school students?</p>
                <p>You can meet one of the following needs of the Higher Bound House:</p>
              <ol>
                <li>$30= can supply 1 student a bible they can call their own</li>
                <li>$50= Tuesday Night Teaching Dinner for 1 week</li>
                <li>$50= Thursday Night Study Dinner for 1 week</li>
                <li>$60= After school Snacks for 1 week</li>
                <li>$140= 1 Tank of gas for Higher Bound Van. We use about three tanks a month</li>
                <li>$560= To keep the safe House open (per month)</li>
             </ol>
            </div>
            <div class="col left" style="display:none;">
               <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C8WB8WNJG9ZPQ" target="_blank">
<img src="http://higherbound.org/media/img/red-donate-button.jpg" border="0" />
            </div>
        </div>
        <div id="backgroundPopup"></div>
    </div>
    <!--main end-->
</div>
<!--wrapper end-->
<div class="clear"></div>
<div id="footer-wrapper">
    <div id="footer">
        <div class="left-col left">
           <div class="footer-col left">
                <h6><a href="#">Home</a></h6>
                <ul>
                    <li><a href="/page/about">About Us</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="/page/contact">Contact</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="footer-col left" style="display:none;">
                <h6><a href="#">New Here?</a></h6>
                <ul>
                    <li><a href="#">Direction</a></li>
                    <li><a href="#">Service Times</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">In the News</a></li>
                    <li><a href="#">Lipsum</a></li>
                </ul>
            </div>
            <div class="footer-col left" style="display:none;">
                <h6><a href="#">Ministries</a></h6>
                <ul>
                    <li><a href="#">Family</a></li>
                    <li><a href="#">Youth</a></li>
                    <li><a href="#">Children</a></li>
                    <li><a href="#">Men's Ministry</a></li>
                    <li><a href="#">Women's Ministry</a></li>
                </ul>
            </div>
            <div class="footer-col left">
                <h6><a href="#">Resources</a></h6>
                <ul>
                    <li><a href="/page/resources">Links</a></li>
                    <li><a href="/page/newsletters">Newsletters</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="right-col left"> <h1>Higher Bound Inc</h1> <!-- img src="/assets/img/footer-logo.png" alt="logo"/ -->
            <address>
            300 N 5 Street<br/>
            Vincennes, IN 47591<br/>
            P: 1 812.887.3211
            </address>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</div>
          <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</body>
</html>