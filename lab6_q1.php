<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 6 Q1</title>
</head>
<body>
<?php
$name = "Iwani Izzati Binti Mohd Azdy";
$matricNumber = "AI220025";
$course = "BIT 21503";
$yearOfStudy = "2";
$address = "Kg.Pelegong Batu 8,71900 Labu,Negeri Sembilan";
?>
<table border="1">
 <tr>
    <td>Name</td>
    <td><?php echo "$name"; ?></td>
 </tr>
 <tr>
    <td>Matric Number</td>
    <td><?php echo $matricNumber; ?></td>
 </tr>
 <tr>
    <td>Course</td>
    <td><?php echo $course; ?></td>
 </tr>
 <tr>
    <td>Year Of Study</td>
    <td><?php echo $yearOfStudy; ?></td>
 </tr>
 <tr>
    <td>Address</td>
    <td><?php echo $address; ?></td>
 </tr>
</table>
</body>
</html>