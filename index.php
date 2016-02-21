<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Client Vin</title>
<!-- Bootstrap Mobile first -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/main.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<div class="container">
    <div class="header">
        <div class="row">
            <ul class="nav navbar-nav col-md-1 col-xs-12">
              <li class="dropdown">
                <button class="dropdown-toggle" data-toggle="dropdown" type="button" id="dropdownMenu1" aria-haspopup="true" aria-expanded="false">
                    Filtres <span class="caret"></span>
                </button>
                <ul id="filter" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#" data-identity="country" data-value="all">Tous les vins</a></li>
                  <li class="dropdown-header">Par pays</li>
                  <li><a href="#" data-identity="country" data-value="France">France</a></li>
                  <li><a href="#" data-identity="country" data-value="USA">USA</a></li>
                  <li class="dropdown-header">Par année</li>
                  <li><a href="#" data-identity="year" data-value="2005">2005</a></li>
                  <li><a href="#" data-identity="year" data-value="2009">2009</a></li>
                  <li><a href="#" data-identity="year" data-value="2010">2010</a></li>
                </ul>
              </li>
            </ul>

            <form id="frmSearch" action="#" class="navbar navbar-form col-md-5 col-xs-12" role="search">
                <div class="form-group">
                    <input type="text" id="searchKey"/>
                </div>
                <button id="btnSearch" class="btn btn-default">Recherche</button>
                <button id="btnAdd" class="btn btn-default">Nouveau vin</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <ul id="wineList">
                <li><a href="#" data-identity="1">Vin 1</a></li>
                <li><a href="#" data-identity="2">Vin 2</a></li>
                <li><a href="#" data-identity="3">Vin 3</a></li>
            </ul>
        </div>

        <div class="col-md-8">
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

                    <div>
                        <button id="btnSave" class="btn btn-primary">Save</button>
                        <button id="btnDelete" class="btn btn-danger">Delete</button>
                    </div>

                </div>

		<div class="rightArea">

                    <img id="pic" src="#" alt="" height="300" />

                    <label for="description">Notes:</label>
                    <textarea id="description" name="description"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>