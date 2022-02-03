<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

if (isset($_SESSION["loggedin"])) { //checks that the user is logged in

  $title = 'Students records';

  $students = $pdo->query("SELECT * FROM students ORDER BY student_id DESC");
  $students->execute();
  foreach($students as $students) {?>
  <p><?=$students['first_name']?></p>
  <p><?=$students['middle_name']?></p>
  <p><?=$students['surname']?></p>
  <p><?=$students['term_address']?></p>
  <p><?=$students['non_term_address']?></p>
  <p><?=$students['phone_number']?></p>
  <p><?=$students['email_address']?></p>
  <p><?=$students['student_record_status']?></p>
  <p><?=$students['entry_qualification']?></p>
  <p><?=$students['dormancy_reason']?></p>
  <p><?=$students['gender']?></p>
  <p><?=$students['staff_id']?></p>
  <p><?=$students['course_year']?></p>
  <p><?=$students['emergency_contact']?></p>
  <p><?=$students['additional_information']?></p>
 
<?php
} 

$content = '
<div class = "login">
<h1> Other records </h1>
</div>
<?php
';
//sets the content inside the page
  //  foreach($students as $students) {
  // echo ($students['first_name']);
  // $content = $content . $students['middle_name'];
  //  $content = $content . $students['surname'];
  //  $content = $content . $students['term_address'];
  //  $content = $content . $students['non_term_address'];
  //  $content = $content . $students['phone_number'];
  //  $content = $content . $students['email_address'];
  //  $content = $content . $students['student_record_status'];
  //  $content = $content . $students['entry_qualification'];
  //  $content = $content . $students['dormancy_reason'];
  //  $content = $content . $students['gender'];
  //  $content = $content . $students['staff_id'];
  //  $content = $content . $students['course_year'];
  //  $content = $content . $students['emergency_contact'];
  //  $content = $content . $students['additional_information'];
  

//else { //displays an access denied if the user is not logged in

  //$content = '
  //';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
