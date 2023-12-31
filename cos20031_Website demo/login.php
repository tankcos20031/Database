<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.php"><img src="images/logo.png" alt="" class="nhan3"></img></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.php" class="nhan5">Home</a></li>
                <li><a href="course.php" class="nhan5">Courses</a></li>
                <li><a href="job.php" class="nhan5">Jobs</a></li>
                <li><a href="profile.php" class="nhan5">Your Profile</a></li>
            </ul>
            <div class="nhan6">
                <a href="login.php" class="nhan5 active"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>
    <div class="nhan10">
        <div class="nhan11">
            <form action="login.php" method="post">
                <h1>Login</h1>
                <div class="nhan12">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="nhan12">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>               
                <!-- <div class="vu13">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div> -->
                <button type="submit" class="nhan14">Login</button>
                <div class="nhan15">
                    <p>Don't have an account?<a href="register.php"> Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="nhan7">
            <h3>TANK Team</h3>
            <ul class="nhan8">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </div>
        <div class="nhan9">
            <p>COPYRIGHT &copy;2023 Team TANK</p>
        </div>
    </footer>
</body>
</html>