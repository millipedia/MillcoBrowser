<?php

$lang['postinstall'] = 'Be sure to set "Manage MillcoBrowser" permissions to use this module!';
$lang['postuninstall'] = 'All gone. Hope you really meant it."';
$lang['really_uninstall'] = 'Sure? This is going to break any modules that rely on MillcoBrowser. Theres no data to lose though so you can put it back if you need).';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['prefsupdated'] = 'Module preferences updated.';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';
$lang['error'] = 'Error!';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['title_mod_prefs'] = 'Module Preferences';
$lang['title_mod_admin'] = 'Module Admin Panel';
$lang['title_admin_panel'] = 'MillcoBrowser';

$lang['moddescription'] = 'This module allows module developers to add a file manager to their module. ';

$lang['changelog'] = '<ul>
<li>Version 1.0  151014 Initial creation of module</li>
</ul>';
$lang['help'] = '
<p>This module is a simple wrapper around RESPONSIVE filemanager:</p>
<br>
<a href="http://www.responsivefilemanager.com">www.responsivefilemanager.com</a><br>
Copyright © Tecrail - Alberto Peripolli. </p>
<br>
<p>It was created as an alternative to the GBFilepicker module which does not work with CMSMS 2.0</p>
<br>
<p>It\'s not had any serious testing so be aware that it may have unknown side effects. </p>

<h3>Usage</h3>

<p>To add a filepicker to a template you can use:</p>
<br>
<code>
<pre>
{content_module module=\'MillcoBrowser\' block=\'your_block_name\' folder=\'path/to/a/folder\' label=\'Your input label\'}
</pre>
</code>
<br>
<p>To use an instance of the filepicker in your module you can do something like this::</p>
<br>
<code>
<pre>
if($MillcoBrowser = $this->GetModuleInstance(\'MillcoBrowser\')) {

	$myForm.=\'<label>Featured Image</label>\';
	$myForm.=$MillcoBrowser->millco_create_filepicker(\'your_block_name\', $current_image, $folder);

}else{
	$myForm.= \'Cannot retrieve filepicker...\';
}
</pre>
</code>
<br>
<p>At the moment there\'s not many options, hopefully they will get added in soon, you can always update the Responsive Filebrowser config.php file if you need specific settings.<br>In particular if you use a non standard uploads folder or tmp folder then you will need to change those.</p>

<h3>License</h3>
<p>
RESPONSIVE filemanager is licensed under a Creative Commons Attribution-NonCommercial 3.0 Unported License and the code for this module has now been updated to reflect this.<br>

<p><strong>If you use this module on a commerical site you must get the necessary permission from Alberto via responsivefilemanager.com</p>
';

?>
