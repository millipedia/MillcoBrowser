<?php
	

if (!isset($gCms)) exit;


if (! $this->CheckPermission('Use MillcoBrowser'))
	{
	return $this->DisplayErrorPage($id, $params, $returnid,$this->Lang('accessdenied'));
	}

echo 'At the moment there is no admin interface for the module. One day perhaps we\'ll be able to set some preferences.';

?>


