<?php
class Home extends view
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
    <!-- <link rel="stylesheet" href="css/CDC1c.css"> -->
    <!-- $registerUrl = URLROOT . 'users/register'; -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/CDC1c.css">

</head>
<body>
    

        <a href="#" class="logo"> <i class="fa-light fa-teeth"></i> CDC MIU. </a>
    
    
       <?php require APPROOT . '/views/inc/header.php'; ?>
    <section class="home" id="home">

        <div class="image">
            <img class="image" src="<?php echo ImageRoot . "Rotation.gif" ; ?>" >
        </div>
    
        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!</p>
            <a href="<?php echo URLROOT;?>pages/about" class="btn"> More info <span class="fas fa-chevron-right"></span> </a>
        </div>
    
    </section>
    <?php require APPROOT . '/views/inc/footer.php'; ?>


   
<?php
  }
} 

?>