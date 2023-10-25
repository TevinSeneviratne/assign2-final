<!--
	filename: apply.html
    author: Tevin Seneviratne
    created: 23/08/2023
    last modified: 23/08/2023
    description: Job application form 
-->

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Creating a job application form" > 
    <meta name="keywords" content="HTML, CSS, Javascript" > 
    <meta name="author" content="Tevin Seneviratne" >
<title>Job Application Form</title>

<link rel="stylesheet" type="text/css" href="Styles/style.css">

<body>
    <header>
        <nav>
            <img src="images/logo.png" alt="Logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="enhancements.php">Enhancements</a></li>
                <li><a class="active" href="apply.php">Apply</a></li>
                <li><a href="mailto:104315180@student.swin.edu.au">Email</a></li>
			</ul>
        </nav>
    </header>
    <h1>Join Code Crafters : Unlock your full potential</h1>
    <form action="processEOI.php" method="post">
        <p><label for="JobID">Job Reference Number:</label>
            <input type="text" name="JobID" id="JobID" value="" required="required" pattern="[A-Za-z0-9]{5}" maxlength="5">
        </p>
        <p> <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="" required="required" pattern="^[a-zA-Z]+$" maxlength="20"> 
        </p>
        <p> <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="" required="required" pattern="^[a-zA-Z]+$" maxlength="20"> 
        </p>
        <p><label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="" size="15">


        </p>
        <fieldset>
            <legend>Gender:</legend>
            <label>
                <input type="radio" name="gender" value="male" required="required" checked="checked"> Male
            </label>
            <label>
                <input type="radio" name="gender" value="female" required> Female
            </label>
            <label>
                <input type="radio" name="gender" value="other" required> Other
            </label>
        </fieldset>
        <p><label for="streetaddress">Street Address:</label>
            <input type="text" name="streetaddress" id="streetaddress" value="" required="required" maxlength="40">
        </p>
        <p><label for="suburb">Suburb/Town:</label>
            <input type="text" name="suburb" id="suburb" value="" required="required" maxlength="40">
        </p>
        <p>
			<!--Creating drop down menus-->
			<label for="state">State</label>
				<select name="state" id="state" required="required">
					<option value="">Please Select</option>
					<option value="VIC">VIC</option>
					<option value="NSW">NSW</option>
					<option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
				</select>
		</p>
        <p>
            <label for="postcode">Post Code:</label>
            <input type="text" name="postcode" id="postcode" value="" required="required" pattern="\d{4}" maxlength="4">
        </p>
        <p><label for="email">Email address:</label>
            <input type="email" name="email" id="email" value="" required="required">
        </p>
        <p><label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" value="" required="required" pattern="[0-9\s]{8,12}" maxlength="12">
        </p>
        <fieldset>
            <legend>Required skill list:</legend>
            <!--Creating checkboxes-->
            <label for="ITDegree">Bachelor's degree in Computer Science, Information Technology, or a related field</label>
                <input type="checkbox" id="ITDegree" name="Skills[]" value="ITDegree" checked="checked"> <br>
            <label for="experience">Minimum 2 years of web development experience</label>
                <input type="checkbox" id="experience" name="Skills[]" value="experience"> <br>
            <label for="HTML/CSS">Vast knowladge in HTML5 and CSS3</label>
                <input type="checkbox" id="HTML/CSS" name="Skills[]" value="HTML/CSS"> <br>
            <label for="programming">Backend Programming</label>
                <input type="checkbox" id="programming" name="Skills[]" value="programming"> <br>
            <label for="java">JavaScript</label>
                <input type="checkbox" id="java" name="Skills[]" value="java">
            <!--Creating a description box-->
            <p><label for="otherskills">Description of Other Skills</label></p>
                <textarea id="otherskills" name="otherskills" rows="15" cols="50" placeholder="Write a description of your other skills here..."></textarea>
        </fieldset>
        <!--Submit or reset the form data-->
	    <input type= "submit" value="Apply" class="animated-button">
	    <input type= "reset" value="Reset Form" >
    </form> 
    <footer>
        <h4>Useful Links</h4><br>
        <h4><a href="https://www.swinburne.edu.au/">Swinburne University</a></h4><br>
        <h4><a href="https://youtu.be/pSNTAPJp8Rk?si=KxMNFiMkJfnZMXPi">YouTube Video</a></h4>
        
        <p>&#169; TEAM CODE CRAFTERS</p>
        <p>Assignment Part 01</p>
    </footer>
</body>
</html>

