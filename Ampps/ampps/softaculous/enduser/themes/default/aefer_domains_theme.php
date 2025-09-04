<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domains_theme.php
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


function domains_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $removed;

softheader($l['<title>']);

echo '<div class="bg"><br />';

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function conf_del(){
	return confirm("'.$l['conf_del'].'");
};
// ]]></script>

<div class="col-12 px-4 text-center"><label class="page-title">'.$l['list_domain'].'</label><hr /></div>';

error_handle($error, '100%');

if(!empty($removed)){
	echo '<div class="alert alert-warning m-3" align="center">
		<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['domain_removed'].'</div>';
}

echo '<div class="row">
	<div class="col-12 px-4">
	<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover mb-2 backup-table">
		<thead  class="sai_head2">
			<tr>
				<th width="75%">'.$l['domain_name'].'</th>
				<th>'.$l['domain_edit'].'</th>
				<th>'.$l['domain_del'].'</th>
			</tr>
		</thead>';
		
		foreach($softpanel->domains as $k => $v) {
			echo '<tr>
				<td>'.$k.'</td>
				<td><a href="'.$globals['ind'].'act=editdomain&did='.$v['did'].'" title="'.$l['domain_edit'].'" class="someclass"><i class="fas fa-pencil-alt px-1 sai_icons" style="color:#FF5D00;"></i></a></td>
				<td><a href="'.$globals['ind'].'act=domains&delid='.$v['did'].'" onclick="return conf_del();" title="'.$l['domain_del'].'" class="someclass"><i class="fas fa-trash-alt sai_icons" style="color:red;"></i></a></td>
			</tr>';
		}
		
	$add_domain_pg = apply_filters('add_domain_page', 'adddomain');
		
	echo '</table><br/>
		<div class="text-center mt-3 mb-4">
				<a class="sai-btn-link" href="'.$globals['ind'].'act='.$add_domain_pg.'" style="text-decoration:none;">'.$l['add_a_domain'].'</a>
		</div>
	</div>
</div>';

apply_filters('post_aefer_domains_theme');

echo '</div>';

softfooter();

}

