<?php require "views/componet/header.php" ?>
<body>
<div class="d-flex justify-content-center align-items-center mt-5">
   <div class="card"">
    <div class="d-flex justify-content-center align-items-center">
        <img src="public/data/img/logo.png" class="card-img-top " style="width: 100px; height: 100px;" alt="...">

    </div>
   <div class="card-body">

       <?php if (isset($errors)):?>
       <div class="alert alert-danger">Account Invilid !
          </div>
       <?php elseif (isset($login)):?>
        <div class="alert alert-danger">
            Your Not Login!
        </div>
       <?php endif;?>

       <form action="adminlogin" method="post">
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email</label>
               <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" id="exampleInputPassword1">
           </div>
           <div class="d-flex justify-content-end">
               <button type="submit" class="btn btn-primary">Login</button>
           </div>

       </form>

       </div>
   </div>

</div>

</body>
<?php require "views/componet/fooder.php" ?>


