<?
function listdir($start_dir='.') {
$file_type=".php";
  $files = array();
  if (is_dir($start_dir)) {
    $fh = opendir($start_dir);
    while (($file = readdir($fh)) !== false) {
      # loop through the files, skipping . and .., and recursing if necessary
      if (strcmp($file, '.')==0 || strcmp($file, '..')==0) continue;
		$filepath = $start_dir . '/' . $file;
      if ( is_dir($filepath) )
        $files = array_merge($files, listdir($filepath));
      else
      if (strstr($filepath, ".php")) {
			$handle = fopen($filepath, 'r');
			$valid = false; // init as false
			$ln=1;
			while (($buffer = fgets($handle)) !== false) {
				
				if (strpos($buffer,$_GET['str']) !== false) {
					if ($_GET['confirm']=='yes') {
						$find=$_GET[str];
						$replace=$_GET[rep];
						exec("sed -i -e 's/$find/$replace/g' $filepath");
					}
					$valid = TRUE;
					$arrA=array("<",">",'"');
					$arrB=array("&lt;","&gt;",'&quot;');
					$bstr=str_replace($arrA,$arrB,$buffer);
					$arr=array($filepath, $bstr, $ln);
					array_push($files, $arr);
					break; // Once you find the string, you should break out the loop.
				}      
				$ln++;
			}
			fclose($handle);
		}
    }
    closedir($fh);
  } else {
    # false if the function was called with an invalid non-directory argument
    $files = false;
  }

  return $files;

}
$str=$_GET['str'];
$replace=$_GET['replace'];
$dir=(empty($_GET['dir']))?'.':$_GET['dir'];

$j=-1;
$files = listdir($dir);

for ($i=0;$i<count($files);$i++) {
	$mt='';
	if ($i==0) $mt=" ;margin-top: 100px";
	$a=array($_GET['str']);
	$b=array("<span style='color:red'><b>" . $_GET['str'] . "</b></span>");
	echo "<div class='www_box' style='padding:15px;margin:0;font-family:Ubuntu Condensed;font-size:18px$mt'>";
	echo "<div><b>Filename</b>: <span style='color:orange'>" . $files[$i][0] . "</span></div>";
	echo "<div><b>Line Number</b>: <span style='color:#0093D9'>" . $files[$i][2] . "</span></div><div><span style='color:#333;font-family:Courier New'>" . str_replace($a,$b,$files[$i][1]) . "</span></div>";
	echo "<input  type='button' value='Replace all in this file only' class='btn btn-danger' onclick=\"replace_in_file('".$files[$i][0]."')\">";		
	echo "</div>";
}
echo "</div>";

	$find=$_GET['str'];
	$replace=$_GET['rep'];
	$file=$_GET['file'];
	
	exec("sed -i -e 's/$find/$replace/g' $file");
?>