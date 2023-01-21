<html>
<body bgcolor="plum">
<h4>Players Name:HARI ,VYSHNAV ,KARTHIK , ASWIN, MAANAS, MINHAJ, NIHAL</h4>
<?php 
$name=["HARI","VYSHNAV","KARTHIK","ASWIN","MAANAS","MINHAJ","NIHAL"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
