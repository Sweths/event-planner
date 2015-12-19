<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>The Chateau</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="How to Create (Animated) Text Fills with various techniques" />
    <meta name="keywords" content="text, fill, animation, svg, background-clip, clip, mask" />
    <meta name="author" content="Yoksel for Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="icon" href="./images/top.00_png_srz" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/style17.css" />
    <!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<style type="text/css">
	.image{
		width: 168px;
height: 117px;
margin-left: 556px;
margin-top: 24px;
	}
</style>

<body>
             <div>
             	<img src="./css/liked.png" class="image">
             </div>
                 <p class="content-related" style="color:#fff;"><i class="fa fa-quote-left"></i>&nbsp;..Your registration was successfull. We are waiting for your valuable time with us!!! ..&nbsp;<i class="fa fa-quote-right"></i> </p>

                 <center>
                 
                    <td><span style="color:#fff;"><b><?php echo "Your registration no. is : ".rand(10000,99999);?></b></span></td> 
                    
                </center>
                
                <p class="content-related" style="color:#fff;"><i class="fa fa-quote-left"></i>&nbsp;Please keep this registration number for your records&nbsp;<i class="fa fa-quote-right"></i><br><br>&nbsp;This registration number is required for all communications with <i>The Chateau </i>regarding this registration.&nbsp;</p>
        <div class="content">
            <svg viewBox="0 50 1500 450">

                <!-- Symbol with text -->
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em" class="text--line">
                        Text
                    </text>
                </symbol>

                <!-- Clippath  with text -->
                <clippath id="cp-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em" class="text--line">
                        Thank you
                    </text>
                </clippath>

                <!-- Group for shadow -->
                <g clip-path="url(#cp-text)" class="shadow">
                    <rect width="100%" height="100%" class="anim-shape anim-shape--shadow"></rect>
                </g>

                <!-- Group with clippath for text-->
                <g clip-path="url(#cp-text)" class="colortext">
                    <!-- Animated shapes inside text -->
                    <rect width="100%" height="100%" class="anim-shape"></rect>
                    <rect width="80%" height="100%" class="anim-shape"></rect>
                    <rect width="60%" height="100%" class="anim-shape"></rect>
                    <rect width="40%" height="100%" class="anim-shape"></rect>
                    <rect width="20%" height="100%" class="anim-shape"></rect>
                </g>

                <!-- Transparent copy of text to keep patterned text selectable -->
                <use xlink:href="#s-text" class="text--transparent"></use>

            </svg>
        </div>
                           
    </div>
    
</body>

</html>
