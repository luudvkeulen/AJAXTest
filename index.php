<!doctype HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>AJAX Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <div id="results"></div>
    <?php include 'logic/retrieveusers.php'?>
    <script src="/javascript/getemployees.js"></script>
    <button id="btnRefresh">Refresh</button>
</body>
</html>