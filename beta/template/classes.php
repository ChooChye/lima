<?php
class DBConnect extends PDO
{
    public function __construct()
    {
        $DEBUG = 1; //1 to go live

        if($DEBUG == 0){
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "vlima";

        }else{
            $dbhost = "localhost";
            $dbuser = "fbhotelk_suser";
            $dbpass = "Hd)Q*ilnSmqH";
            $dbname = "fbhotelk_ndb";
        }

        parent::__construct("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // always disable emulated prepared statement when using the MySQL driver
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    
    
}
class oldDBConnect extends PDO
{
    public function __construct()
    {
        $DEBUG = 1; //1 to go live

        if($DEBUG == 0){
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "vlima";

        }else{
            $dbhost = "localhost";
            $dbuser = "fbhotelk_dev";
            $dbpass = "I}2,4R_58*1T";
            $dbname = "fbhotelk_db";
        }

        parent::__construct("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // always disable emulated prepared statement when using the MySQL driver
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    
    
}
//Display Name in TOP RIGHT CORNER
function getUserName() {
    if(!isset($_SESSION['xName']) && empty($_SESSION['xName'])){
        $dbo = new DBConnect();
    
        $pdo = $dbo->prepare("SELECT id,name FROM admins WHERE id = :id");
        $pdo->bindParam(":id", $_SESSION['xUserId'], PDO::PARAM_INT);
        $pdo->execute();

        if($pdo->rowCount() == 0){
            return 0;
        }else{
            $row = $pdo->fetch();
            $name = ucfirst($row['name']);

            return $name;

        }
        
        $pdo = $dbo = null;
    }else{
        $name = $_SESSION['xName'];
        return $name;
    }    
}
//show messages in GET
function showMsg(){
    if(isset($_GET['msg1'])){
        $msg = '<div class="w-100 alert alert-success">'.$_GET['msg1'].'</div>';
    }elseif(isset($_GET['msg0'])){
        $msg = '<div class="w-100 alert alert-danger">'.$_GET['msg0'].'</div>';
    }else{
        $msg = NULL;
    }
    return $msg;
}

//Redirect
function meta($e){
    $url = '<meta http-equiv="Refresh" content="2; url='.$e.'">';
    return $url;
}
//Redirect
function metaFast($e){
    $url = '<meta http-equiv="Refresh" content="1; url='.$e.'">';
    return $url;
}

//Decimal Output
function dec($x){
    return number_format(floatval($x), 2, '.', '');
}
/*Server side check, if the calucation is being tampered*/
function calc($qty,$oriGross,$oriLess,$oriNet){
        $bool = 1;
        $base = floatval(528.00);
        $baseGross = dec((int)$qty * (float)$base);
        $baseLess = dec((float)$baseGross * (float)(2.5/100));
        $baseNet = dec((float)$baseGross - (float)$baseLess);
        
        if($baseGross != $oriGross){
            $bool = 0;
        }
        
        if($baseLess != $oriLess){
            $bool = 0;
        }
        
        if($baseLess != $oriLess){
            $bool = 0;
        }
        
        if($baseNet != $oriNet){
            $bool = 0;
        }
        
        if($bool == 1){
            return true;
        }else{
            return false;
        }
    }
    
    function sendMsg($to, $subject, $msgBody){
        $email = "noreply@lima-asiadynamics.com";
        $headers= "";
        $headers .= 'From:' . "$email \r\n" .
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        'Reply-To:' . "$email \r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        return mail($to, $subject, $msgBody, $headers);
    }
?>
