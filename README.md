# MillcoBrowser

CMS Made Simple module to enable use of [Responsive Filemanager](http://www.responsivefilemanager.com) within other modules.

This is a very quick replacement for the GBFilemanager module, it's not really ready for production but if you need something in a hurry then knock yourself out.

##Usage

To add a filepicker to a template you can use:
```
{content_module module='MillcoBrowser' block='your_block_name' folder='path/to/a/folder' label='Your input label'}
```

To use an instance of the filepicker in your module you can do something like this:

```php
if($MillcoBrowser = $this->GetModuleInstance('MillcoBrowser')) {

	$myForm.='<label>Featured Image</label>';
	$myForm.=$MillcoBrowser->millco_create_filepicker('your_block_name', $current_image, $folder);

}else{
	$myForm.= 'Cannot retrieve filepicker...';
}
```
At the moment there\'s not many options, hopefully they will get added in soon, you can always update the Responsive Filebrowser config.php file if you need specific settings.
In particular if you use a non standard uploads folder or tmp folder then you will need to change those.

###License and Credits

[RESPONSIVE filemanager](https://github.com/trippo/ResponsiveFilemanager) is licensed under a Creative Commons Attribution-NonCommercial 3.0 Unported License.

**If you use this module on a commerical site you must get the necessary permission from Alberto via [responsivefilemanager.com](http://www.responsivefilemanager.com)**


Stephen at millipedia.