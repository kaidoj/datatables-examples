<?php
require '../../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\SQLite;

$path = realpath(dirname(__FILE__) . '/../../db/Chinook_Sqlite_AutoIncrementPKs.sqlite');
$dt = new Datatables(new SQLite($path));

$dt->query("Select TrackId as id, Name, UnitPrice from Track");

echo $dt->generate();
