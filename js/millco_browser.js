
function millco_open_popup(url){
	  var w = 880;
        var h = 570;
        var l = Math.floor((screen.width-w)/2);
        var t = Math.floor((screen.height-h)/2);
        var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

function responsive_filemanager_callback(field_id){
	
	// var newval=jQuery('#'+field_id).val();
	// alert('update '+field_id+" with "+url);

}