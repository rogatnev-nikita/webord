<?
if ($_REQUEST['name']) {
	if (file_exists('blocks/'.$_REQUEST['name'].'.php')) {
		ob_start();
		require 'blocks/'.$_REQUEST['name'].'.php';
		echo ob_get_clean();
	}
}