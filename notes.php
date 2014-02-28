<?
session_start();
require_once('databaseconfig.php');
$mySQL = new db();
//var_dump($_SESSION);
if($_SESSION['logged'] == 1){
	echo "hi";
}

$direction = $_GET['direction'];
$label = $_GET['label'];
$fee = $_GET['fee'];
$content = $_GET['content'];
if(isset($direction)&&isset($label)&&isset($fee)&&isset($content)){
	$mySQL->query("INSERT INTO Notes 
(Direction, Label, Fee, Content,Created_time) VALUES('".$direction."','".$label."','".$fee."','".$content."',NOW())");

}


?>
