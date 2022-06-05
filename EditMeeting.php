<?php
 
class EditMeeting extends View{
    Public function output(){
      
     echo "session". $_SESSION['ID'] ; 
    ?>
 <?php $action = URLROOT . 'pages/Home'; ?>
 <?php require APPROOT . '/views/inc/header.php'; ?>

 <link rel="stylesheet" href="<?php echo URLROOT; ?>css/EditProfile.css">
 <?php $action = URLROOT . 'Users/EditMeeting'; ?>
    
        <form action="<?php echo $action ?>" class="col-md-7" method="POST">
        
      <div class="flex">
            <span>Meeting Place </span>
            <input type="text" name="Meeting_Place" required class="MeetingPlace" value="<?php echo $this->model->getMeetingPlace($_GET['id']);?> ">
         </div>
         <div class = "dateBox">
                <label for="Meeting_Date">Meeting Date:</label>
                    <input type="date" id="birthday" name="Meeting_Date"  value="<?php echo $this->model->getMeetingDate($_GET['id']);?>">
            </div>
      <div class="flex-btn">
         <input type="submit" value="update meeting" name="update" class="submit-btn">
         <a href="<?php URLROOT . 'pages/Home';?>" class="cancelbtn">cancel</a>
      </div>
   </form>

</section>
    <?php
}
}
?>
