<!DOCTYPE html>
<html>
	<!--ADD ANY USEFUL TIPS, otherwise ... DO NOT FUCK WITH THE COMMENTS. please and thank you.-->
<head>
	<title>CS4320 - Group G</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	<script src="../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../js/isinter.js"></script>
</head>
<body>

	<!-- Header/Footer -->
		
		<div class="header shadowheader">			
			<h1>Step 2: International</h1>		
		</div>			
		
		<div class="footer shadowfooter">			
			<h4>Copyright &copy; Group G - Computer Science Department</h4>		
		</div>			

		
	<!-- International/Non-International -->
	
	<form action="something.php" method="post">
		
		<div class="toppadding5 centerdisplay">
			<p class="centerpls">
				<label class="leftlabel">What type of student are you?</label>
				<select id="status" name="status">
					<option value="status">Select</option>
					<option value="international">International</option>
					<option value="noninternational">Non-International</option>
				</select>
			</p>
		</div>

	 <!-- Language Test part -->

		<div class="centerdisplay">
			<p class="centerpls" id="interinfo" style="display:none"> 
				<label class="leftlabel">Have you passed the SPEAK Test?</label>
				<select id="speaktest" name="speaktest">
						<option value="select">Select</option>
						<option value="passed">Speak test passed</option>
						<option value="scheduled">Speak test scheduled</option>
						<option value="notscheduled">Speak test not scheduled</option>
				</select>
				<label>(English proficiency Test)</label>
			</p>

			<p class="centerpls" id="testinfo" style="display:none">
				<label class="leftlabel" for="test_score">Test score:</label>
				<input type="text" name="test_score" maxlength="5" placeholder="100"></input>
				<br>
			</p>
			
			<p class="centerpls" id="testinfo2" style="display:none">
				<label class="leftlabel" for="test_date">Test date:</label>
				<input type="date" name="test_date" maxlength="40"></input>
				<br>
			</p>

			<p class="centerpls" id="test_schedule" style="display:none">
				<label class="leftlabel">Please provide the scheduled test date:</label>
				<input type="date" name="test_date" size="20" maxlength="40"></input>
				<br>
			</p>

			<p class="centerpls" id="disqualified" style="display:none">
				<br><br><br><br>
				<b> Sorry, you do not qualify for a TA/PLA position!</b><br/><br/>
				<br><br><br><br><br><br><br>
			</p>

			<p class="centerpls" id="autoqualified" style="display:none">
				<br><br><br><br>
				<b>Your language automatically qualifies you for a TA/PLA position!</b>
				<br><br><br><br><br><br><br>
			</p>
		</div>


	 <!-- At least one semester part -->

		<div class="centerdisplay">
			<p class="centerpls" id="newstudent" style="display:none">
				<label class="leftlabel">Have you finished at least one semester?</label>
				<input type="radio" name="answer" value="Yes" checked>Yes</input>
				<input type="radio" name="answer" value="No"> No</input>
			</p>
		</div>       


	 <!-- Onita part -->

		<div class="centerdisplay">
			<p class="centerpls" id="onita" style="display:none">
				<label class="leftlabel">Have you attended the ONITA?</label>
				<input type="radio" name="answer" value="Yes">Yes</input>
				<input type="radio" name="answer" value="No"> No</input>
				<input type="radio" name="answer" value="Will_attend">Will attend in Aug/Jan</input>
			</p>
		</div>     

	 <!-- Go to nextpage or save data part -->

		<div class="centerpls">
			<p class="centerdisplay nextbutton" id="click" style="display: none">
				<!--<label for="submit">Click here to save your info:</label>
				<input type="submit" name = "submit" value="Save current info" /><br/><br/>
				<label for"nextpage">Click here to go to the next page:</label>   -->
				<input  type="submit" name="submit" value="Proceed to the next step">
			</p>			
		</div>
		
	 <!-- Go to homepage -->

		<div class="centerpls">
			<p class="centerdisplay nextbutton" id="home" style="display: none">
				<input  type="submit" name="submit" value="Proceed to the home page">
			</p>			
		</div>	
	
	</form>
		
</body>