<?php
class EditUser extends view
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
    <h1> Edit user</h1>
    <table class="center">
  <thead>
    <tr>
    <th>userName</th>
      <th>Fisrt Name</th>
      <th>Last Name</th>
      <th>Edit</th>
      <th>delete</th>

    </tr>
  </thead>
    <?php
    $i=0;
    
  while($i<$this->model->getCustomer())
  {
    ?>
    </thead>
  <tbody>
    <tr>
    </tr>
    <?php $var= $this->model->getID()[$i];
    $_SESSION['ID'] = $var;
    ?>
    <td><?php   echo $this->model->getUsername($this->model->getID()[$i]); ?></td>
    <td><?php   echo $this->model->getFname($this->model->getID()[$i]); ?></td>
    <td> <?php echo $this->model->getLname($this->model->getID()[$i]);$i++;?></td> 
   <td> <a href="<?php echo URLROOT;?>pages/EditProfile?id=<?php echo $var;?>" class="Edit"> Edit</td>
   <td> <a href="<?php echo URLROOT;?>pages/EditProfile?id=<?php echo $var;?>" class="delte"> delte</td>


  
    <?php
  }  

  } 
}
?>