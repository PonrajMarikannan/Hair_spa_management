<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['checkin']) && isset($_POST['checkout']) && isset($_POST['shops']) && isset($_POST['services']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $shops = $_POST['shops'];
    $services = $_POST['services'];

    $conn = new mysqli('localhost','root','','signup');
    if($conn->connect_error)
    {
        echo "Connection Failed : " . $conn->connect_error;
        die();
    }
    else
    {
        $stmt = $conn->prepare("INSERT INTO book_form (name, email, phno, checkin, checkout, shop, services) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if($stmt === false)
        {
            echo "Prepare statement failed: " . $conn->error;
            $conn->close();
            die();
        }
        $stmt->bind_param("sssssss", $name, $email, $phone, $checkin, $checkout, $shops, $services);
        $execval = $stmt->execute();
        if($execval === false)
        {
            echo "Execute statement failed: " . $stmt->error;
            $stmt->close();
            $conn->close();
            die();
        }
        echo $execval;
        $stmt->close();
        $conn->close();
        header("Location: congrats.php");
        exit; // Exit the script after redirecting
    }
}
?>
