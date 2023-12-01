<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu Đồ Sử Dụng Plotly</title>
    <!-- Liên kết đến thư viện Plotly -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
    <!-- Địa chỉ ID của div này sẽ được sử dụng để nhúng biểu đồ -->
    <div id="myPlot"></div>

    <script>
    // Dữ liệu mẫu cho biểu đồ
    var data = [{
        x: [1, 2, 3, 4, 5],
        y: [10, 11, 12, 13, 14],
        type: 'line', // Loại biểu đồ: đường
        mode: 'lines+markers', // Hiển thị đường và điểm
        name: 'Dữ liệu mẫu',
        line: {
            color: 'blue' // Màu của đường
        }
    }];

    // Cấu hình layout cho biểu đồ
    var layout = {
        title: 'Biểu Đồ Đường Sử Dụng Plotly',
        xaxis: {
            title: 'Trục X'
        },
        yaxis: {
            title: 'Trục Y'
        }
    };

    // Tạo biểu đồ và nhúng nó vào vùng với ID "myPlot"
    Plotly.newPlot('myPlot', data, layout);
</script>

</body>

</html>


<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "week_plan";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn -> connect_error){
    die('Kết nối không thành công'.$conn->connect_error);
}


?>

###########################

<?php

require 'db/connect.php';

if (isset($_POST['btn-date'])){
    $day = $_POST['day'];
    $monWork = $_POST['monwork'];
    $monTime = $_POST['montime'];
    $monContemplation = $_POST['moncontemplation'];
    $monEmotion = $_POST['monemotion'];


    $sql = "INSERT INTO `tbl_weekplan` (`day`, `monwork`, `montime`, `moncontemplation`, `monemotion`) VALUES('$day','$monWork','$monTime','$monContemplation','$monEmotion')";

    if($conn->query($sql)===TRUE){
        header('Location: http://localhost/My%20projects/Week_Plan/plan_view.php');
    }else{
        echo "Lỗi {$sql}".$conn->error;
    }
}

?>


#############################

   require 'db/connect.php';

            $sql = "SELECT * FROM tbl_weekplan";
            $result = $conn -> query($sql);

while ($row = $result -> fetch_assoc()){
               
            }

#################

internal code teacher: 12121993

####################3

  $host = "localhost";
        $username = "id19353507_leo1996";
        $password = "VOo|K~*#q}^P0F7!";
        $dbname = "id19353507_db_lucy_english";
########################

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ASO CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- ASO JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

####################
$_SESSION['is_login'] = true;
$_SESSION['username'] = $username;

#########
if (isset($_POST['btn-login-submit'])){
        $username = $_POST['username-login'];
        $password = $_POST['password-login'];
        $internal_code = $_POST['internal-code'];

        $sql = "SELECT *  FROM `tbl_user_register` WHERE `username` = '$username'";
        $result = $conn -> query($sql);

        $row = $result -> fetch_assoc();
        if ($password != $row['password'] && $username != $row['username'] && $internal_code != '12121993'){
            header('Location:login.php');

#################33
if (!isset($_SESSION['is_login'])){
    header('location:login.php');
}

#######################

$img_path = basename($_FILES['post-img']['name']);
    // upload files
    $target_dir = "uploads/";
    $target_file = $target_dir.$img_path;
    move_uploaded_file($_FILES['post-img']['tmp_name'], $target_file);


enctype="multipart/form-data"


#########################
overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2; /* start showing ellipsis when 3rd line is reached */
        white-space: pre-wrap; /* let the text wrap preserving spaces */
        text-overflow: ellipsis;

#########################
1. Từ vựng
2. Loại từ
3. Nghĩa của từ
4. Cách nhớ từ
5. Nguồn
6. user_id
7. Thời gian
8. Note

##########
CREATE TABLE vocabulary (
    id SERIAL PRIMARY KEY,
	vocab varchar(100),
	kind varchar(100),
	meaning varchar(100),
	remember varchar(500),
	sources varchar(100),
	user_id int,
	times timestamptz,
	note varchar(500)
);
#############################
<button id="showButton">Hiển thị Bảng</button>

<style>
    .hidden {
        display: none;
        opacity: 0;
        height: 0;
        overflow: hidden;
        transition: all 0.5s ease-in-out;
    }
    #myTable:not(.hidden) {
        opacity: 1;
        height: auto;
    }
</style>
<table id="myTable" class="hidden">
    <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <!-- Thêm các cột khác nếu cần -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <!-- Thêm dữ liệu cho các cột khác nếu cần -->
        </tr>
    </tbody>
</table>


<script>
    document.getElementById("showButton").addEventListener("click", function() {
    // Lấy tham chiếu đến bảng
    var table = document.getElementById("myTable");

    // Kiểm tra xem bảng có được ẩn hay không
    var isHidden = table.classList.contains("hidden");

    // Nếu bảng đang ẩn, hiển thị nó; ngược lại, ẩn nó
    if (isHidden) {
        table.classList.remove("hidden");
    } else {
        table.classList.add("hidden");
    }
});
</script>