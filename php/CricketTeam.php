<html>
<body bgcolor="plum">
<h4>Players Name:HARI ,VYSHNAV ,KARTHIK , ASWIN, MAANAS, MINHAJ, NIHAL</h4>
<?php 
$name=["HARI","VYSHNAV","KARTHIK","ASWIN","MAANAS","MINHAJ","NIHAL"];
$role=["Batsman","Feilder","Balls","Keeper","Substitute"];
echo "<b><u>Starting Vl</u><br>";
echo "<br>
<table border='7px'>
<tr><th>  sl no. </th>
<th> Player </th>
<th> Role </th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
