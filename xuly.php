<?php

$servername = "localhost";
$db = "feetback";
$username = "root";
$password = "";
try
{
  $connect = new PDO ("mysql:host=$servername;dbname=$db","$username","");
}
catch(PODException $e){
  echo $e->getMessage();
}

if (isset($_GET['btn-submit'])) {
    $name = trim($_GET['name']);
    $phone = trim($_GET['phone']);
    $email = trim($_GET['email']);
    $comment = trim($_GET['comment']);
    
    // Kiểm tra nếu bất kỳ trường nào bị trống
    if (empty($name) || empty($phone) || empty($email) || empty($comment)) {
        header("Location: index.php?chk=-1");
        exit();
    }

    try {
        $stmt = $connect->prepare('INSERT INTO phanhoi (name, phone, email, comment) VALUES (?, ?, ?, ?)');
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $phone);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $comment);

        // Kiểm tra kết quả thực thi truy vấn
        if ($stmt->execute()) {
            header("Location: index.php?chk=1");
        } else {
            header("Location: index.php?chk=0");
        }
    } catch (PDOException $e) {
        // Xử lý lỗi PDO (ví dụ: lỗi kết nối, lỗi truy vấn, ...)
        header("Location: index.php?chk=0&error=" . urlencode($e->getMessage()));
    }
}