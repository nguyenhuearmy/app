<?php

require '/home/ubuntu/workspace/app/connect.php';
$conn = connectDB();

//$conn->query("INSERT INTO Member (username, password, email, fullname, birthday, sex) values ('huenguyen', '1234', 'hue@example.com', 'nguyen thi hue', '12-13', 'nam')");

if(!empty($_POST['signup'])){
    $username = isset($_POST['username'])   ? $_POST['username'] :'';
    $password = isset($_POST['password'])   ? md5($_POST['password']) :'';
    $email    = isset($_POST['email'])      ? $_POST['email'] :'';
    $fullname = isset($_POST['fullname'])    ? $_POST['fullname'] :'';
    $birthday = isset($_POST['birthday'])    ? $_POST['birthday'] :'';
    $sex      = isset($_POST['sex'])      ? $_POST['sex'] :'';

    $error = "";
    if(empty($username) || empty($password) || empty($email)){
        $error = "co loi";
    }

    if(empty($error)){
    
        $Name = $conn->query("SELECT * FROM Member WHERE username='$username'");
        $Email = $conn->query("SELECT * FROM Member WHERE email='$email'");
        $countName =0;
        $countEmail=0;
        foreach($Name as $iname){
            $countName++;
        }
        foreach($Email as $jemail){
            $countEmail++;
        }
        
        if($i<=0 && $j<=0){
            $conn->query("INSERT INTO Member (username, password, email, fullname, birthday, sex) values('$username', '$password', '$email', '$fullname', '$birthday', '$sex')");
            header("Location: xuli.php");
            $conn = null;
        }
        if($i>0){
            $re['username'] = 'username nay da duoc dang ki';
        }
        if($j>0){
            $re['email'] = 'email nay da duoc dang ki';
        }
    }
    else{
        echo "khong lq";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>dang ki thanh vien</title>
    </head>
    <body>
        <script type="text/javascript" src="valid.js"></script>
        <form method="post" action="">
            
            <label>Ten Dang Nhap</label><br>
            <input type="text" name="username" class="testUsername"/><?php echo $re['username']; ?><span class="username"></span><br>
            
            <label>Mat Khau</label><br>
            <input type="text" name="password" class="testPassword"/><span class="password"></span><br>
            
            <label>Email</label><br>
            <input type="text" name="email" class="testEmail"/><?php echo $re['email']; ?><span class="email"></span><br>
            
            <label>Ho ten</label><br>
            <input type="text" name="fullname"/><br>
            
            <label>Ngay Sinh</label><br>
            <input type="text" name="birthday"/><br>
            
            <label>Gioi Tinh</label><br>
            <select name="sex">
                <option value=""></option>
                <option value="Nam">Nam</option>
                <option value="Nu">Nữ</option>
            </select><br>
            
            <input type="submit" name="signup" value="dang ki" onclick="myFunction"/>
        </form>
    </body>
</html>