<?php
require '../../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\SQLite;

$path = realpath(dirname(__FILE__) . '/../../db/Chinook_Sqlite_AutoIncrementPKs.sqlite');
$dt = new Datatables(new SQLite($path));

$dt->query("Select TrackId, Track.Name, Title as Album, MediaType.Name as MediaType, 
UnitPrice, Milliseconds, Bytes from Track 
JOIN Album ON Album.AlbumId = Track.AlbumId
JOIN MediaType ON MediaType.MediaTypeId = Track.MediaTypeId");

echo $dt->generate();
