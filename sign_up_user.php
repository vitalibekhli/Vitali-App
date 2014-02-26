<?

require_once('databaseconfig.php');
header('Content-type: application/json');

$signupUser = $_POST['user'];
$signupPass = $_POST['pass'];
$signupEmail = $_POST['email'];
$signupTel = $_POST['tel'];
$signupDate = date('l jS \of F Y h:i:s A');


function CheckUsername($signupUser)
{	
	$mySQL = new db();
	if($data = $mySQL->query("SELECT * from users where Name = '".$signupUser."'")){
		if($data->num_rows == 0){
			return 0;
		}else{
			while($row = mysqli_fetch_assoc($data)){
				return $row;
			}
		}
	}
}


function CheckEmail($signupEmail)
{	
	$mySQL = new db();
	if($data = $mySQL->query("SELECT * from users where Email = '".$signupEmail."'")){
		if($data->num_rows == 0){
			return 0;
		}else{
			while($row = mysqli_fetch_assoc($data)){
				return $row;
			}
		}
	}
}


function RegisterUser($signupUser,$signupPass,$signupEmail,$signupTel,$signupDate){
	$mySQL = new db();
	$data = $mySQL->query("INSERT INTO users 
(Name, Pass, Email, Tel,Created_date) VALUES('".$signupUser."','".$signupPass."','".$signupEmail."','".$signupTel."',NOW())");
}

if(CheckUsername($signupUser) == 0 && CheckEmail($signupEmail) == 0){
	RegisterUser($signupUser,$signupPass,$signupEmail,$signupTel,$signupDate);
	$arr = array('status' => 'success','description'=>'Registered');
	echo json_encode($arr);
	
}else{
	if(CheckUsername($signupUser) !== 0 && CheckEmail($signupEmail) !== 0){
		$arr = array('status' => 'failed','description'=>'Invalid Username and Email');
		echo json_encode($arr);
	}elseif (CheckUsername($signupUser) !== 0) {
		$arr = array('status' => 'failed','description'=>'Invalid Username');
		echo json_encode($arr);
	}elseif (CheckEmail($signupEmail) !== 0) {
		$arr = array('status' => 'failed','description'=>'Invalid Email');
		echo json_encode($arr);
	}
}


	

?>