<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>
        Lab9_1110
    </title>
</head>

<body>
    <div class="jumbotron">
    <form class="form-horizontal" action="lab.php" method="get">
        <div class="form-group">
            <label for="email" class="col-sm-2">Email address:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd" class="col-sm-2">Password:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control col-sm-10" name="pass" id="pwd">
            </div>
        </div>
        <label class="col-sm-2">Radios</label>
        <div class="col-sm-10">
            <div class="form-check ">
                <input type="radio" class="form-check-input" id="radio1" name="radio" value="option1" checked>
                <label class="form-check-label" for="radio1">First Radio</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="radio" value="option2">
                <label class="form-check-label" for="radio2">Second Radio</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="radio" value="op3">
                <label class="form-check-label">Third disabled radio</label>
            </div>
        </div>
        <label class="col-sm-2">Checkbox</label>
        <div class="checkbox col-sm-10">
            <label><input type="checkbox" name="check">Example Checkbox</label>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Sign In</button>
    </form>
    </div>
    
</body>

</html>