<?php
class DisplayMaterial extends view
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

    <h1> Material</h1>
    <table class="center">
  <thead>
    <tr>
    <th> material Name</th>
      <th>material quantity</th>
      <th>Edit</th>
    </tr>
  </thead>
    <?php
    $i=0;
    
  while($i<$this->model->getmaterialdetails())
  {
    ?>
    </thead>
  <tbody>
    <tr>
    </tr>
    <?php $var= $this->model->getID()[$i];

    $_SESSION['ID'] = $var;
    ?>
    <td><?php   echo $this->model->getMaterialName($this->model->getID()[$i]); ?></td>
    <td><?php   echo $this->model->getMaterialQuantity($this->model->getID()[$i]); $i++?></td>
   <td> <a href="<?php echo URLROOT;?>pages/EditMeeting?id=<?php echo $var;?>" class="Edit"> Edit</td>
   





  
    <?php
  }  
  ?>
  
  <a href="<?php echo URLROOT;?>pages/Material" class="add-btn">Add new</a>
  
<?php
  } 
}
?>