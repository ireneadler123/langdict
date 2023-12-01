<?php
    include 'db/connect.php';
    include 'components/header.php';
    if (isset($_GET['page'])){
        $page = $_GET['page'];

        if ($page == 'login'){
            include 'pages/login.php';
            
            echo '
            <script>
                var login = document.getElementById("login");
                login.style.display = "none";

                var signup = document.getElementById("signup");
                signup.style.display = "block";
            </script>';
        }elseif ($page == 'signup'){
            include 'pages/signup.php';
            
            echo '
            <script>
                var login = document.getElementById("login");
                login.style.display = "block";

                var signup = document.getElementById("signup");
                signup.style.display = "none";
            </script>';
        }
    }

?>

    <!-- Đây là phần sidebar -->
    <!-- Đây là phần sidebar -->
    <!-- Đây là phần sidebar -->

</body>
</html>