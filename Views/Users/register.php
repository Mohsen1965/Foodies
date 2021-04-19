<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Public/css/UserStyle/UserRegisterStyle.css">
</head>

<body>

<h2>Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <p>Register<hr></p>
  <div class="form-row">
    <div class="col-sm-2">
      <label for="Nom"><b>Nom</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Nom" name="Nom" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-sm-2">
      <label for="Prenom"><b>Prenom</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Prenom" name="Prenom" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-sm-2">
      <label for="Age"><b>Age</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Age" name="Age" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-sm-2">
      <label for="Adresse"><b>Adresse</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Adresse" name="Adresse" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-2">
      <label for="Mobile"><b>Mobile</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Mobile" name="Mobile" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-2">
      <label for="Email"><b>Email</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Email" name="Email" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-2">
      <label for="Profile"><b>Profile</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer Profile" name="Profile" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-2">
      <label for="UserName"><b>Username</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Entrer UserName" name="UserName" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-2">
      <label for="psw"><b>Password</b></label>
    </div>
    <div class="col-sm-10">
      <input type="password" placeholder="Enter Password" name="psw" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-2">
      <label for="ConfirmPassword"><b>Confirmer Password</b></label>
    </div>
    <div class="col-sm-10">
      <input type="text" placeholder="Confirmer Password" name="ConfirmPassword" required>
    </div>
  </div>



      <label>
        <input  type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <center>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Register</button>
      </center>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
