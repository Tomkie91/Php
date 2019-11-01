<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListControler extends AbstractController {

    private $list;

    public function __construct() {
        $this->$list = ['lubie placki', 'kupka'];
    }

    public function getList() {
        return $this->$list;
    }

    private function addItem($item) {
        $list[] = $item;
    }
    /**
     * @Route('/list')
     */
    private function showList() {
        return $this->render("list.html.twig" , ['list' => $list,]);
    }
}
?>