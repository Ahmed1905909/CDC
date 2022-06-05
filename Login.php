<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
class Login extends View{
    Public function output(){
       
        $this->DisplaySignin();
    }
public function DisplaySignin(){
    ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Login.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/CDC1c.css">

    <header class="header">

  <a href="CDC1h.html" class="logo"> <i class="fa-light fa-teeth"></i> CDC MIU. </a>
</header>
<br>
<br>
<br>
<br>
<br>
<?php $action = URLROOT . 'Users/Login'; ?>

<div id = "container">
  <div class = "card1">
      <form action="<?php echo $action ?>" method="POST">
          <h1> Proud CDC member Login here </h1>
          <br>   
          <input type = "text" class = "Email" placeholder="mail@website.com"> 
      
      
      <br>
      <br>
      
          <label for= "Password*"> Password</label>
          <br>
          
          <input type = "password" class = "password" placeholder="Min. 8 characters">  
         
          <br>
          <br>

          <input type="checkbox" id="vehicle1" class ="Remember" value="Bike">
          <label1 for="vehicle1"> Remember me </label> 
          &emsp;
          &emsp;
          &emsp;
         

          <a class = "forget" href="#">Forget password? </a>

          <br>
          <br>
          

          <a href="" class="link-btn">Log in</a>

          <br>
          <br>
          <a href="" class="cancelbtn">cancel</a>


      </form>    
      <br>
      <br>
      <br>
      <br>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>

    

    </div>
</section>
<?php
  }
} 

?>