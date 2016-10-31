<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>DataTables example</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').dataTable( {
                "serverSide": true,
                "ajax": {
                    "url": "ajax.php",
                    "type": "POST"
                }
            } );
        } );
    </script>
</head>
<body id="dt_example">
<div id="container">
    <h1>Datatables - An example of using POST request instead of GET</h1>
    <p>Source codes: <a href="https://github.com/n1crack/datatables-examples/tree/master/sqlite_examples/post">https://github.com/n1crack/datatables-examples/tree/master/sqlite_examples/post</a></p>
    <table border="0" cellpadding="4" cellspacing="0" class="display" id="example">
        <thead>
        <tr>
            <th width="8%">ID</th>
            <th width="32%">Name</th>
            <th width="60%">Unit Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>loading...</td>
        </tr>
        </tbody>
    </table>
</div>
<?php include_once("../../analyticstracking.php") ?>
</body>
</html>