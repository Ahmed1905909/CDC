<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
class Meetings extends View
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
        <h1><span>Add Meeting
    </div>

    <div class="row justify-content-center">
    <?php $action = URLROOT . 'Users/Meetings'; ?>
    
    <form action="<?php echo $action ?>" class="col-md-7" method="POST" onsumbit="return validate()">
        <div class="inputBox">

            <input type="text" name="Meeting_Place">
            <h3>meeting place</h3>
        </div> 
            
        <div class = "dateBox">
                <label for="birthday">Meeting Date:</label>
                    <input type="date" id="birthday" name="Meeting_Date">
            </div>
            <input name="submit" type="submit" value="Add">
                      

        </form>

    </div>

</section>
<?php
  }
}
?>