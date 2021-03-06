<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class MainController {

    public function show($viewName, $viewData = []) 
    {
        global $router;
        extract($viewData);
        $assetsFolder = $_SERVER['BASE_URI'] . '/assets';
        $baseUri = $_SERVER['BASE_URI'] . '/';
        
        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName .'.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }



    function home()
    { 
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();
        $viewData = [
            'pokemons' => $pokemons
        ];
        $this->show('home', $viewData);
    }

    function detail($params)
    {    
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->find($params['numero']);

        $typeModel = new Type();
        $types = $typeModel->findAll();


        $viewData = [
            'pokemonNumero' => $params['numero'],
            'pokemons' => $pokemons,
            'types' => $types
        ];
        $this->show('detail', $viewData);
    }

    function type() 
    {
        $typeModel = new Type();
        $types = $typeModel->findAll();
        $viewData = [
            'types' => $types
        ];
        $this->show('type', $viewData);
    }

    function typeId($params)
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAllByType($params['id']);
        $viewData = [
            'pokemons' => $pokemons,
        ];
        $this->show('typeId', $viewData);

    }

    function pageNotFoundAction()
    {
        http_response_code(404);
        $this->show('err404');
    }


}