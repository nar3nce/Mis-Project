<?php
$date_now = date_create(date("y-m-d")); 
$exp_date = date_create("2019-10-14");

$diff = date_diff($date_now,$exp_date);

 $days =  $diff->format("%a");

if ($days <= 0)
{
echo "expired";
}
else{
echo $days. " days left before expired";
}
?>