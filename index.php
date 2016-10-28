<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>DataTables examples</title>
</head>
<body id="dt_example">
<h2>Datatables Examples - full list</h2>
<div id="container">
    <?php
    $files = glob('sqlite_examples/*', GLOB_BRACE);
    foreach ($files as $file)
    {
        ?>
        <p><a href='/<?php echo $file; ?>/'><?php echo $file; ?></a></p>
        <?php
    }
    ?>
</div>

<?php include_once("analyticstracking.php") ?>
</body>
</html>