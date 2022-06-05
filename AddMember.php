<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php
class AddMember extends view
{
  public function output()
  {
    ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Header.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Login.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/footer.css">

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/Register.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>js/main.js">
<link rel="stylesheet" href="<?php echo URLROOT; ?>js/newFile.js">

<?php require APPROOT . '/views/inc/header.php'; ?>

<br>
<br>
<br>
<br>

<section id="contact" class="container-fluid">
 
    <div class="heading text-center">
        <h1><span>Add Member
    </div>

    <div class="row justify-content-center">
    <?php $action = URLROOT . 'users/AddMember'; ?>
    <div class = "formData" >
        <form action="<?php echo $action ?>" class="col-md-7" name = "Ahmad" method="POST" onsubmit ='return validate()' >
            <div class="inputBox">

                <input type="text" name="Username" required  >
                <h3>User Name</h3>
            </div> 
                
            <div class="inputBox">
                <input type="text" name="First_Name" required>
                <h3>first Name</h3>
            </div>

            <div class="inputBox">
                <input type="text" name="Last_Name" required>
                <h3>Last Name</h3>
            </div>

            <div class="inputBox">
                <input type="text" name="Academic_Year" required>
                <h3>Acadmic year</h3>
            </div>

            <div class="Box">
                <label for="Box">Committe:</label>
                <select name = "Committee">
                    <option value = ""> <--select--></option> 
                    <option value = "HR" >HR</option>
                    <option value = "PR">PR</option>
                    <option value = "Media">Media</option>
                    <option value = "C / D">C/D</option>
                    <option value = "DVP">DVP</option>
                    <option value = "AC">AC</option>
                 </select>

                 <div class = "dateBox">
                <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="Date_of_Birth">
            </div>

            <div class="Role">
                <label for="Role">Role:</label>
                <select name = "Role">
                <option value = ""> <--select--></option> 
                    <option value = "Admin" >Admin</option>
                    <option value = "HR_Admin">HR admin</option>
                    <option value = "Media_admin">Media admin</option>
                 </select>

            <div class="Box">
                <label for="Box">Gender:</label>
                <select name = "Gender">
                <option value = ""> <--select--></option> 
                    <option value = "Female" >Female</option>
                    <option value = "Male">Male</option>
                 </select>
             </div>
             <!-- <div class="user-profile">
				<div class="user-avatar">
					<img src="" alt="Profile Picture">
				</div> -->
            <!-- <div class="form-group">
            <input type="file" id="profile_Picture" name="profile_Picture"></div>
        </div> -->

            <div class="inputBox">
                <input type="email" name="Email" required >
                <h3>e-mail</h3>
            </div>

            <div class="inputBox">
                <input type="password" name="Password" required minlength ='6', maxlength ='50' >
                <h3>Password</h3>
            </div>
            
            <div class="inputBox">
                <input type="password" name="Confirm_Password" required >
                <h3>Confirm_Password</h3>
            </div>

            <div class="inputBox">
                <input type="Phone" name="Phone_Number"required>
                <h3>Phone Number</h3>
            </div>
            <input name="submit" type="submit" value="Add" >
            </form>
  </div>

            <script>

        //         function validate()
        // {
        //     var Password = document.forms["Ahmad"]["Password"].value;
        //     var ConfirmPassword = document.forms["Ahmad"]["Confirm_Password"].value;
        //     // var Name = document.getElementById('UserName').value;
        //     // var Email = document.getElementById('Email').value;
        //     // var Password = document.getElementById('Password').value;
        //     // var ConfirmPassword = document.getElementById('Confirm_Password').value;
        //     if(Password!=ConfirmPassowrd)
        //     {
        //         document.getElementsByClassName( "errorMessage" )[0].style.visibility = "visible";
        //         document.getElementsByClassName( "errorMessage" )[0].innerHTML = "Please match passwords";
        //         return false;
        //     }
        //     else{return true;}
        // }
             </script>
                      


       

    </div>

</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<?php
  }
}
?>