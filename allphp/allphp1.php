<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style>
		table {border: 1px solid black;}
		table tr td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
			text-align: center;
		}
		tr:nth-child(even) {
			background-color: lightgreen;
		}
		td:hover {
			background-color: yellow;
		}
	</style>
</head>
<body>
	<h1>Bowling score</h1>
	<table>
		<tr>
			<th>Bowler</th>
			<th>Game 1</th>
			<th>Game 2</th>
			<th>Game 3</th>
			<th>Average</th>
		</tr>
		<tr>
			<td>Rich</td>
			<td rowspan=4>100</td>
			<td>110</td>
			<td>95</td>
			<td>102</td>
		</tr>
		<tr>
			<td>Barbara</td>
			<td>110</td>
			<td>105</td>
			<td>103</td>
			<td>106</td>
		</tr>
		<tr>
			<td>Katie</td>
			<td colspan=3>120</td>
		</tr>
		<!-- <tr>
			<td>Katie</td>
			<td>120</td>
			<td>125</td>
			<td>115</td>
			<td>120</td>
		</tr> -->
		<tr>
			<td>Jessica</td>
			<td>115</td>
			<td>120</td>
			<td>120</td>
			<td>118</td>
		</tr>
		<!-- <tr>
			<th>Bowler</th>
			<th>Game 1</th>
			<th>Game 2</th>
			<th>Game 3</th>
			<th>Average</th>
		</tr>
		<tr>
			<td>Rich</td>
			<td rowspan=4>100</td>
			<td>110</td>
			<td>95</td>
			<td>102</td>
		</tr> -->
	</table>

</body>
</html>