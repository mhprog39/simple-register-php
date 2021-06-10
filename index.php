<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <div class="row text-right p-2">
           <div class="col-12">
            <h2 class="text-ceneter">ثبت نام ساده با PHP</h2>
            <!-- show error for user -->
            <?php  
              if(isset($_GET['error'])): ?>
            <div class="alert alert-danger">
            <?php echo $_GET['error'] ; ?> 
            </div>
            <?php endif ; ?>
            <!-- show success register for user -->
            <?php  
              if(isset($_GET['msg'])): ?>
            <div class="alert alert-success">
            <?php echo $_GET['msg'] ; ?> 
            </div>
            <?php endif ; ?>
            <form action="php/register.php" method="post">
            <div class="form-group">
    <label for="exampleInputPassword1">نام</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="نام">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">آدرس ایمیل</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1"  placeholder="ایمیل">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رمز</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="رمز">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">ثبت نام</button>
</form>
           </div>
       </div>
   </div> 
</body>
</html>