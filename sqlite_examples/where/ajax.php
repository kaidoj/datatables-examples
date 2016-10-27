<?php
require '../../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\SQLite;

$path = realpath(dirname(__FILE__) . '/../../db/Chinook_Sqlite_AutoIncrementPKs.sqlite');
$dt = new Datatables(new SQLite($path));

$dt->query("Select TrackId, Name, UnitPrice from Track where TrackId > 47 and TrackId < 83");

echo $dt->generate();

