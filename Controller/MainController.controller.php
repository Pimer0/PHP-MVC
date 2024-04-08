<?php
require './Services/Render.php';
class MainController extends Render
{
    public function acceuil()
    {
        $data_page = [
            'page_description' => 'description de la page d\'accueil',
            'page_title' => 'Accueil',
            'view' => 'View/accueil.view.php',
            'template' => 'layouts/base.php'
        ];
        $this->render($data_page);
    }
    public function page1()
    {
        $data_page = [
            'page_description' => 'Page 1',
            'page_title' => 'Page 1',
            'view' => 'View/page1.view.php',
            'template' => 'layouts/base.php'
        ];
        $this->render($data_page);
    }
    public function page2()
    {
        $data_page = [
            'page_description' => 'Page 2',
            'page_title' => 'Page 2',
            'view' => 'View/page2.view.php',
            'template' => 'layouts/base.php'
        ];
        $this->render($data_page);
    }
    public function page3()
    {
        $data_page = [
            'page_description' => 'Page 3',
            'page_title' => 'Page 3',
            'view' => 'View/page3.view.php',
            'template' => 'layouts/base.php'
        ];
        $this->render($data_page);
    }
    public function pageErreur($msg)
    {
        $data_page = [
            'page_description' => 'Page introuvable',
            'page_title' => 'Erreur',
            'msg' => $msg,
            'view' => 'View/erreur.view.php',
            'template' => 'layouts/base.php'

        ];
        $this->render($data_page);
    }
}
