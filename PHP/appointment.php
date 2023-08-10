<!-- <?php

require_once("config/db.php");
$query ="select * from  book_form";
$result=mysqli_query($con,$query);

?>  -->

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <p><br/></p>   
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Appointment List</h3>
            </div>
             <div class="col-md-4">
                <form action="" method="get">
                    <input type="text" name="q" id="q" class="form-control" placeholder="Search Here..." >
                </form>
            </div>
             <div class="col-md-4">
            </div>
        </div>
        <hr>
        <table class= "table table-bordered table-striped table-hover">
            <thead>
                 <tr>
                    <th>Username</th>
                    <th>Check-in_Date</th>
                    <th>Checkin_time</th>
                    <th>Check-out_Date</th>
                    <th>Checkout_time</th>
                    <th>Phone_num</th>
                    <th>status</th>
                </tr>
                <tr>
                    <?php

                        while($row = mysqli_fetch_assoc())
                    ?>
                </tr>
            </thead>
        </table>
       
    </div>
    
</html>