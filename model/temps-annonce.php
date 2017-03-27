<?php 
$datetime1 = new DateTime($annonces['publication']);
$datetime2 = new DateTime(date("Y-m-d"));
$interval = $datetime1->diff($datetime2);
if ($interval->format('%d jours')=='0 jours') {
    echo "aujourd'hui";
} elseif ($interval->format('%d jours')=='1 jours') {
    echo "hier";
}
else {
    echo $interval->format('%d jours');
}

?>