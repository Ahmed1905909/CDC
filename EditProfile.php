<?php
 
class EditProfile extends View{
    Public function output(){
      
      echo "session". $_SESSION['ID'] ; 
    ?>
 <?php require APPROOT . '/views/inc/header.php'; ?>

 <link rel="stylesheet" href="<?php echo URLROOT; ?>css/EditProfile.css">
 <?php $action = URLROOT . 'Users/EditProfile'; ?>
        <form action="<?php echo $action ?>" class="col-md-7" method="POST">
      <div class="flex">
         <div class="inputBox">
            <span>First Name : </span>
            <input type="text" name="First_Name" required class="Fname" value="<?php echo $this->model->getFname($_GET['id']); ?> " >
            <span>Last Name : </span>
            <input type="text" name="Last_Name" required class="Lname" value="<?php echo $this->model->getLname($_GET['id']);?> ">
         </div>
            <span>email : </span>
            <input type="Email" name="Email" required class="Email" value="<?php echo $this->model->getEmail($_GET['id']);?> " >
            <span>Phone Number : </span>
            <input type="text" name="Phone_Number" required class="Number" placeholder=""  value="<?php echo $this->model->getPhoneNo($_GET['id'])?> " >
         <div class="inputBox">
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" value="update profile" name="update" class="submit-btn">
         <a href="<?php URLROOT . 'pages/Home';?>" class="cancelbtn">cancel</a>
      </div>
   </form>

</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>

    <?php
}
}
?>
