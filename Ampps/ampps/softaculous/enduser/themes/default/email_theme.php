<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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


function email_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $saved;

// For email settings
if(optGET('ajax_email')){
	
	if(!empty($error)){			
		echo '0'.current($error);
		return false;
	}
	
	if(!empty($saved)){
		echo '1'.$l['settings_saved'];			
		return true;
	}
}

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editform" class="form-horizontal">
<div class="bg">
	<div class="row sai_main_head mt-4 mb-4" style="width:100%;" align="center">
		<div class="col-12 text-center">
			<i class="far fa-envelope fa-2x mr-2" style="color:#00A0D2;"></i>
			<span class="form-title">'.$l['emailsettings'].'</span>
		</div>
	</div>';
	error_handle($error);
	
	if(!empty($saved)){
		echo '<div class="alert alert-success" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['settings_saved'].'</div></center>';
	}
	
	echo'
	<div class="m-3 card p-3">
	<div class="row mt-2 mb-4">
		<div class="col-12 col-md-6">			
			<label for="email" class="sai_head">'.$l['email_address'].'</label>
			<span class="sai_exp">'.$l['email_exp'].'</span>
			<input type="text" id="email" name="email" class="form-control" size="30" value="'.POSTval('email', $user['email']).'" softmail="true">		
		</div>
	</div><br /><!---row end--->';
	
	echo '<div class="row">';
	
	// If admin has disabled installation email than dont show.
	if(empty($globals['off_install_mail'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
				<input type="checkbox" class="mr-2" id="ins_email" name="ins_email" '.POSTchecked('ins_email', $user['ins_email']).' />	
				<label class="sai_head" for="ins_email">'.$l['ins_email'].'</label>
				<span class="sai_exp">'.$l['ins_email_exp'].'</span>				
			<br />
		</div>';
	}

	// If admin has disabled remove email than dont show.
	if(empty($globals['off_remove_mail'])){	
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="rem_email" name="rem_email" '.POSTchecked('rem_email', $user['rem_email']).' />			
			<label class="sai_head" for="rem_email">'.$l['rem_email'].'</label>
			<span class="sai_exp">'.$l['rem_email_exp'].'</span>
		</div><br />';
	}

	// If admin has disabled edit email than dont show.
	if(empty($globals['off_edit_mail'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="editdetail_email" name="editdetail_email" '.POSTchecked('editdetail_email', $user['editdetail_email']).' />	
			<label class="sai_head" for="editdetail_email">'.$l['editdetail_email'].'</label>
			<span class="sai_exp">'.$l['editdetail_email_exp'].'</span><br />
		</div>';
	}

	// If admin has disabled backup email than dont show.
	if(empty($globals['off_backup_mail']) && empty($globals['disable_backup_restore'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="backup_email" name="backup_email" '.POSTchecked('backup_email', $user['backup_email']).' />			
			<label class="sai_head" for="backup_email">'.$l['backup_email'].'</label>
			<span class="sai_exp">'.$l['backup_email_exp'].'</span><br />
		</div>';
	}

	// Restore email settings
	if(empty($globals['off_restore_mail'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="restore_email" name="restore_email" '.POSTchecked('restore_email', (empty($user['disable_restore_email']) ? 1 : 0)).' />
			<label class="sai_head" for="restore_email">'.$l['restore_email'].'</label>
			<span class="sai_exp">'.$l['restore_email_exp'].'</span><br />
		</div>';
	}

	// If admin has disabled create template email than dont show.
	if(empty($globals['off_template_mail']) && empty($globals['disable_template'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="template_email" name="template_email" '.POSTchecked('template_email', (empty($user['disable_template_email']) ? 1 : 0)).' />			
			<label class="sai_head" for="template_email">'.$l['template_email'].'</label>
			<span class="sai_exp">'.$l['template_email_exp'].'</span><br />
		</div>';
	}

	// Restore Template email settings
	if(empty($globals['off_restore_template_mail']) && empty($globals['disable_template'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="restore_template_email" name="restore_template_email" '.POSTchecked('restore_template_email', (empty($user['disable_restore_template_email']) ? 1 : 0)).' />
			<label class="sai_head" for="restore_template_email">'.$l['restore_template_email'].'</label>
			<span class="sai_exp">'.$l['restore_template_email_exp'].'</span><br />
		</div>';
	}

	// Clone email settings
	if(empty($globals['off_clone_mail'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="clone_email" name="clone_email" '.POSTchecked('clone_email', (empty($user['disable_clone_email']) ? 1 : 0)).' />		
			<label class="sai_head" for="clone_email">'.$l['clone_email'].'</label>
			<span class="sai_exp">'.$l['clone_email_exp'].'</span><br />
		</div>';
	}

	
	// Staging email settings
	if(empty($globals['off_staging_mail'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="staging_email" name="staging_email" '.POSTchecked('staging_email', (empty($user['disable_staging_email']) ? 1 : 0)).' />			
			<label class="sai_head" for="staging_email">'.$l['staging_email'].'</label>
			<span class="sai_exp">'.$l['staging_email_exp'].'</span><br />
		</div>';
	}

	
	// Import email settings
	if(empty($globals['off_import_mail'])){
		echo '<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" name="import_email" id="import_email" '.POSTchecked('import_email', (empty($user['disable_import_email']) ? 1 : 0)).' />			
			<label class="sai_head" for="import_email">'.$l['import_email'].'</label>
			<span class="sai_exp">'.$l['import_email_exp'].'</span><br />
		</div>';
	}

	echo'
		<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="all_notify_update" name="all_notify_update" '.POSTchecked('all_notify_update', (empty($user['disable_all_notify_update']) ? 1 : 0)).' />
			<label class="sai_head" for="all_notify_update">'.$l['all_notify_update'].'</label>
			<span class="sai_exp">'.$l['all_notify_update_exp'].'</span><br />
		</div>
		<div class="col-12 col-md-6 col-xl-6 mb-2">
			<input type="checkbox" class="mr-2" id="email_password_user" name="email_password_user" '.POSTchecked('email_password_user', $user['email_password_user']).(!empty($globals['email_password']) ? ' disabled' : '').' />
			<label class="sai_head" for="email_password_user">'.$l['email_password_user'].'</label>
			<span class="sai_exp">'.$l['email_password_user_exp'].'</span><br />
		</div>
	</div>
	</div><br />';
	
	echo '<div class="row my-3">
		<div class="col-12 text-center">
			<input type="hidden" name="editemailsettings" value="1" />
			'.csrf_display().'
			<input type="submit" name="editsubmit" value="'.$l['edit_settings'].'" class="btn sai-button" /> <br /><img id="create_email" src="'.$theme['images'].'progress.gif" style="display:none">
		</div>			
	</div>
</form>
</div><br /><!--end of bg class-->';

softfooter();

}

?>