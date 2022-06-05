<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
class Material extends View
{
  public function output()
  {
    ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Header.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Login.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Register.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>js/main.js">
<link rel="stylesheet" href="<?php echo URLROOT; ?>js/newFile.js">

<a href="CDC1h.html" class="logo"> <i class="fa-light fa-tooth"></i> CDC MIU. </a>

</header>
<br>
<br>
<br>
<br>

<section id="contact" class="container-fluid">

    <div class="heading text-center">
        <h1><span>Add Material
             </div>

    <div class="row justify-content-center">
    <?php $action = URLROOT . 'Users/Material'; ?>
    
    <form action="<?php echo $action ?>" class="col-md-7" method="POST" onsumbit="return validate()">
        <div class="inputBox">

            <input type="text" name="Material_Name">
            <h3>Material Name</h3>
        </div> 
            
        <div class="inputBox">

        <input type="text" name="Quantity">
        <h3>Material Quantity</h3>
        </div> 
            <input name="submit" type="submit" value="Add">
                      

        </form>

    </div>

</section>
<?php
  }
}
?>