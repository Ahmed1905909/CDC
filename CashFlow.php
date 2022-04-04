<?php
class CashFlow extends view
{

  public function output()
  {
      ?>
      <link rel="stylesheet" href="<?php echo URLROOT; ?>css/CDC1c.css">
      <link rel="stylesheet" href="<?php echo URLROOT; ?>css/CashFlow.css">

      <?php require APPROOT . '/views/inc/header.php'; ?>
    <div id = "container">
    <div class = "card1">
        <form action="" method="post">
            <h1> Cash Flow  </h1>
  <br>
            <h1> 10000  </h1>
            <br>   
            <input type = "text" class = "Email" placeholder="Cash"> 
            &emsp;
            &emsp;
            &emsp;
           <br>
            <br>
            
  
            <button class = "button" href = "#">In Come</button>
  
            <br>
            <br>
            <a href="CDC1h.html" class="cancelbtn">Out Come</a>
  
  
        </form>    
        <br>
        <br>
        <br>
        <br>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php
  }
}
?>