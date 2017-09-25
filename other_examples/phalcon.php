<?php

// Define route
// ...
$router->add(
    "/", [
        "controller" => "home",
        "action" => "index"
    ]
);

$router->add(
    "/ajax", [
        "controller" => "film",
        "action" => "ajax"
    ]
);

// Define film controller
// ...
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\PhalconAdapter;

Class FilmController extends Controller {
    // ...
    public function AjaxAction() {
        $datatables = new Datatables(new PhalconAdapter($this->di, 'db'));
        $query = $this->modelsManager->createBuilder()
            ->columns('film_id, title, description')
            ->from('App\Models\Film')
            ->getQuery()
            ->getSql();
    
        $datatables->query($query['sql']);
        return $datatables->generate();
    }
    
}