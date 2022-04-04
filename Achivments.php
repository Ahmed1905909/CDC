<?php
class Achivments extends View
{
  public function output()
  {
      ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>complete responsive hospital website design </title>
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <!-- custom css file link  -->
        
        <link rel="stylesheet" href="<?php echo URLROOT; ?>css/CDC1c.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>css/Achivements.css">
    
    </head>
    
    <?php require APPROOT . '/views/inc/header.php'; ?>
   
    
        <br>
        <br>
        <br>
    
     <div class="about-section">
      <h1>Atchivements & Awards</h1>
      <p>Some text about who we are and what we do.</p>
      <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>
    
    <div class = "container">
    
        <div class="card">
          <img src="images/ahmedamr.jpg" alt="picture" style="width:100%">
          <div class="container">
            <h2>Atchive title</h2>
            
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            
          </div>
      </div>
    
    
    
    
        <div class="card">
          <img src="images/ahmedamr1.jpg" alt="picture" style="width:100%">
          <div class="container">
            <h2>Achive title</h2>
           
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          </div>
        </div>
      
        <div class="card">
          <img src="images/ahmedamr2.jpg" alt="picture" style="width:100%">
          <div class="container">
            <h2>Atchive title</h2>
            
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
           
          </div>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <?php
  }
}
?>