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
  
<div id = "container">
  <div class = "card1">
      <form action="" method="post">
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
  <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

       

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7r90 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> anasbhai@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/CDC.MIU/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.instagram.com/cdc.miu/?hl=en"> <i class="fab fa-instagram"></i> instagram </a>
           
        </div>

    </div>
</section>
<?php
  }
} 

?>