 <?php
session_start();

//initialising variables

$uname ="";
$eml ="";

$errors = array();

//connection to the db
$host = "localhost";
    $user = "root";
        $password = ""; 

$db_connect = mysqli_connect("host","user","password") //or die("could not connect to database");


//Registrtaion from the form
($_SERVER["REQUEST_METHOD"] == "POST"){
(isset($_POST["uname"]) && isset($_POST["eml"]) && isset ($_POST["psd"]) && isset($_POST["psd_conf"])) {
    $uname = validator($_POST["uname"])
    $emal = validator($_POST["eml"]);
    $password = validator($_POST["psd"]);
    $psd_conf = validator($_POST["psd_conf"]);

} 
} 
    


    //form validation
    function validator($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data); 
        return $data;
    }


//form validation

if(empty($uname)){array_push($errors,"Username is required");}
    if(empty($emal)) {array_push($errors, "Email Is reqired");}
        if(empty($psd)) {array_push($errors, "Password Is reqired");}
            if($psd != $psd_conf) {array_push($errors, "Password do not match");}

// check if username already exist

    $user_check_query = "SELECT * FROM devform WHERE username= '$uname' or email = '$eml' LIMIT 1 ";

        $results = mysqli_query($db_connect,$user_check_query);
            $user  = mysqli_fetch_assoc($results);

if($user) {

    if($user['uname'] === $uname){array_push($errors,"Username already exist");}
    if($user['eml'] === $eml){array_push($errors,"Email already exist");}
}

//Registration if no errors are found
if(count($errors) == 0 ){

    $password = md5($psd);//encrypt the password
    $query = "Insert INTO devform (username,email,password) VALUES ('$uname','$eml','$password)";

    $mysqli_query($db_connect,$query);

    $_SESSION['uname'] = $uname;
    $_SESSION['Success'] = "You are now logged in";

    header("location: welcome.php");

}


?>
