<?php
$folder = 'uploads/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
 
$sortedArray = array();
for ($i = 0; $i < $count; $i++) {
    $sortedArray[date ('YmdHis', filemtime($files[$i]))] = $files[$i];
}
 
krsort($sortedArray);
echo '<table>';
foreach ($sortedArray as &$filename) {
    #echo '<br>' . $filename;
    echo '<tr><td>';
    echo '<a name="'.$filename.'" href="#'.$filename.'"><img src="'.$filename.'" /></a>';
    //echo substr($filename,strlen($folder),strpos($filename, '.')-strlen($folder));
    echo '</td></tr>';
}
echo '</table>';
?>