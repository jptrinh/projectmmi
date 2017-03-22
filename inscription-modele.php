<?php
require ('bd-connect.php');

$query = "SELECT * FROM members";
$result = $conn -> query($query);
if (!$result) die ($conn->error);

$rows = $result->num_rows;
for ($j=0 ; $j < $rows ; $j++) {
	$result -> data_seek($j);
	$row = $result -> fetch_array(MYSQLI_ASSOC);
	if ($pseudo == $row['pseudo' || $pw == $row['pw']]) {
		echo "existe deja";
	} else {
		$query = "INSERT INTO membres VALUES (NULL, $pseudo, $pw)";
		$result = $conn -> query($query);
		header ('annonce.php')
	}
}
