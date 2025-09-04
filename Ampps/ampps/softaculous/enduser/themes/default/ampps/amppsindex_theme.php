<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function amppsindex_theme(){

global $a_apps, $ampps_apps_installed, $theme, $globals, $softpanel, $user, $l, $updates_available, $iscripts, $scripts ,$info, $cscripts, $usage;

#Ampps User Page
echo '
<div class="row">
	<div class ="col-sm-11 col-xs-11 text-center">
		<span class="sai_main_head d-block">'.$l['ampps'].'</span>
		<hr class="sai_main_head_hr">
	</div>
	<div class ="col-sm-1 col-xs-1">
		<div class="sai_main_head d-block mb-2">
			<img src="'.$theme['a_images'].'ratings.png" width="30" height="30" class="someclass topscripts" title="Top Scripts" style="border:none;float:right;"/>
		</div>
	</div>
</div>
<div class="">';

//Check Update for AMPPS Apps.
foreach($ampps_apps_installed as $i => $j){

	if($a_apps[$j['aid']]['version'] > $j['version']){
		$apps_update[$j['aid']]['aid'] = $j['aid'];
		$apps_update[$j['aid']]['name'] = $a_apps[$j['aid']]['fullname'];
	}
}

//Apps update available ?
if(!empty($apps_update) && $globals['amp_version'] >= '3.8'){
sort($apps_update);	
echo '<div class="row"><!----#Update---->
		<div class="alert alert-info" >
			<a href="javascript:void(0)" class="close" data-dismiss="alert">&times;</a>
				<center><img src="'.$theme['images'].'upgrade_logo.png" height="25" width="25" /> &nbsp'.$l['ampps_apps_updates_available'];
				foreach($apps_update as $k => $v){
				echo'
				<a style="color:#31708f;" target="_blank" href="'.$globals['ind'].'act=a_apps_update&app='.$apps_update[$k]['aid'].'" ><b>'.$apps_update[$k]['name'].'</b></a>,&nbsp';
				}
			echo'</center>
		</div>
	</div>';
}
	
//Script update available ?
if(!empty($updates_available)){
echo '
<div class="col-12"><!----#Update---->
	<div class="alert alert-warning">
		<a href="javascript:void(0)" class="close" data-dismiss="alert">&times;</a>
		<center><a href="'.$globals['ind'].'act=installations&showupdates=true" alt="" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['updates_available'], array($updates_available)).'</a></center>
	</div>
</div>
';
}
	
echo '
	<div class="bg mt-2">
		<div class="sai_heading_full" id="configure_div">
			<i class="fas fa-cog title-img"></i>
			<span class="script-title">'.$l['ampps_config'].'</span>
		</div><hr />
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<a href="'.$globals['ind'].'act=secure" style="text-decoration:none;" style="margin-top:20px;" >
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="Change Ampps and MySQL Password">
					<img width="40" height="40" src="'.$theme['a_images'].'secure.png" alt="" /><br /><span class="medium">'.$l['ampps_secure'].'</span>
					</div>
				</a>
				
				<a href="'.$globals['ind'].'act=security" style="text-decoration:none;">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can change Ampps Password">
						<img width="40" height="40" src="'.$theme['a_images'].'security.png" alt="" /><br /><span class="medium">'.$l['ampps_security'].'</span>
					</div>
				</a>
				
				<a href="'.$globals['ind'].'act=status" style="text-decoration:none;">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="It will Display Ampps Status">
							<img width="40" height="40" src="'.$theme['a_images'].'status.png" data-placement="right" alt="" /><br /><span class="medium">'.$l['ampps_status'].'</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	
	<div class="bg mt-2">
		<div class="sai_heading_full" id="Features_div">
			<i class="fas fa-star title-img"></i>
			<span class="script-title">'.$l['ampps_features'].'</span>
		</div><hr />
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				
				<a href="'.$globals['ind'].'act=ampps_domainmanage" style="text-decoration:none;">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can Manage Domains for Ampps">
							<img width="40" height="40" src="'.$theme['a_images'].'domains.png" alt="" /><br /><span class="medium">'.$l['ampps_mandom'].'</span>
					</div>
				</a>
			
				<a href="'.$globals['ind'].'act=ampps_domainadd" style="text-decoration:none;">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can Add Domains for Ampps">
							<img width="40" height="40" src="'.$theme['a_images'].'adddomain.png" alt="" /><br /><span class="medium">'.$l['ampps_adddom'].'</span>
					</div>
				</a>';
				
				if(version_compare($globals['amp_version'], '4.4', '>=') && (!empty($ampps_apps_installed['80']) || !empty($ampps_apps_installed['81']))){
					
					echo '
					<a href="'.$globals['ind'].'act=ftpadd" style="text-decoration:none;">
						<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can Add your FTP account">
								<img  width="40" height="40" src="'.$theme['a_images'].'addftp.png" alt="" /><br /><span class="medium">'.$l['ampps_ftp_account'].'</span>
						</div>
					</a>
					
					<a href="'.$globals['ind'].'act=ftpmanage" style="text-decoration:none;">
						<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can Manage your all FTP accounts">
							<img  width="40" height="40" src="'.$theme['a_images'].'ftp.png" alt="" /><br /><span class="medium">'.$l['ampps_ftp'].'</span>
						</div>
					</a>';
				}
				
				if($globals['amp_version'] > '1.5'){
					echo '
					<a href="'.$globals['ind'].'act=alias" style="text-decoration:none;">
						<div class="col-sm-2 col-xs-6 pan-button someclass" title="Add alias name to www directory">
								<img  width="40" height="40" src="'.$theme['a_images'].'alias.png" alt="" /><br /><span class="medium">'.$l['ampps_alias'].'</span>
						</div>
					</a>';
				}
			
			echo '
			
				<a href="'.$globals['ind'].'act=wordpress" style="text-decoration:none;">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="Manage WordPress Installations">
							<img width="40" height="40" src="'.$theme['images'].'wp.png" alt="" /><br /><span class="medium">WordPress Manager</span>
					</div>
				</a>
			
				<a href="https://www.softaculous.com/launch-wordpress" style="text-decoration:none;" target="_blank">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="Launch WordPress Sandbox Sites with One Click">
							<img width="40" height="40" src="'.$theme['images'].'wp.png" alt="" /><br /><span class="medium">WordPress Sandbox &nbsp;<i class="fas fa-external-link-alt"></i></span>
					</div>
				</a>
			</div>
		</div>	
	</div>			
		
	<div class="bg mt-2">
		<div class="sai_heading_full" id="DatabaseTools_div">
			<i class="fas sai-dbtools title-img"></i>
			<span class="script-title">'.$l['ampps_mysql'].'</span>
		</div><hr />
		<div class="row">
			<div class="col-sm-12 col-xs-12">
			
			<a href="http://'.$globals['HTTP_HOST'].'/phpmyadmin/index.php?route=/server/databases" target="_blank" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can Add Database in MySQL">
						<img  width="40" height="40" src="'.$theme['a_images'].'adddb.png" alt="" /><br /><span class="medium">'.$l['ampps_adddb'].'</span>
				</div>
			</a>
				
			<a href="http://'.$globals['HTTP_HOST'].'/phpmyadmin" target="_blank" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="Direct Access to phpMyAdmin">
						<img  width="40" height="40" src="'.$theme['a_images'].'phpmyadmin.png" alt="phpMyAdmin" /><br /><span class="medium">'.$l['ampps_phpmyadmin'].'</span>
				</div>
			</a>
				
			<a href="'.$globals['ind'].'act=mysqlsettings" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can Change MySQL password">
						<img  width="40" height="40" src="'.$theme['a_images'].'mysqlsettings.png" alt="Change Password" /><br /><span class="medium">'.$l['ampps_mysqlsettings'].'</span>
				</div>
			</a>
			
			<!-- <a href="http://'.$globals['HTTP_HOST'].'/sqlite" target="_blank" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="Database management system for sqlite databases">
						<img  width="40" height="40" src="'.$theme['a_images'].'sqlite.png" alt="" /><br /><span class="medium">'.$l['ampps_sqlite'].'</span>
				</div>
			</a> -->
			';
			
				/* if($globals['amp_version'] > '1.5'){
				echo '
					<a href="http://'.$globals['HTTP_HOST'].'/rockmongo" target="_blank" style="text-decoration:none;">
						<div class="col-sm-2 col-xs-6 pan-button someclass" title="RockMongo is a MongoDB administration tool">
								<img  width="40" height="40" src="'.$theme['a_images'].'rockmongo.png" alt="RockMongo" /><br /><span class="medium">'.$l['ampps_rockmongo'].'</span>
						</div>
					</a>';
				} */
			echo '
			
			</div>
		</div>
	</div>

	<div class="bg mt-2">
		<div class="sai_heading_full" id="configure_div">
			<i class="fas fa-info-circle title-img"></i>
			<span class="script-title">'.$l['ampps_info'].'</span>
		</div><hr />
		<div class="row">
		
			<div class="col-sm-12 col-xs-12">
			
			<a href="'.(($globals['amp_version']) < '2.1' ? $globals['ind'].'act=phpinfo' : ($globals['amp_version'] < '4.2' ? 'http://'.$globals['HTTP_HOST'].'/cgi-bin/phpinfo.cgi' : 'http://'.$globals['HTTP_HOST'].'/phpinfo.php')).'" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="Shows PHP version and all info">
						<img  width="40" height="40" src="'.$theme['a_images'].'phpinfo.png" alt="" /><br /><span class="medium">'.$l['ampps_phpinfo'].'</span>
				</div>
			</a>';
			
			if(0 && $globals['amp_version'] >='3.8' && $ampps_apps_installed['11']){
				
				echo '
				<a href="http://'.$globals['HTTP_HOST'].'/cgi-bin/perlinfo.pl" style="text-decoration:none;">
					<div class="col-sm-2 col-xs-6 pan-button someclass" title="Shows Perl version and all info">
						<img  width="40" height="40" src="'.$theme['a_images'].'perlinfo.png" alt="" /><br /><span class="medium">'.$l['ampps_perlinfo'].'</span>
					</div>
				</a>';
					
			}
			
			echo '
			</div>
		</div>
	</div>	
	
	<!-- <div class="bg mt-2">
		<div class="sai_heading_full" id="ServerConfig_div">
			<i class="fas fa-sliders-h title-img"></i>
			<span class="script-title">'.$l['ampps_quick_conf'].'</span>
		</div><hr />
		<div class="row">
		
			<div class="col-sm-12 col-xs-12">
			
			<a href="'.$globals['ind'].'act=apache_conf" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can change your Apache Settings">
					<img  width="40" height="40" src="'.$theme['a_images'].'apache_settings.png" alt="" /><br /><span class="medium">'.$l['ampps_apache'].'</span>
				</div>
			</a>
			
			<a href="'.$globals['ind'].'act=editini" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can change your PHP Settings">
					<img  width="40" height="40" src="'.$theme['a_images'].'php_conf.png" alt="" /><br /><span class="medium">'.$l['ampps_php'].'</span>
				</div>
			</a>
			
			</div>
		</div>
	</div> -->

	<div class="bg mt-2">
		<div class="sai_heading_full" id="Scripts_div">
			<i class="fas sai-apps title-img"></i>
			<span class="script-title">'.$l['ampps_scripts'].'</span>
		</div><hr />
		<div class="row">
		
			<div class="col-sm-12 col-xs-12">
			
			<a href="'.$globals['ind'].'act=demos" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can check all script Demos here">
					<img width="40" height="40" src="'.$theme['a_images'].'demos.png" alt="" /><br /><span class="medium">'.$l['ampps_demos'].'</span>
				</div>
			</a>
			
			<a href="'.$globals['ind'].'act=ratings" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can rate all your favourite scripts here">
					<img width="40" height="40" src="'.$theme['a_images'].'ratings.png" alt="" /><br /><span class="medium">'.$l['ampps_ratings'].'</span>
				</div>
			</a>
			
			<a href="'.$globals['ind'].'act=installations" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button  someclass" title="You can check all your Installation here">
					<img width="40" height="40" src="'.$theme['a_images'].'installations.png" alt="" /><br /><span class="medium">'.$l['ampps_installations'].'</span>
				</div>
			</a>
			
			<a href="'.$globals['ind'].'act=backups" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="You can check all backups">
					<img width="40" height="40" src="'.$theme['a_images'].'backups.png" alt="" /><br /><span class="medium">'.$l['ampps_backups'].'</span>
				</div>
			</a>
			
			<a href="'.$globals['ind'].'act=email" style="text-decoration:none;">
				<div class="col-sm-2 col-xs-6 pan-button someclass" title="Change Email settings">
					<img width="40" height="40" src="'.$theme['a_images'].'emails.png" alt="" /><br /><span class="medium">'.$l['ampps_email'].'</span>
				</div>
			</a>
			
			</div>
		</div>
	</div>
</div>';

}

?>