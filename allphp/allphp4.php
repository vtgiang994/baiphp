<!DOCTYPE html>
<html>
<head>
	<title>HTML5 Input Types Test</title>
	<style>
		input:invalid {
 background-color: red;
}
input:valid {
 background-color: lightgreen;
}
	</style>
</head>
<body>
	<h1>Testing the HTML5 Input Types</h1>
<fieldset>
<legend>HTML5 Input Fields</legend>
<label>
Color Selector
<input type="color" name="colortest">
</label><br>
<label>
Date Selector
<input type="date" name="datetest">
</label><br>
<label>
DateTime Selector
<input type="datetime" name="datetimetest">
</label><br>
<label>
DateTime-Local Selector
<input type="datetime-local" name="datetimelocaltest">
</label><br>
<label>
Email Selector
<input type="email" name="emailtest">
</label><br>
<label>
Month Selector
<input type="month" name="monthtest">
</label><br>
<label>
Number Selector
<input type="number" name="numbertest">
</label><br>
<label>
Range Selector
<input type="range" min=0 max=100 name="rangetest">
</label><br>
<label>
Search Selector
<input type="search" name="searchtest">
</label><br>
<label>
Telephone Selector
<input type="tel" name="teltest">
</label><br>
<label>
Time Selector
<input type="time" name="timetest">
</label><br>
<label>
URL Selector
<input type="url" name="urltest">
</label><br>
<label>
Week Selector
<input type="week" name="weektest">
</label>
<label>
Enter your daytime phone number:
<!-- <input type="tel" name="num" placeholder="(nnn)nnn-nnnn"> -->
<input type="text" name="lastname" required="required">
</label>
<br>
<h1>Testing for invalid data</h1>
<fieldset>
<legend>You must be over 18 to participate</legend>
<label>
Age:
<input type="number" name="age" min="18">
</label>
</fieldset>
</body>
</html>