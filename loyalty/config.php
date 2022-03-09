<?Php
/*
$dbhost_name = "localhost";
$database = "agmasiag_bbmasiap_sql";
$username = "agmasiag";
$password = "tempy#123"; 
*/

$dbhost_name = "localhost";
$database = "fbhotelk_db";
$username = "fbhotelk_dev";
$password = "I}2,4R_58*1T"; 

try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

function check_role($role,$auth){
    if($role === 'master'){
    print '';
    }elseif($role !== $auth){
        
    die('<h2 style="color:red; 
                        padding:10px; 
                        margin:1px; 
                        border:1px solid red; 
                        border-radius:5px;
            "><meta http-equiv="refresh" content="0;URL=MembershipReview.php"/>');
           
    }
}
function verify_user_auth($userid,$memid,$auth){
    global $dbo;
    $pdo = $dbo->prepare('SELECT userid,mem_id,authority FROM plus_signup WHERE userid=:user AND mem_id=:memid AND authority=:auth');
    $pdo->bindParam(":user", $userid, PDO::PARAM_STR);
    $pdo->bindParam(":memid", $memid, PDO::PARAM_INT);
    $pdo->bindParam(":auth", $auth, PDO::PARAM_STR);
    $pdo->execute();  
    
    if(!$pdo->rowCount() === '1'){
        print 'NotOK';
        print '<h2 style="color:red; 
                        padding:10px; 
                        margin:1px; 
                        border:1px solid red; 
                        border-radius:5px;
            ">You do not have the authorization to access this page</h2>';
        
    }else{
        foreach($pdo->fetchAll() as $row){
            $role = $row['authority'];
            $u = $row['userid'];
            $m = $row['mem_id'];
            
            if($role !== $auth){
                print '<h2 style="color:red; 
                        padding:10px; 
                        margin:1px; 
                        border:1px solid red; 
                        border-radius:5px;
            ">You do not have the authorization to access this page</h2>';
            }
        }
    }
    
}
?>