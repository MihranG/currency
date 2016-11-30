<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!-- MyCSS  -->
    <link rel="stylesheet" href="main_styles.css"/>
    <!-- DatePicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
    <!-- Chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!--MyJS-->
    <script src="ajaxandmore"></script>


</head>
<body>


<div class="container">
        <div class="alert alert-success" role="alert" id="errorMessage">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            It seems you've entered an earlier end date than start date, but don't worry we've handled it!
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form" method="post" id='dateCurr'>
                        <div class="form-group">
                            <label for="currency" class="checkbox-inline">Choose currency</label>
                            <select name="currency" class="form-control input-md">
                                <form method="post" action="index.php">
                                    <?php foreach ($ISO as $val): ?>
                                        <option><?php echo $val; ?></option>
                                    <?php endforeach; ?>
                                </form>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sDate">Choose date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" name="sDate">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="eDate">Choose end date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" name="eDate">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </nav>

    <div class="">

        <div class="col-md-6 panel panel-default" id="currPanel">
            <!-- Default panel contents -->
            <div class="panel-heading">Currencies</div>
            <!-- List group -->
            <ul class="list-group" id="currencyList">

            </ul>
        </div>
        <div class="col-md-6">
            <canvas id="myChart" width="250" height="250"></canvas>
        </div>
    </div>
</div>
</body>
