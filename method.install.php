<?php
#-------------------------------------------------------------------------
# Module: MillcoBrowser
# Version: 1.0
# Method: Install
#-------------------------------------------------------------------------

if (!isset($gCms)) exit;

// create a permission
$this->CreatePermission('Use MillcoBrowser', 'Use MillcoBrowser');

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));

?>