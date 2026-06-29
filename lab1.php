<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Service Portal</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Student Service Portal</h1>
    <p>Submit your academic service requests easily.</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
</nav>

<main>

<section class="description">
    <h2>Available Services</h2>

    <p>
        Students can request Transcript,
        ID Card, Certificate,
        and General Inquiry services using this portal.
    </p>

</section>

<section class="form-section">

<h2>Service Request Form</h2>

<form>

<label>Student Name</label>
<input type="text" required>

<label>Student ID</label>
<input type="text" maxlength="10" required>

<label>Email</label>
<input type="email" required>

<label>Service Type</label>

<select>

<option>Transcript Request</option>
<option>ID Card Issue</option>
<option>General Inquiry</option>

</select>

<label>Urgency Level</label>

<input type="radio" name="urgency"> Low
<input type="radio" name="urgency"> Medium
<input type="radio" name="urgency"> High

<br><br>

<label>Additional Details</label>

<textarea rows="5"></textarea>

<input type="submit" value="Submit">

</form>

</section>

</main>

<footer>

<p>© 2026 Student Service Portal. All Rights Reserved.</p>

</footer>

</body>
</html>