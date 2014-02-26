<?

session_start();
require_once('databaseconfig.php');
$user = $_POST['user'];
$pass = $_POST['pass'];


header('Content-type: application/json');

function VerifyLogin($user,$pass)
{	
	$mySQL = new db();
	if($data = $mySQL->query("SELECT * from users where Name = '".$user."' AND Pass = '".$pass."'")){
		if($data->num_rows == 0){
			return 0;
		}else{
			while($row = mysqli_fetch_assoc($data)){
				return $row;
			}
		}
	}
}

if(VerifyLogin($user,$pass) == 0){
	$arr = array('status' => 'failed','description'=>'Invalid Password');
	echo json_encode($arr);
}else{
	$arr = array('status' => 'success');
	echo json_encode($arr);
	$_SESSION['logged'] =1;
}

?>
