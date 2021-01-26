<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonCtrlTp1Controller extends AbstractController
{
    /**
     * @Route("/tp1", name="mon_ctrl_tp1")
     */
    public function index()
    {
        $tableau = array("un","deux","trois","quatre","cinque","six","sept","huit","neuf","dix");
        return $this->render('mon_ctrl_tp1/index.html.twig', [
            'TP_name' => 'TP Symfony',
            'tab' => $tableau,
        ]); 
    }

    /**
     * @Route("/test1/{numero}",  name="ma_route1_tp1", requirements={"numero"="\d+"})
     */
    public function test(int $numero)
    {
        return $this->render('mon_ctrl_tp1/route1.html.twig', [
            'TP_name' => 'Route 1',
            'num' => $numero,
        ]);
    }

        /**
     * @Route("/test2/{text}",  name="ma_route2_tp1", defaults={"text":"Salut"},)
     */
    public function route(string $text)
    {
        return $this->render('mon_ctrl_tp1/route2.html.twig', [
            'TP_name' => 'Route 2',
            'text' => $text,
        ]);
    }
}
