<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Client Vin</title>
</head>
<body>
<div class="header">
	<form id="frmSearch" action="#">
		<input type="text" id="searchKey"/>
		<button id="btnSearch">Search</button>
		<button id="btnAdd">New Wine</button>
	</form>
</div>

<div class="leftArea">
	<ul id="wineList">
		<li><a href="#" data-identity="1">Vin 1</a></li>
		<li><a href="#" data-identity="2">Vin 2</a></li>
		<li><a href="#" data-identity="3">Vin 3</a></li>
	</ul>
</div>

<div class="rightArea">
	<form id="wineForm" action="#">
		<div class="mainArea">

			<label for="wineId">Id:</label>
			<input id="wineId" name="id" type="text" disabled />

			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required />

			<label for="grapes">Grapes:</label>
			<input type="text" id="grapes" name="grapes" />

			<label for="country">Country:</label>
			<input type="text" id="country" name="country" />

			<label for="region">Region:</label>
			<input type="text" id="region" name="region" />

			<label for="year">Year:</label>
			<input type="numeric" id="year" name="year"/>

			<button id="btnSave">Save</button>
			<button id="btnDelete">Delete</button>

		</div>

		<div class="rightArea">

			<img id="pic" alt="" height="300" />

			<label for="description">Notes:</label>
			<textarea id="description" name="description"></textarea>
		</div>
	</form>
</div>
<footer>EPFC - WDYN</footer>
</body>
</html>