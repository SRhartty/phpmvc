<?php 

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;


class Home extends Page{
    public static function getHome()
    {

        $organization = new Organization();

        /**
         * metodo responsavel por retornar o honteudo da page home
         */
        $content =  View::render('pages/home',[
            'nome' => $organization->name,
            'description' => $organization->description,
            'site' => $organization->site

        ]);
        return parent::getPage('Home', $content);
    }
}