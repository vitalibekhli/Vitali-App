  <?php

        class db {
                public $server = 'localhost';
                public $user = 'root';
                public $passwd = 'rexadrivan';
                public $db = 'vitali';
                public $dbCon;

        function __construct(){
                $this->dbCon = mysqli_connect($this->server, $this->user, $this->passwd, $this->db);
        }

          function __destruct(){
                mysqli_close($this->dbCon);
        }

        function select($query){
                $myQuery = "".$query."";
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }

    }

    
    $data = $mySQL->select("SELECT * from users");

    $selectArray = array();

    while($row = mysqli_fetch_assoc($data)){
        $selectArray[] = $row;
        print_r($row);
    }
    

?>