<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $sql = Users::findFirst(1);
        echo $sql->name . ' ' . $sql->email;
    }
}