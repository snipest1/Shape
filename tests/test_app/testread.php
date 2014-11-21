<!DOCTYPE html>
<html>
<body>

<?php
ini_set("auto_detect_line_endings", true);

$myfile = 'C:\home\tim\NetBeanswebdictionary.html';
$file = fopen($myfile, "r");
print fread($file);
 //"C:\home\tim\NetBeansProjects\Shape\tests\webdictionary.html", "r+"); 
//$output file_get_contents('./webdictionary.txt');
//readfile($file);
//ob_flush($file); 
flush();
fclose($file);
//fclose($myfile);
?>

</body>
</html>