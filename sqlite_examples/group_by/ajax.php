<?php
require '../../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\SQLite;

$path = realpath(dirname(__FILE__) . '/../../db/Chinook_Sqlite_AutoIncrementPKs.sqlite');
$dt = new Datatables(new SQLite($path));

$dt->query("Select 
  Genre.Name as genre_name, 
 sum(Milliseconds)/(1000*60) as total_length 
from Genre 
join Track on Track.GenreId = Genre.GenreId
group by Genre.GenreId");

$dt->edit('total_length', function ($data){
   return  $data['total_length'] . ' minutes';
});

echo $dt->generate();
