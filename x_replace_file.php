<?
	$find=$_GET['str'];
	$replace=$_GET['rep'];
	$file=$_GET['file'];
	exec("sed -i -e 's/$find/$replace/g' $file");
?>