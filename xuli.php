<?php
echo "xu li xong";
/*include("connect.php");

$username   = addslashes($_POST['username']);
$password   = addslashes($_POST['password']);
$email      = addslashes($_POST['email']);
$fullname   = addslashes($_POST['fullname']);
$birthday   = addslashes($_POST['birthday']);
$sex        = addslashes($_POST['sex']);

//if(empty($username) || empty($password) || empty($email)){
//    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
//    exit;
//}

// kiem tra username
$countName = $conn->query("SELECT * FROM member WHERE username='$username'");
$i=0;
foreach($countName as $iname){
    $i++;
}
if($i>0){
    echo "ten dang nhap nay da duoc dung, vui long dung ten khac";
    exit;
}

//kiem tra email
$countEmail = $conn->query("SELECT * FROM member WHERE email='$email'");
$j=0;
foreach($countEmail as $jemail){
    $j++;
}
if($j>0){
    echo "email nay da duoc dung, vui long dung email khac";
    exit;
}
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    echo "12345";
@$addmember = mysql_query("
        INSERT INTO member (
            username,
            password,
            email,
            fullname,
            birthday,
            sex
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}',
            '{$birthday}',
            '{$sex}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";*/
?>