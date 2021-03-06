<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <meta name="Digital Commerce with Alt Commerce" content="Alt commerce is an expert in Omni-Channel Commerce and delivering Oracle Commerce, Commerce Cloud and the suite of Oracle CX products.">
	    
	    <?php 
            $url = $_SERVER["REQUEST_URI"];
        	$explodeUrl	=	explode("/",$url);
        //	print_r($explodeUrl);
        	if($explodeUrl[2]!=''){$filePath	=	'../';}else{$filePath	=	'';}
        ?>
	    
	    <title>Digital Commerce with Alt Commerce</title>
	    <link rel="shortcut icon" href="<?php echo $filePath;?>images/alt.png">
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/uikit.min.css">
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/style1.css">
	    
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/altcommerce-style.css">
	    <link rel="stylesheet" href="<?php echo $filePath;?>css/style-fixed.css">
	    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body class=" uk-background-norepeat <?php if($explodeUrl[2]==''){echo "bg-img";} ?>" >
<!--topbar-->
    <div class="uk-container">
        <div class="uk-grid " uk-grid>
            <div class="uk-navbar-left nav-social">
                <ul class="uk-navbar-nav ">
                    <li>
                        <a href="https://www.facebook.com/altcommerce?_rdr=p" uk-icon="facebook" ></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/altcommerce" uk-icon="twitter"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/alt-commerce" uk-icon="linkedin"></a>
                    </li>
                    <li>
                        <a href="mailto:info@altcommerce.com" uk-icon="mail"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--topbar ends-->
    <!-- navigation -->
    <div class="uk-container">

                
                
        <div class="uk-child-width-expand@s nav-header uk-sticky-fixed " uk-grid  uk-sticky>
            
            <div class="clear-padd uk-width-auto@m">
                <div class="uk-navbar">
                    <div class="menu-toggle">
                        <button class="uk-margin-small-right mobile-navbutton" uk-toggle="target: #offcanvas-usage">
                            <img src="https://img.icons8.com/ios-filled/50/000000/menu.png"/>
                        </button>
                    </div>
                    <div class="uk-navbar-left logo-img">
                        <div class="uk-navbar-item img clear-padd brand-logo">
                            <img src="<?php echo $filePath;?>images/alt.png" alt="">
                        </div>

                    </div>
                </div>

            </div>


            <div class="uk-navbar mobile-nav uk-width-expand@m">
                
                    <ul class="uk-navbar-nav uk-text-bold nav-menu">
                        <li class="uk-active">
                            <a href="<?php echo $filePath;?>">Home</a>
                        </li>
                        <li>
                            <button class="uk-button sub-menu">ABOUT US<span uk-icon="icon: chevron-down"></span></button>
                                <div uk-dropdown="mode: click" class="drop-navbar">
                                
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active uk-animation-slide-right-small"><a href="<?php echo $filePath;?>about">WHAT WE DO</a></li>
                                        <li class="uk-active uk-animation-slide-right-small "><a href="<?php echo $filePath;?>csr">COMMUNITY</a></li>
                                        <li class="uk-active uk-animation-slide-right-small"><a href="<?php echo $filePath;?>contactus">CONTACT US</a></li>
                                    </ul>
                              
                            </div>
                            
                        </li>
                        <li class="">
                            <a href="<?php echo $filePath;?>skill">Skills</a>
                        </li>
                        <li class="">
                            <a href="<?php echo $filePath;?>service">Services</a>
                        </li>
                        <li class="">
                            <a href="<?php echo $filePath;?>resource">Resources</a>
                        </li>
                        
                        <li class="">
                            <a href="<?php echo $filePath;?>careers">Careers</a>
                        </li>
                       
                    </ul>
                

            </div>

        </div>
    </div>
    <!-- navigation ends -->
	    <!-- navigation ends --> 

