# MillcoBrowser

** Given that the forthcoming 2.2 release of CMSMS is going to have an reusable file browser as a core module then there's very unlikely to be any more development of this module.   
If you can't wait for V2.2 then you can also use the [JM Filepicker](http://dev.cmsmadesimple.org/projects/jmfilepicker) module. Or hell, use this module, but on your own head be it. **

CMS Made Simple module to enable use of [Responsive Filemanager](http://www.responsivefilemanager.com) within other modules.

This is a very quick replacement for the GBFilemanager module, it's not really ready for production but if you need something in a hurry then knock yourself out.


##Installing

If you [download a zipped version](https://github.com/millipedia/MillcoBrowser/archive/master.zip) of this project rather than checking it out via git you'll need to change the name of the folder to MillcoBrowser rather than MillcoBrowser-master before you upload it to your modules directory.

The version of the example .htaccess file included from v2.1.1 of CMSMS includes some directives which will prevent the filebrowser loading. If you use that version then you'll need to comment out the relative redirects:

```
#RedirectMatch 403 ^.*/lib/.*\.php$
RedirectMatch 403 ^.*/tmp/.*\.php$
#RedirectMatch 403 ^.*/modules/.*\.php$
RedirectMatch 403 ^.*/uploads/.*\.php$
```  

##Usage

To add a filepicker to a template you can use:
```
{content_module module='MillcoBrowser' block='your_block_name' folder='path/to/a/folder' label='Your input label' file_type='img'}
```

The **file_type** parameter can be 'img' (default), 'file' or 'video'

To use an instance of the filepicker in your module you can do something like this:

```php
if($MillcoBrowser = $this->GetModuleInstance('MillcoBrowser')) {

	$myForm.='<label>Featured Image</label>';
	$myForm.=$MillcoBrowser->millco_create_filepicker('your_block_name', $current_image, $folder, 'img');

}else{
	$myForm.= 'Cannot retrieve filepicker...';
}
```
At the moment there's not many options, hopefully they will get added in soon, you can always update the Responsive Filebrowser config.php file if you need specific settings.
In particular if you use a non standard uploads folder or tmp folder then you will need to change those.

###License and Credits

[RESPONSIVE filemanager](https://github.com/trippo/ResponsiveFilemanager) is licensed under a Creative Commons Attribution-NonCommercial 3.0 Unported License.

**If you use this module on a commerical site you must get the necessary permission from Alberto via [responsivefilemanager.com](http://www.responsivefilemanager.com)**


Stephen at millipedia.
