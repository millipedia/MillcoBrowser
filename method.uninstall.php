<?php
#-------------------------------------------------------------------------
# Module: MillcoBrowser
# Version: 1.0
# Method: Uninstall
#-------------------------------------------------------------------------
/*
    For separated methods, you'll always want to start with the following
    line which check to make sure that method was called from the module
    API, and that everything's safe to continue:
*/ 
if (!isset($gCms)) exit;

// remove the permissions
$this->RemovePermission('MillcoBrowser');

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));

?>