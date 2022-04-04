<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
class AddMember extends view
{
  public function output()
  {
    ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Header.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Login.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Register.css">


<a href="CDC1h.html" class="logo"> <i class="fa-light fa-tooth"></i> CDC MIU. </a>

</header>
<br>
<br>
<br>
<br>

<section id="contact" class="container-fluid">

    <div class="heading text-center">
        <h1><span>Add Member
    </div>

    <div class="row justify-content-center">

        <form action="" class="col-md-7">
            <div class="inputBox">
                <input type="text">
                <h3>User Name</h3>
            </div> 
                
            <div class="inputBox">
                <input type="text" >
                <h3>first Name</h3>
            </div>

            <div class="inputBox">
                <input type="text" >
                <h3>Last Name</h3>
            </div>

            <div class="inputBox">
                <input type="text" >
                <h3>Acadmic year</h3>
            </div>

            <div class="Box">
                <label for="Box">Committe:</label>
                <select name = "Committe">
                    <option value = "HR" selected>HR</option>
                    <option value = "PR">PR</option>
                    <option value = "Media">Media</option>
                    <option value = "C / D">C/D</option>
                    <option value = "DVP">DVP</option>
                    <option value = "AC">AC</option>
                 </select>

                 <div class = "dateBox">
                <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
            </div>

            <div class="Box">
                <label for="Box">Gender:</label>
                <select name = "Committe">
                    <option value = "Female" selected>Female</option>
                    <option value = "Male">Male</option>
                 </select>
             </div>
            <div class="inputBox">
                <input type="email" >
                <h3>e-mail</h3>
            </div>

            <div class="inputBox">
                <input type="password" >
                <h3>Password</h3>
            </div>
            
            <div class="inputBox">
                <input type="password" >
                <h3>Confirm Password</h3>
            </div>

            <div class="inputBox">
                <input type="Phone" >
                <h3>Phone Number</h3>
            </div>
            <input type="submit" value="Add">
                      


        </form>

    </div>

</section>
<?php
  }
}
?>