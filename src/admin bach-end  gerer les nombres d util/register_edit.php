<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT ADMMIN PROFILE  </h6>
  </div>

  <div class="card-body">
<?php
  if (isset($_POST['edit_btn']))
{
    $id =$_POST['edit_id'];
    
    $query = "SELECT * FROM registratio WHERE id='$id' " ;
    $query_run = mysqli_query($connection,$query);


}

?>



  <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            



  </div>
  </div>
</div>

</div>






<?php
include('includes/scripts.php');
include('includes/footer.php');
?>