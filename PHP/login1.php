<!DOCTYPE html>
<html lang="en">
<head>
    <title>Salon Booking</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="login.html">HOME</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>ONLINE HAIR SALOON <br><span>MANAGEMENT</span> <br></h1>
            <p class="par">Salon management refers to the process of managing a salon or a beauty center.<br>
                It involves organizing, planning, coordinating, and overseeing the operations of a <br>
                salon to ensure its smooth functioning and profitability. The salon industry is highly <br>
                competitive, and good salon management practices are essential for success.
                <br></p>


                <div class="form">
                    <form action="login.php" method="POST">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button type="submit" class="btnn" name ="save" button onclick="validate()" value="login">LOGIN </button>
                    </form>

                    <p class="link">Don't have an account<br>
                    <a href="sign.html">Sign up </a> here</a></p>
                    </div>
                
                </div>
               
                    </div>

                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>