<?php
$start=0;
$limit=8;



echo mysql_errno($con) . ": " . mysql_error($con). "\n";




if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}else{
	$id= 1;
}

	
$query=mysql_query("select * from news LIMIT $start, $limit");

while($query2=mysql_fetch_array($query))
{
echo "<section>";
echo "<h1>".$query2['name']."</h1>";
echo "<h2>".$query2['date']."</h2>";
echo "<p>".$query2['newstext']."</p>";
echo $query2['iframe'];
echo $query2['image'];
echo "</section>";


}



$rows=mysql_num_rows(mysql_query("select * from news"));
$total=ceil($rows/$limit);

if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}


for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<li class='current'>".$i."</li>"; }

else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
}

?>