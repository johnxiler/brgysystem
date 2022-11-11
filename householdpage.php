<?php session_start();
include "sidebarnav.php"; ?>
<body>
<div class="">
      <form class="household" method="POST">
         <p>HOUSEHOLD INFORMATION</p>
         <input type="text" class="personalinfo" placeholder="Lastname" required />
         <input type="text" class="personalinfo" placeholder="Firstname">
         <input type="text" class="personalinfo" placeholder="Middlename">
         <input type="text" class="personalinfo" placeholder="Extensions">
         <label>Gender: </label>
         <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
         </select>
         <input type="text" class="" placeholder="Address">
         <input type="text" class="" placeholder="Birthdate">
        <label>Civil Status: </label>
         <select name="civilstats" id="civilstats">
            <option value="Widow">Widow</option>
            <option value="Unmarried">Unmarried</option>
            <option value="Separated">Married</option>
         </select>
         <input type="submit">
      </form>
    </div>

</body>