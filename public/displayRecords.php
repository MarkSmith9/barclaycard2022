<!DOCTYPE html>
<html lang="en-gb">
	<head>
		<meta charset="utf-8" />
		<!-- sets character encoding as required by w3c -->
		<title>Student Records</title>
		<!--inserts the  title from the source file-->
		<link rel="icon" href="image/favicon.svg" />
		<!--links the favicon-->
		<link rel="stylesheet" href="style.css" />
		<!--links the style sheet-->
	</head>

	<body>
		<header>
			<div class="navbar">
				<!--creates the top navigation bar-->
				<img
					src="image/logo.svg"
					width="50"
					height="50"
					alt="WUC logo"
					class="navbutton"
					onclick="window.location.href='/index.php';"
				/>
				<div class="push-right">
					<button
						onclick="window.location.href='/student_records.php';"
						class="navbutton"
					>
						Students
					</button>
				</div>
				<div>
					<button
						onclick="window.location.href='/staff_records.php';"
						class="navbutton"
					>
						Staff
					</button>
				</div>
				<div>
					<button
						onclick="window.location.href='/timetable.php';"
						class="navbutton"
					>
						Timetables
					</button>
				</div>
				<div>
					<button
						onclick="window.location.href='/forms.php';"
						class="navbutton"
					>
						Forms
					</button>
				</div>
				<div>
					<button
						onclick="window.location.href='/displayRecords.php';"
						class="navbutton"
					>
						Students Records
					</button>
				</div>
				<div class="push-right">
					<img
						src="image/bell.svg"
						alt="notifications"
						width="50"
						height="50"
						class="navbutton"
						onclick="window.location.href='/notifications.php';"
					/>
				</div>
				<div>
					<img
						src="image/setting.svg"
						alt="settings"
						width="50"
						height="50"
						class="navbutton"
						onclick="window.location.href='/settings.php';"
					/>
				</div>
				<div>
					<img
						src="image/exit.svg"
						width="50"
						height="50"
						alt="log out"
						class="navbutton"
						onclick="window.location.href='/logout.php';"
					/>
				</div>
			</div>
		</header>
		<div class="main">
			<div class="sidebar">
				<!--creates the side bar-->
				<div>
					<img
						src="image/profile.svg"
						width="50"
						height="50"
						class="sidebutton"
						alt="profile-picture"
						onclick="window.location.href='/profile.php';"
					/>
					<p>profile</p>
				</div>
				<div>
					<img
						src="image/dash.svg"
						width="50"
						height="50"
						class="sidebutton"
						alt="dashboard"
						onclick="window.location.href='/index.php';"
					/>
					<p>dashboard</p>
				</div>
				<div>
					<img
						src="image/star.svg"
						width="50"
						height="50"
						class="sidebutton"
						alt="favourites"
						onclick="window.location.href='/favourites.php';"
					/>
					<p>favourites</p>
				</div>
				<div>
					<img
						src="image/message.svg"
						width="50"
						height="50"
						class="sidebutton"
						alt="messages"
						onclick="window.location.href='/messages.php';"
					/>
					<p>messages</p>
				</div>
				<div class="push-down">
					<img
						src="image/calendar.svg"
						width="50"
						height="50"
						class="sidebutton"
						alt="diary"
						onclick="window.location.href='/diary.php';"
					/>
					<p>diary</p>
				</div>
				<div>
					<img
						src="image/search.svg"
						width="50"
						height="50"
						class="sidebutton"
						onclick="window.location.href='/search.php';"
						alt="search"
					/>
					<p>search</p>
				</div>
				<div>
					<button
						onclick="window.location.href='/placeholder.php';"
						class="sidebutton texticon"
					>
						?
					</button>
					<p>help</p>
				</div>
			</div>
			<div class="content-box">
<?php	
  // connects to the database
$pdo = new PDO('mysql:host=localhost;dbname=WUC_RMS;charset=utf8', 'student', 'student');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
  $students = $pdo->query("SELECT * FROM students ORDER BY student_id DESC");
  $students->execute();
   // list students records from database
  foreach($students as $students) {?>
 
  <center>
  <h2>Student Information</h2>
  <table>
  <ul>
  
  <p>Student's first name: <strong><em><?=$students['first_name'];?></strong></em></p>
  <p>Student's middle name: <strong><em><?=$students['middle_name'];?></strong></em></p>
  <p>Student's surname: <strong><em><?=$students['surname'];?></strong></em></p>
  <p>Student's Temporal address: <strong><em><?=$students['term_address'];?></strong></em></p>
  <p>Student's Term address: <strong><em><?=$students['non_term_address'];?></strong></em></p>
  <p>Student's Contact number: <strong><em><?=$students['phone_number'];?></strong></em></p>
  <p>Student's Email: <strong><em><?=$students['email_address'];?></strong></em></p>
  <p>Student's Record status: <strong><em><?=$students['student_record_status']?></strong></em></p>
  <p>Student's Entry Qualification: <strong><em><?=$students['entry_qualification'];?></strong></em></p>
  <p>Student's Dormancy Reason: <strong><em><?=$students['dormancy_reason'];?></strong></em></p>
  <p>Student's Gender: <strong><em><?=$students['gender'];?></strong></em></p>
  <p>Student's Staff ID: <strong><em><?=$students['staff_id'];?></strong></em></p>
  <p>Student's Course Year: <strong><em><?=$students['course_year'];?></strong></em></p>
  <p>Student's Emergency Contact: <strong><em><?=$students['emergency_contact'];?></strong></em></p>
  <p>Student's Additional information: <strong><em><?=$students['additional_information'];?></strong></em></p>
  <hr>
  
  </ul>
  </table>
  </center>
<?php
} 
?>


<!--inserts the content from the PHP file in the main website-->
			</div>
		</div>
		<script src="js/scripts.js"></script>
		<!--runs the JavaScript at the bottom as JavaScript runs last, remove this if no javascript is ran-->
	</body>
</html>
