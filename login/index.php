<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Mlijo</title>
    <link rel="stylesheet" href="style.css">

    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post" class="user">
                <h1>Login</h1>
                <hr>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control form-control-user">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control form-control-user">
                <button type="submit" name="login">Login</button>
                <p>
                    <a href="pages-forget.php">Forgot Password ?</a>
                    <a href="register.html">Register</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/image.png" alt="">
        </div>
    </div>

    <?php
    session_start();
    require('../config/koneksi.php');

    // Check if the user is already logged in
    if (isset($_SESSION['username'])) {
        $namaLengkap = $_SESSION['nama_lengkap'];

        // Use SweetAlert for the success message
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Login Successful',
                text: 'Welcome back, $namaLengkap!',
            }).then(() => {
                window.location.href = '../Admin/index.php?dashboard';
            });
        </script>";
        exit(); // Ensure that no code is executed after the redirect
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Use prepared statements to prevent SQL injection
        $stmt = $koneksi->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $namaLengkap = $data['nama_lengkap'];

            $_SESSION['username'] = $username;
            $_SESSION['nama_lengkap'] = $namaLengkap;

            // Use SweetAlert for the success message
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Anda berhasil login',
                }).then(() => {
                    window.location.href = '../Admin/index.php?dashboard';
                });
            </script>";
            exit(); // Ensure that no code is executed after the redirect
        } else {
            session_destroy();
            // Add code for handling incorrect login credentials
            // (e.g., display an error message to the user)
        }
    }
    ?>
</body>

</html>