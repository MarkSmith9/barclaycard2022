<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

if (isset($_SESSION["loggedin"])) { //checks that the user is logged in

// insert data to tables
if (isset($_POST['submit'])) {

 $stmt = $pdo->prepare ('INSERT INTO students (first_name, middle_name, surname, term_address, non_term_address,
  phone_number, email_address, student_record_status, entry_qualification, dormancy_reason, gender, staff_id, course_year,
  student_image, emergency_contact, additional_information)

  VALUES (:first_name, :middle_name, :surname, :term_address, :non_term_address, :phone_number, :email_address,
  :student_record_status, :entry_qualification, :dormancy_reason, :gender, :staff_id, :course_year, :student_image, :emergency_contact,
   :additional_information)');
 
 $values = [
  'first_name' => $_POST['first_name'],
  'middle_name'=> $_POST['middle_name'],
  'surname' => $_POST['surname'],
  'term_address' => $_POST['term_address'],
  'non_term_address' => $_POST['non_term_address'],
  'phone_number' => $_POST['phone_number'],
  'email_address' => $_POST['email_address'],
  'student_record_status' => $_POST['student_record_status'],
  'entry_qualification' => $_POST['entry_qualification'],
  'dormancy_reason' => $_POST['dormancy_reason'],
  'gender' => $_POST['gender'],
  'staff_id' => $_POST['staff_id'],
  'course_year' => $_POST['course_year'],
  'student_image' => $_POST['student_image'],
  'emergency_contact' => $_POST['emergency_contact'],
  'additional_information' => $_POST['additional_information']
 ];
$stmt->execute($values);
$content = 'Record successfully inserted';
 }
// forms
 else {
$title = 'Students records';
$content = '
<table>
<div class = "login">
<h1> Student records </h1>

<form action="" method="POST">
<label>Firstname:</label> 
<input type="text" name="first_name"/>
<br>
<br>
<label> Middlename :</label>
<input type="middle_name" name="middle_name"/>
<br>
<br>
<label>Surname:</label>
<input type ="text" name="surname"/>
<br>
<br>
<label>Term Address:</label>
<textarea id="term_address" name="term_address" rows="4" cols="50">
</textarea>
<br>
<br>
<label>Non-term address:</label>
<textarea id="non_term_address" name="non_term_address" rows="4" cols="50">
</textarea>
<br>
<br>
<label>Contact Number:</label> 
<input type="text" name="phone_number" />
<br>
<br>
<label>Email:</label>
 <input type="text" name="email_address"/>
 <br>
 <br>
<label>Student record status:</label>
 <input type="text" name="student_record_status"/>
 <br>
 <br>
<label>Entry Qualification:</label> 
<textarea id="enrty_qualification" name="entry_qualification" rows="4" cols="50">
</textarea>
<br>
<br>
<label>Course ID:</label>
<input type="text" name="course_id"/>
<br>
<br>
<label>Dormancy reason:</label> 
<textarea id="dormancy_reason" name="dormancy_reason" rows="4" cols="50">
</textarea>
<br>
<br>
<label>Gender:</label> 
<input type="text" name="gender"/>
<br>
<br>
<label>staff-id:</label> 
<input type="text" name="staff_id"/>
<br>
<br>
<label>Year of Course:</label>
 <input type="text" name="course_year"/>
 <br>
 <br>
<label>student_image:</label>
 <input type="text" name="student_image"/>
 <br>
 <br>
<label>Emergency Contact:</label>
 <input type="text" name="emergency_contact"/>
 <br>
 <br>
<label>Additional Information:</label>
<textarea id="addiional_information" name="additional_information" rows="4" cols="50">
</textarea>
<br>
<br>
<input type="submit" name="submit" value="Submit" />
</form>
</div>

';//sets the content inside the page
}
}
else { //displays an access denied if the user is not logged in
  
  // $content = 'Access denied';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
