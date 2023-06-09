<?php 

namespace App\Controller\Pages;

use App\Utils\View;


class Home extends Page{
    public static function getHome()
    {
        /**
         * metodo responsavel por retornar o honteudo da page home
         */
        $content =  View::render('pages/home',[
            'nome' => 'Renderizado na Home',
        ]);
        return parent::getPage('Home', $content);
    }
}