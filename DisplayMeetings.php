<?php
class DisplayMeetings extends view
{

  public function output()
  {
    
    ?>
           <?php require APPROOT . '/views/inc/header.php'; ?>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>   
        <link rel="stylesheet" href="<?php echo URLROOT; ?>css/Display.css">

    <title>complete responsive hospital website design </title>
    <h1> Meetings</h1>
    <table class="center">
  <thead>
    <tr>
    <th>Meeting date</th>
      <th>meeting place</th>
      <th>Edit</th>
      <th>delete</th>

    </tr>
  </thead>
    <?php
    $i=0;
    
  while($i<$this->model->getmeetingdetails())
  {
    ?>
    </thead>
  <tbody>
    <tr>
    </tr>
    <?php $var= $this->model->getID()[$i];

    $_SESSION['ID'] = $var;
    ?>
    <td><?php   echo $this->model->getMeetingDate($this->model->getID()[$i]); ?></td>
    <td><?php   echo $this->model->getMeetingPlace($this->model->getID()[$i]); $i++?></td>
   <td> <a href="<?php echo URLROOT;?>pages/EditMeeting?id=<?php echo $var;?>" class="Edit"> Edit</td>
   <td> <a href="<?php echo URLROOT;?>pages/Meetings?id=<?php echo $var;?>" class="Delete"> Delete</td>
   





  
    <?php
  }  
  ?>
  
  <a href="<?php echo URLROOT;?>pages/Meetings" class="add-btn">Add new meeting</a>
<?php
  } 
}
?>