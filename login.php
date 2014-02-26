<?
/**
ini_set('display_errors', 1); 
error_reporting(E_ALL);
**/
session_start();
require_once('databaseconfig.php');
$user = $_POST['user'];
$pass = $_POST['pass'];


header('Content-type: application/json');

$data = $mySQL->select("SELECT * from users where name = '".$user."'");

while($row = mysqli_fetch_assoc($data)){
    if($pass == $row['Pass']){
    	$arr = array('login' => 'true');
		echo json_encode($arr);
		$_SESSION['logged'] =1;
    }
    else{
    	$arr = array('login' => 'false');
		echo json_encode($arr);
    }
}

?>
