<html>

<head>

<title>

open directory

</title>

</'head>

<body>



<?php
//Open images directory
$dir = dir("shiven");

//List files in images directory
while (($file = $dir->read()) !== false)
{
echo "filename: " . $file . "<br />";
}

$dir->close();
?>
</body>

</html>