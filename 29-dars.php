<!-- 29-dars. PHP da form ($_POST va $_GET) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="ism">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="parol">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form><br><br>

<?php

  $name=$_POST['ism'];
  $password=$_POST['parol'];

  if(empty($name))
  {
   echo " Ism kiritilmadi! <br>";
  }
  else
  {
   echo "Sizning ismingiz: ".$name."<br>";
  }
  
  if(empty($password))
  {
   echo " Parol kiritilmadi! <br>";
  }
  else
  {
   echo "Sizning parolingiz: ".$password."<br>";
  }

?>
