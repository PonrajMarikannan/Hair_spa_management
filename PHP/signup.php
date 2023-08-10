
<?php
    if(isset($_POST['uname']) || isset($_POST['email']) || isset($_POST['phno']) || isset($_POST['pass'] ))  
     {
    $name= $_POST['uname'];
    $Email= $_POST['email'];
    $Phno= $_POST['phno'];
    $Password = $_POST['pass'];
    // Database connection
    $conn = new mysqli('localhost','root','','signup');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }
     else 
    {
        $stmt = $conn->prepare("insert into user_signup(name,mail,phnum,password) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$name, $Email, $Phno, $Password);
        $execval = $stmt->execute();
        echo $execval;
        header("Location: login1.php");
        $stmt->close();
        $conn->close();
    }
    }
?>