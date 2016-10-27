<?php
require '../../vendor/autoload.php';

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\SQLite;

$path = realpath(dirname(__FILE__) . '/../../db/Chinook_Sqlite_AutoIncrementPKs.sqlite');
$dt = new Datatables(new SQLite($path));

$dt->query("Select TrackId as id, Name, UnitPrice from Track");

// edit 'id' column
$dt->edit('id', function ($data){
     return editurl($data['id'], 'edit') . '-' . $data['id'];
});

// edit 'UnitPrice' column.
$dt->edit('UnitPrice', function ($data){
    return '< ' . $data['UnitPrice'] . ' >';
});

echo $dt->generate();


function editurl($id, $text)
{
    return '<a href="#' . $id . '">' . $text .'</a>';
}