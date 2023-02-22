<?php
include_once 'functions.php';
include_once 'config.php';
$record=viewallproceedings($conn);
?>

<!DOCTYPE html>
<html>
<body>
<head>
<style>
table {
    font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
</head>
<body>

<h2>View Records</h2>

<table>
  <tr>
    <th>Convoc. No.</th>
    <th>Convoc. Date</th>
    <th>Convoc. Lecture Title</th>
    <th>Lecturer Title</th>
    <th>Lecturer surname</th>
    <th>Firstname</th>
    <th>Other name</th>
    <th>Proceedings available?</th>
  </tr>
    <?php
    foreach($record as $value){
        echo '<tr><td>'.ordinal($value[0]).'</td>';
        echo '<td>'.$value[1].'</td>';
        echo '<td>'.$value[2].'</td>';
        echo '<td>'.$value[3].'</td>';
        echo '<td>'.$value[4].'</td>';
        echo '<td>'.$value[5].'</td>';
        echo '<td>'.$value[6].'</td>';
        echo '<td>'.$value[7].'</td></tr>';
    }
    ?>
</table>
<br><br>
<a href = "ConvocationProceedings.php">Back</a> to form
</body>

