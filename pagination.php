<?

require_once('databaseconfig.php');
$start = $_GET['start'];
$end = $_GET['end'];

header('Content-type: application/json');


$mySQL = new db();
$data = $mySQL->query("SELECT * from Notes ORDER BY ID DESC LIMIT ".$start.",".$end."");
$stack = array();
while($row = mysqli_fetch_assoc($data)){
				json_encode($row);
				array_push($stack, $row);
				
			}	

echo json_encode($stack);


?>