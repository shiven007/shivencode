<!DOCTYPE html>

<html>

<body>

<?php

$d=cal_days_in_month(CAL_GREGORIAN,2,1965);

echo "There was $d days in February 1965.<br>";

$d=cal_days_in_month(CAL_GREGORIAN,2,2004);

echo "There was $d days in February 2004.";

$d=cal_days_in_month(CAL_GREGORIAN,6,2013);

echo "There was $d days in june 2013.";


?>

</body>

</html>