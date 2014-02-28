<?

require_once('databaseconfig.php');
$start = $_GET['start'];
$end = $_GET['end'];
$notes_per_page = $_GET['notes-per-page'];

header('Content-type: application/json');


$mySQL = new db();

class Pagination{
function Paginate($values,$per_page){
$total_values = count($values);

if(isset($_GET['page'])){
$current_page = $_GET['page'];
}else{
$current_page = 1;
}
$counts = ceil($total_values / $per_page);
$param1 = ($current_page - 1) * $per_page;
$this->data = array_slice($values,$param1,$per_page);

for($x=1; $x<= $counts; $x++){
$numbers[] = $x;
}
return $numbers;
}
function fetchResult(){ 
$resultsValues = $this->data;
return $resultsValues;
}
}

// Sample Usage
 
$pag = new Pagination();

$data = $mySQL->query("SELECT * from Notes ORDER BY id DESC");
$arrayRow = array();
while($row = mysqli_fetch_assoc($data)){
				array_push($arrayRow, $row);
			}


$numbers = $pag->Paginate($arrayRow,5);
$result = $pag->fetchResult();
echo json_encode($result);

 

 


?>