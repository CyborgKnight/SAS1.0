<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/css1/login.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
</head>

<body>
    <center>
        <div class="container">
            <form action="ceklogin.php" method="post">
                <center>
                    <span>
                        <img src="./logo/SAS_LOGO-removebg-preview.png" alt="" width="268px">
                    </span>
                    <span>
                        <p>Student Attendance System</p>
                    </span>
                </center>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-preper">
                            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Enter Your Username" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-preper">
                            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                </svg>
                            </div>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                    </div>
                </div>
                <br>
                <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
            </form>
            <br>
            <center>
                <h10 class="text-center" style="color: blue;">don't have an account?</h10>
            </center>
            <a href="daftar.php">
                <button class="btn btn-danger">Daftar</button>
            </a>
        </div>

        <br><br><br><br>

        <div class="bg-success p-2 text-white bg-opacit y-75">
            <footer>
                <div>
                    <center>
                        <p>
                            <i>-Student Attendance System-</i>
                            <br>
                            Copyright 2022
                        </p>
                    </center>
                </div>
            </footer>
        </div>
    </center>
</body>

</html>