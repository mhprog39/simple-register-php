<?php 
if(isset($_POST['submit'])){
    include "db.php";
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
        function validationData($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        };
        //validate data
        $userName = validationData($_POST['name']);
        $userEmail = validationData($_POST['email']);
        $userPassword = md5(validationData($_POST['password'])); //md5 => hash password
        //mysql query
        $sql = "INSERT INTO users (name,email,password) VALUES('$userName','$userEmail','$userPassword')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: ../index.php?msg=با موفقیت ثبت نام شدید.");
            exit();
        }else{
            header ("Location: ../index.php?error=خطا در ثبت نام");
        exit();
        }
    }else{
        header ("Location: ../index.php?error=پر کردن تمامی فیلدها الزامی است.");
        exit();
    }
}
