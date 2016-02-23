<?php
/*
#-------------------------------------------------------------------------
# Module: MillcoBrowser
# Version: 1.0
# //stephen 150903
#-------------------------------------------------------------------------
*/

// ini_set('error_reporting', E_ERROR);

class MillcoBrowser extends CMSModule
{

	function GetName()
	{
		return 'MillcoBrowser';
	}

	/*---------------------------------------------------------
	   GetFriendlyName()
	  ---------------------------------------------------------*/
	function GetFriendlyName()
	{
		return 'MillcoBrowser';
	}


	/*---------------------------------------------------------
	   GetVersion()
	  ---------------------------------------------------------*/
	function GetVersion()
	{
		return '1.0';
	}

	/*---------------------------------------------------------
	   GetHelp()
	   This returns HTML information on the module.
	   Typically, you'll want to include information on how to
	   use the module.

	   See the note on localization at the top of this file.
	  ---------------------------------------------------------*/
	function GetHelp()
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'stephen at millipedia';
	}

	/*---------------------------------------------------------
	   GetAuthorEmail()
	  ---------------------------------------------------------*/
	function GetAuthorEmail()
	{
		return 'stephen@millipedia.co.uk';
	}

	/*---------------------------------------------------------
	   GetChangeLog()
	   This returns a string that is presented in the module
	   Admin if you click on the About link. It helps users
	   figure out what's changed between releases.
	   See the note on localization at the top of this file.
	  ---------------------------------------------------------*/
	function GetChangeLog()
	{
		return $this->Lang('changelog');
	}

	/*---------------------------------------------------------
	   IsPluginModule()
	   This function returns true or false, depending upon
	   whether users can include the module in a page or
	   template using a smarty tag of the form
	   {cms_module module='MillcoBrowser' param1=val param2=val...}

	   If your module does not get included in pages or
	   templates, return "false" here.
	  ---------------------------------------------------------*/
	function IsPluginModule()
	{
		return true;
	}

	/*---------------------------------------------------------
	   HasAdmin()
	   This function returns a boolean value, depending on
	   whether your module adds anything to the Admin area of
	   the site. For the rest of these comments, I'll be calling
	   the admin part of your module the "Admin Panel" for
	   want of a better term.
	  ---------------------------------------------------------*/
	function HasAdmin()
	{
		return false;
	}

	/*---------------------------------------------------------
	   GetAdminSection()
	   If your module has an Admin Panel, you can specify
	   which Admin Section (or top-level Admin Menu) it shows
	   up in. This method returns a string to specify that
	   section. Valid return values are:

	   main        - the Main menu tab.
	   content     - the Content menu
	   layout      - the Layout menu
	   usersgroups - the Users and Groups menu
	   extensions  - the Extensions menu (this is the default)
	   siteadmin   - the Site Admin menu
	   viewsite    - the View Site menu tab
	   logout      - the Logout menu tab

	   Note that if you place your module in the main,
	   viewsite, or logout sections, it will show up in the
	   menus, but will not be visible in any top-level
	   section pages.
	  ---------------------------------------------------------*/
	function GetAdminSection()
	{
		return 'extensions';
	}


	/*---------------------------------------------------------
	   GetAdminDescription()
	   If your module does have an Admin Panel, you
	   can have it return a description string that gets shown
	   in the Admin Section page that contains the module.

	   See the note on localization at the top of this file.
	  ---------------------------------------------------------*/
	function GetAdminDescription()
	{
		return $this->Lang('moddescription');
	}


	/*---------------------------------------------------------
	   VisibleToAdminUser()
	   If your module does have an Admin Panel, you
	   can control whether or not it's displayed by the boolean
	   that is returned by this method. This is primarily used
	   to hide modules from admins who lack permission to use
	   them.
	   In this case, the module will only be visible to admins
	   who have "Use MillcoBrowser" permissions.
	  ---------------------------------------------------------*/
	function VisibleToAdminUser()
	{
       		 return $this->CheckPermission('Use MillcoBrowser');
	}

	/*---------------------------------------------------------
	   GetDependencies()
	   Your module may need another module to already be installed
	   before you can install it.
	   This method returns a list of those dependencies and
	   minimum version numbers that this module requires.

	   It should return an hash, eg.
	   return array('somemodule'=>'1.0', 'othermodule'=>'1.1');
	  ---------------------------------------------------------*/
	function GetDependencies()
	{
		return array();
	}

	/*---------------------------------------------------------
	   MinimumCMSVersion()
	   Your module may require functions or objects from
	   a specific version of CMS Made Simple.
	   Ever since version 0.11, you can specify which minimum
	   CMS MS version is required for your module, which will
	   prevent it from being installed by a version of CMS that
	   can't run it.

	   This method returns a string representing the
	   minimum version that this module requires.
	   ---------------------------------------------------------*/
	function MinimumCMSVersion()
	{
		return "1.12";
	}


	/*---------------------------------------------------------
	   SetParameters()
	   This function enables you to create mappings for
	   your module when using "Pretty Urls".

	   Typically, modules create internal links that have
	   big ugly strings along the lines of:
	   index.php?mact=ModName,cntnt01,actionName,0&cntnt01param1=1&cntnt01param2=2&cntnt01returnid=3

	   You might prefer these to look like:
	   /ModuleFunction/2/3

	   To do this, you have to register routes and map
	   your parameters in a way that the API will be able
	   to understand.

	   Also note that any calls to CreateLink will need to
	   be updated to pass the pretty url parameter.

	   Since the MillcoBrowser doesn't really create any links,
	   the section below is commented out, but you can
	   use it to figure out pretty urls.

	   ---------------------------------------------------------*/
	function SetParameters()
	{

	// $this->RegisterModulePlugin();

	// Don't allow parameters other than the ones you've explicitly defined
	$this->RestrictUnknownParams();

	// syntax for creating a parameter is parameter name, default value, description
	$this->CreateParameter('fieldID', '', ' ');
	$this->SetParameterType('fieldID',CLEAN_STRING);

  $this->SetParameterType('block_name', CLEAN_STRING);

  $this->CreateParameter('folder', '', ' ');
  $this->SetParameterType('folder', CLEAN_STRING);

	$this->CreateParameter('file_type', '', $this->Lang('param_file_type'));
	$this->SetParameterType('file_type', CLEAN_STRING);

	//$this->AddEventHandler( 'Core', 'ContentPostRender', true );
	}


	  /*---------------------------------------------------------
	   GetEventDescription()
	   If your module can create events, you will need
	   to provide the API with documentation of what
	   that event does. This method wraps up a simple
	   return of the localized description.
	   ---------------------------------------------------------*/
	  function GetEventDescription ( $eventname )
	  {
	    return $this->Lang('event_info_'.$eventname );
	  }


	  /*---------------------------------------------------------
	   GetEventHelp()
	   If your module can create events, you will need
	   to provide the API with documentation of how to
	   use the event. This method wraps up a simple
	   return of the localized description.
	   ---------------------------------------------------------*/
	  function GetEventHelp ( $eventname )
	  {
	    return $this->Lang('event_help_'.$eventname );
	  }


	/*---------------------------------------------------------
	   InstallPostMessage()
	   After installation, there may be things you want to
	   communicate to your admin. This function returns a
	   string which will be displayed.

	   See the note on localization at the top of this file.
	  ---------------------------------------------------------*/
	function InstallPostMessage()
	{
		return $this->Lang('postinstall');
	}

	/*---------------------------------------------------------
	   UninstallPostMessage()
	   After removing a module, there may be things you want to
	   communicate to your admin. This function returns a
	   string which will be displayed.

	   See the note on localization at the top of this file.
	  ---------------------------------------------------------*/
	function UninstallPostMessage()
	{
		return $this->Lang('postuninstall');
	}

	/**
	 * UninstallPreMessage()
	 * This allows you to display a message along with a Yes/No dialog box. If the user responds
	 * in the affirmative to your message, the uninstall will proceed. If they respond in the
	 * negative, the uninstall will be canceled. Thus, your message should be of the form
	 * "All module data will be deleted. Are you sure you want to uninstall this module?"
	 *
	 * If you don't want the dialog, have this method return a FALSE, which will cause the
	 * module to uninstall immediately if the user clicks the "uninstall" link.
	 */
	function UninstallPreMessage()
	{
		return $this->Lang('really_uninstall');
	}


	//ok, this says we can add a content_module tag to a template
	function HasCapability($capability,$params = array())
	  {
	  if ($capability == 'contentblocks')
	    return true;
	  return false;
	  }

	function GetContentBlockFieldInput($blockName,$value,$params,$adding, ContentBase $content_obj){

		//TODO add more params, file type etc.

		if(isset($params['folder'])){
			$folder=$params['folder'];
		}else{
			$folder='';
		}


		$file_type='img'; //image - our default file_type

		if(isset($params['file_type'])){

			$file_type=$params['file_type'];

		}

		//get the input
		$millcobrowser_input=$this->millco_create_filepicker($blockName, $value, $folder, $file_type);

		return $millcobrowser_input;

		}


		function GetContentBlockFieldValue($blockName,$blockParams,$inputParams, ContentBase $content_obj){

				if (isset($inputParams[$blockName]))
				 return $inputParams[$blockName];
			 }

         // function ValidateContentBlockValue($blockName,$value,$blockparams){

         // 	// dont care really
         // 	return true;

         //   }

				 function DoEvent( $originator, $eventname, &$params )
				{
				// if ($originator == 'Core' && $eventname == 'ContentPostRender')
				// 	{

				// 		 $tempcontent=$params['content'];
				// 		 $pos=stripos($tempcontent,"</head");
				// 		 if( $pos !== FALSE && isset($this->ppMetadata)){
				// 			$tempcontent=substr($tempcontent,0,$pos).$this->ppMetadata.substr($tempcontent,$pos);
				// 			$params['content'] = $tempcontent;
				// 		 }


				// 	}
				}

				// load required js in admin.
				function GetHeaderHTML(){

					return '
						<!-- required js for filebrowser -->
						<script src="' . $this->config['root_url'] . '/modules/MillcoBrowser/js/millco_browser.min.js"></script>
						';

				}


			/*non API funcs from here on */

			//translate our file type string to numeric value
			function _file_type($file_string){

					switch ($file_string) {
						case 'file':
								$file_type=2; //file
							break;
						case 'video':
								$file_type=3; //video
							break;
						default:
								$file_type=1; //image
							break;
					}

					return $file_type;

			}


			function DisplayErrorPage($id, &$params, $returnid, $message='')
		    {
				$this->smarty->assign('title_error', $this->Lang('error'));
				if ($message != '')
					{
					$this->smarty->assign_by_ref('message', $message);
					}

		        // Display the populated template
		        echo $this->ProcessTemplate('error.tpl');
		    }


		function millco_tidy_input($grubby){

					$clean=trim($grubby);
					$clean=filter_var($clean, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
					//$clean = preg_replace('/[^a-z0-9\s]/i', '', $clean);
					return $clean;
		}

		// this function is really the only thing done in this module.
		function millco_create_filepicker($field_id='' , $current_value='' , $folder='', $file_type='img'){

			if(strlen($field_id) < 1){

				$file_picker="invalid field id";

			}else{

				// we store an access key which is then used in filemanager config.
				if(!(isset($_SESSION['millcobrowser_key']) && strlen($_SESSION['millcobrowser_key']) > 2 )){

							$_SESSION['millcobrowser_key'] = md5(uniqid());

				}

				//translate our string to file type value;
				$file_type_val=$this->_file_type($file_type);

				$file_picker='';
				$file_picker.= '<!-- required js for filebrowser -->
					<script src="' . $this->config['root_url'] . '/modules/MillcoBrowser/js/millco_browser.js"></script>';

				// one day we could put more of these into options.
				$fp_url=$this->config['root_url'] . '/modules/MillcoBrowser/lib/filemanager/dialog.php?';
				$fp_url.='type=' . $file_type_val;
				$fp_url.='&amp;popup=1';
				$fp_url.='&amp;field_id=' . $field_id .'';
				$fp_url.='&amp;relative_url=1';
				if($folder!==''){
					$fp_url.='&amp;fldr=' . $folder;
				}

				$fp_url.='&amp;akey=' . $_SESSION['millcobrowser_key'];

				$fp_url.='&amp;' . '_sk_=' . session_id();
				$fp_url.='&amp;nocache=' . time();

				$file_picker.= '<div class="input-append">';
				$file_picker.=$this->CreateInputText('', $field_id, $current_value);
				 // <input type="text" value="' .  $current_value .'" id="' . $field_id .'" name="' . $field_id .'">';
				 $file_picker.= '<a class="btn" href="javascript:millco_open_popup(\''. $fp_url .'\')">Select</a>
				</div>';

			}
					return $file_picker;
			}


}

?>
