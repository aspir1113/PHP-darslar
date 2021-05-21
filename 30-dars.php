<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<section style="padding-top:45px;">
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          Form Registration
        </div>
        <div class="card-body">
        <form action="<?php echo htmlspecialchars("30-dars-uchun.php");?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder='Name' required>
            </div><br>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder='Email' required>
            </div><br>
            <div class="form-group">
                <label for="post">Password</label>
                <input type="password" id="post" name="password" class="form-control" placeholder='Password' required>
            </div><br>
            <input type="submit" value="Register" class="btn btn-primary" style="margin-left:37%;" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>