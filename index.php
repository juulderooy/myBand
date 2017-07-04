<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle', $title);
$templateParser->display ('views/head.tpl');

// header

$templateParser->display('views/header.tpl');

// menu
$templateParser->display('views/menu.tpl');

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        $templateParser->display('views/home.tpl');
        break;
    case 'evenementen':
        //get articles from the model
        require_once 'model/getarticles.php';

        $templateParser->assign('article_list', $result_list);
        //rewrite to smarty template
        $templateParser->display('views/evenementen.tpl');


        break;
    case 'about':
        //use 'display' to show a template
        $templateParser->display('views/about.tpl');
        break;
    case 'brouwerij':
        //contact
        $templateParser->display('views/brouwerij.tpl');
        break;
}

// footer

$templateParser->display ('views/footer.tpl');

?>
