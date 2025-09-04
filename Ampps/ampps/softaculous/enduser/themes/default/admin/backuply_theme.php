<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backuply_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function backuply_theme(){

global $theme, $globals, $user, $l, $error, $done, $info, $report;

softheader($l['<title>']);

if(!empty($done)){
	echo '<div class="alert alert-success text-center"><i class="fas fa-check sai_icons mr-2"></i>
	'.__('Backuply is being installed in the background !').'</div>';
}else{

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
		
		a{
			text-decoration:none !important;
		}

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .hero-section {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero-section h1 {
            font-weight: 700;
            font-size: 3.5rem;
        }

        .hero-section p {
            font-size: 1.25rem;
            max-width: 600px;
            margin: 20px auto;
        }
        
        .btn-lg {
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            font-weight: 700;
            color: #343a40;
        }
        
        .feature-card {
            background: #ffffff;
            border: none;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.07);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .feature-card h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .pricing-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.07);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .pricing-card .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 20px;
        }

        .pricing-card .card-title {
            font-weight: 600;
            margin-bottom: 0;
        }

        .pricing-card .card-body {
            padding: 40px;
        }

        .price {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .price .period {
            font-size: 1rem;
            font-weight: 400;
            color: #6c757d;
        }
        
        .pricing-card ul {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .pricing-card ul li {
            margin-bottom: 15px;
            color: #495057;
        }
        
        .pricing-card ul li i {
            color: #28a745;
            margin-right: 10px;
        }

        .footer {
            background-color: #343a40;
            color: #adb5bd;
            padding: 40px 0;
        }
        
        .footer a {
            color: #ffffff;
        }
        
        .footer a:hover {
            color: #007bff;
            text-decoration: none;
        }
		
		.pagelayer-row-holder{
			flex: 1 0 auto;
  flex-direction: row;
  flex-wrap: wrap;
  align-content: stretch;
  display: flex;
		}
		
		.pagelayer-col, .pagelayer-col-holder {
  align-content: flex-start;
}
    </style>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
	<div class="container">
		<img class="pagelayer-img pagelayer-wp-title-img" src="https://backuply.com/sitepad-data/uploads/2022/11/Backuply-logo-1.png" title="Backuply-logo" alt="Backuply-logo" width="70"> &nbsp;<a class="navbar-brand text-primary" href="#">Backuply</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="https://backuply.com/server" target="_blank">Website</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://backuply.com/docs" target="_blank">Docs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://backuply.deskuss.com/" target="_blank">Support</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
   
	
	<div pagelayer-id="yhr7431" class="p-yhr7431 pagelayer-row pagelayer-row-stretch-full pagelayer-height-default" style="max-width: 100vw; left: 0px;">
<style pagelayer-style-id="yhr7431">.p-yhr7431 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-yhr7431 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-yhr7431 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-yhr7431 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-yhr7431 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-yhr7431{background: #cee7ff;padding-top: 25px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}
</style>

			<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-full">
<div pagelayer-id="stc3616" class="p-stc3616 pagelayer-col">
<style pagelayer-style-id="stc3616">.p-stc3616 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-stc3616{width: 50%}
.p-stc3616 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-stc3616{padding-top: 30px; padding-right: 30px; padding-bottom: 30px; padding-left: 30px}
@media (max-width: 768px) and (min-width: 601px){.pagelayer-row-holder .p-stc3616{width: 100%}
.p-stc3616{padding-top: 10px; padding-right: 10px; padding-bottom: 50px; padding-left: 10px}
}
@media (max-width: 600px){.pagelayer-row-holder .p-stc3616{width: 100%}
.p-stc3616{padding-top: 10px; padding-right: 10px; padding-bottom: 30px; padding-left: 10px}
}
</style>
				
				
				
				<div class="pagelayer-col-holder">
<div pagelayer-id="baq5726" class="p-baq5726 pagelayer-heading" align="left">
<style pagelayer-style-id="baq5726">.p-baq5726{text-align: left;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}
.p-baq5726 .pagelayer-heading-holder *{color:#3878ff}
.p-baq5726 .pagelayer-heading-holder{color:#3878ff}
</style><div class="pagelayer-heading-holder"><h4>Backuply for Server</h4></div>
		
			</div>
<div pagelayer-id="jch1232" class="p-jch1232 pagelayer-heading" align="left">
<style pagelayer-style-id="jch1232">.p-jch1232{text-align: left;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}
</style><div class="pagelayer-heading-holder"><h2>Your Total Data Protection &amp; Recovery Service</h2></div>
		
			</div>
<div pagelayer-id="afm9951" class="p-afm9951 pagelayer-heading" align="left">
<style pagelayer-style-id="afm9951">.p-afm9951{text-align: left}
</style><div class="pagelayer-heading-holder"><p>Backuply helps you backup your user accounts over local or remote storage locations. It supports incremental backups and remote backup storage technologies like S3, SSH, FTP, Google Drive, OneDrive. Backuply is premium plugin BUT included for FREE with Softaculous.</p>
<a href="<?php echo $globals['index'];?>act=backuply&install=1" class="flat-butt btn-lg">Install Backuply Pro for Free</a></div>
		
			</div>
</div></div>
<div pagelayer-id="mkb1919" class="p-mkb1919 pagelayer-col">
<style pagelayer-style-id="mkb1919">.p-mkb1919{align-content: flex-end !important}
.p-mkb1919 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-mkb1919{width: 50%}
.p-mkb1919 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
@media (max-width: 600px){.p-mkb1919{padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}
}
</style>
				
				
				
				<div class="pagelayer-col-holder">
<div pagelayer-id="r0e1764" class="p-r0e1764 pagelayer-image">
<style pagelayer-style-id="r0e1764">.p-r0e1764 .pagelayer-image-holder{text-align: center}
.p-r0e1764 .pagelayer-image-holder .pagelayer-image-overlay-content{text-align: center}
.p-r0e1764 .pagelayer-img{-webkit-transition: all 400ms; transition: all 400ms}
.p-r0e1764 .pagelayer-image-caption{color: #0986c0}
</style><div class="pagelayer-image-holder pagelayer-anim-par">
			
				<img class="pagelayer-img pagelayer-animation-{{anim_hover}}" style="width: 100%;" src="https://backuply.com/sitepad-data/uploads/2025/05/backuply-banner.png" title="backuply-banner" alt="backuply-server" srcset="https://backuply.com/sitepad-data/uploads/2025/05/backuply-banner.png, https://backuply.com/sitepad-data/uploads/2025/05/backuply-banner.png 1x, ">
				
			
		</div>
		</div>
</div></div>
</div></div>

    <!-- Features Section -->
    <section id="features" class="section">
        <div class="container">
            <h2 class="section-title">Essential Features for Data Protection</h2>
            <div class="row">
                <!-- Feature 1: Backup Scheduling -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-calendar-alt"></i></div>
                        <h5>Backup Scheduling</h5>
                        <p>Set up regular, automated backups to run daily, weekly, or monthly. Never miss a backup again.</p>
                    </div>
                </div>
                <!-- Feature 2: Incremental Backups -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                        <h5>Incremental Backups</h5>
                        <p>Save only the data that has changed since the last backup, reducing storage space and time.</p>
                    </div>
                </div>
                <!-- Feature 3: Disaster Recovery -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-fire-extinguisher"></i></div>
                        <h5>Disaster Recovery</h5>
                        <p>Quickly restore your user accounts, including files, databases, and configurations, after a catastrophic event.</p>
                    </div>
                </div>
                <!-- Feature 4: Hybrid Backups -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                        <h5>Hybrid Backups</h5>
                        <p>Combine local and cloud storage for the perfect balance of quick recovery and enhanced security.</p>
                    </div>
                </div>
                <!-- Feature 5: Remote Backups -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-server"></i></div>
                        <h5>Remote Backups</h5>
                        <p>Securely back up your data to a remote, offsite location like S3, SSH, FTP, Google Drive, OneDrive for an extra layer of protection against local disasters.</p>
                    </div>
                </div>
                <!-- Feature 6: Multi-Platform -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                        <h5>Multi-Platform Support</h5>
                        <p>Compatible with Webuzo, cPanel and DirectAdmin. Manage all your server backups with Backuply.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<div pagelayer-id="rsc4638" class="p-rsc4638 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="rsc4638">.p-rsc4638 .pagelayer-col-holder{padding: 10px}
.p-rsc4638 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-rsc4638 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-rsc4638 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-rsc4638 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-rsc4638 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-rsc4638{background: #cee7ff;padding-top: 70px; padding-right: 0px; padding-bottom: 70px; padding-left: 0px}
</style>
			
			
			
			
			<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
<div pagelayer-id="nci5383" class="p-nci5383 pagelayer-col">
<style pagelayer-style-id="nci5383">.p-nci5383 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-nci5383 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
				
				
				
				<div class="pagelayer-col-holder">
<div pagelayer-id="q2f1403" class="p-q2f1403 pagelayer-heading" align="center">
<style pagelayer-style-id="q2f1403">.p-q2f1403{text-align: center;margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}
</style><div class="pagelayer-heading-holder"><h2>Multi-Platform Compatibility</h2></div>
		
			</div>
<div pagelayer-id="mua8716" class="p-mua8716 pagelayer-heading" align="center">
<style pagelayer-style-id="mua8716">.p-mua8716{text-align: center}
</style><div class="pagelayer-heading-holder"><p>Our proprietary backup architecture facilitates seamless migration of <br>hosting accounts between different control panel environments.</p></div>
		
			</div>
<div pagelayer-id="vwc1223" class="p-vwc1223 pagelayer-inner_row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="vwc1223">.p-vwc1223 .pagelayer-col-holder{padding: 10px}
.p-vwc1223 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-vwc1223 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-vwc1223 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-vwc1223 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-vwc1223 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
</style>
			
			
			
			
			<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
<div pagelayer-id="i2t6401" class="p-i2t6401 pagelayer-col">
<style pagelayer-style-id="i2t6401">.p-i2t6401 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-i2t6401{width: 36.99%}
.p-i2t6401 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
				
				
				
				<div class="pagelayer-col-holder">
<div pagelayer-id="ygw2787" class="p-ygw2787 pagelayer-image">
<style pagelayer-style-id="ygw2787">.p-ygw2787 .pagelayer-image-holder{text-align: right}
.p-ygw2787 .pagelayer-image-holder .pagelayer-image-overlay-content{text-align: right}
.p-ygw2787 img{max-width: 60%}
.p-ygw2787 .pagelayer-img{-webkit-transition: all 400ms; transition: all 400ms}
.p-ygw2787 .pagelayer-image-caption{color: #0986c0}
.p-ygw2787 img{
border: 5px solid #a9bdd0b5;
}
</style><div class="pagelayer-image-holder pagelayer-anim-par">
			
				<img class="pagelayer-img pagelayer-animation-{{anim_hover}}" src="https://backuply.com/sitepad-data/uploads/2025/05/webuzo-logo-backuply.png" title="Webuzo Logo for Backuply" alt="Backuply is supported on Webuzo" srcset="https://backuply.com/sitepad-data/uploads/2025/05/webuzo-logo-backuply.png, https://backuply.com/sitepad-data/uploads/2025/05/webuzo-logo-backuply.png 1x, ">
				
			
		</div>
		</div>
</div></div>
<div pagelayer-id="txe9709" class="p-txe9709 pagelayer-col">
<style pagelayer-style-id="txe9709">.p-txe9709 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-txe9709{width: 22.98%}
.p-txe9709 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
				
				
				
				<div class="pagelayer-col-holder">
<div pagelayer-id="usb6770" class="p-usb6770 pagelayer-image">
<style pagelayer-style-id="usb6770">.p-usb6770 .pagelayer-image-holder{text-align: left}
.p-usb6770 .pagelayer-image-holder .pagelayer-image-overlay-content{text-align: left}
.p-usb6770 img{max-width: 100%}
.p-usb6770 .pagelayer-img{-webkit-transition: all 400ms; transition: all 400ms}
.p-usb6770 .pagelayer-image-caption{color: #0986c0}
.p-usb6770 img{
border: 5px solid #a9bdd0b5;
}
</style><div class="pagelayer-image-holder pagelayer-anim-par">
			
				<img class="pagelayer-img pagelayer-animation-{{anim_hover}}" src="https://backuply.com/sitepad-data/uploads/2025/04/cPanel.png" title="cPanel" alt="cPanel" srcset="https://backuply.com/sitepad-data/uploads/2025/04/cPanel.png, https://backuply.com/sitepad-data/uploads/2025/04/cPanel.png 1x, ">
				
			
		</div>
		</div>
</div></div>
<div pagelayer-id="6sy4313" class="p-6sy4313 pagelayer-col">
<style pagelayer-style-id="6sy4313">.p-6sy4313 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-6sy4313{width: 40.00%}
.p-6sy4313 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
				
				
				
				<div class="pagelayer-col-holder">
<div pagelayer-id="lsy2198" class="p-lsy2198 pagelayer-image">
<style pagelayer-style-id="lsy2198">.p-lsy2198 .pagelayer-image-holder{text-align: left}
.p-lsy2198 .pagelayer-image-holder .pagelayer-image-overlay-content{text-align: left}
.p-lsy2198 img{max-width: 88%}
.p-lsy2198 .pagelayer-img{-webkit-transition: all 400ms; transition: all 400ms}
.p-lsy2198 .pagelayer-image-caption{color: #0986c0}
.p-lsy2198 img{
border: 5px solid #a9bdd0b5;
}
</style><div class="pagelayer-image-holder pagelayer-anim-par">
			
				<img class="pagelayer-img pagelayer-animation-{{anim_hover}}" src="https://backuply.com/sitepad-data/uploads/2025/04/directadmin.jpg" title="directadmin" alt="directadmin" srcset="https://backuply.com/sitepad-data/uploads/2025/04/directadmin.jpg, https://backuply.com/sitepad-data/uploads/2025/04/directadmin.jpg 1x, ">
				
			
		</div>
		</div>
</div></div>
</div></div>
</div></div>
</div></div>

    <!-- Pricing Section -->
    <section id="pricing" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Simple, Transparent Pricing - Free with <?php echo APP;?></h2>
            
        </div>
    </section>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
<?php

}

softfooter();

}
