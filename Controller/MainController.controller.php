<?php
class MainController
{
    public function acceuil()
    {
        $page_description = 'Bienvenue sur mon site';
        $page_title = 'Accueil';
        $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Bienvenue sur mon site</h1>";
        require 'layouts/base.php';
    }
    public function page1()
    {
        $page_description = 'Page 1';
        $page_title = 'Page 1';
        $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Page 1</h1>";
        require 'layouts/base.php';
    }
    public function page2()
    {
        $page_description = 'Page 2';
        $page_title = 'Page 2';
        $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Page 2</h1>";
        require 'layouts/base.php';
    }
    public function page3()
    {
        $page_description = 'Page 3';
        $page_title = 'Page 3';
        $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Page 3</h1>";
        require 'layouts/base.php';
    }
    public function pageErreur($msg)
    {
        $page_description = 'Erreur';
        $page_title = 'Erreur';
        $page_content = $msg;
        require 'layouts/base.php';
    }
}
