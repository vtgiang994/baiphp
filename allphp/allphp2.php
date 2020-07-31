<!DOCTYPE html>
<html>
<head>
	<title>Test color css3</title>
	<style>
		p {
			font-family: Arial, Helvetica, sans-serif;
			color: #ff0000;
			background-color: cyan;
			margin: 0px;
			padding: 10px;
		} 
		h1 {
			color: rgb(255, 165, 0);
			background-color: green;
			margin: 0px;
			padding: 10px;
		}
		table {border: 1px solid black;}
		table tr td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		header {
			background-color: red;
			margin: 0px;
			padding: 10px;
			height: 25px;
			width: 600px;
			position: absolute;
			top: 0px;
			left: 0px;
		}
		nav {
			background-color: blue;
			margin: 0px;
			padding: 10px;
			height: 125px;
			/*width: 200px;*/
			width: 20%;
			float: left;
			position: absolute;
			top: 46px;
			left: 0px;
		}
		section {
			background-color: green;
			margin: 0px;
			padding: 10px;
			height: 125px;
			width: 200px;
			position: absolute;
			top: 46px;
			left: 201px;
		}
		aside {
			background-color: yellow;
			margin: 0px;
			padding: 10px;
			height: 125px;
			width: 200px;
			position: absolute;
			top: 46px;
			left: 402px;

		}
		footer {
			clear: both;
			background-color: orange;
			margin: 0px;
			padding: 10px;
			height: 25px;
			/*width: 600px;*/
			width: 100%;
			position: absolute;
			top: 192px;
			left: 0px;
		}
	</style>
</head>
<body>
	<h1>Testing the color scheme</h1>
	<p>
		The quick brown fox jumps over the lazy dog.
	</p>
	<h1>This is the end of the color test</h1>
	<header><p>This is the header</p></header>
	<div id="container">
		<nav><p>Navigation</p></nav>
		<section><p>Section</p></section>
		<aside><p>Aside</p></aside>
	</div>
		<footer><p>This is the footer</p></footer>
</body>
</html>