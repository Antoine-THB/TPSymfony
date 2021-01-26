<?php

namespace App\Controller;

use App\lib\Tool;
use PhpParser\Node\Expr\Cast\Object_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonCtrlTp2Controller extends AbstractController
{
    /**
     * @Route("/tp2/ex1", name="mon_ctrl_tp2")
     */
    public function index()
    {
        $tool = new Tool();
        return $this->render('mon_ctrl_tp2/index.html.twig', [
            'dump' => var_dump($tool),
        ]);
    }

    /**
     * @Route("/tp2/ex2", name="Tp2_exo2")
     */
    public function exo2()
    {
        $tool = new Tool();
        return $this->render('mon_ctrl_tp2/exo2.html.twig', [
            "value" => $tool->value,
            "libelle" => $tool->libelle,
            "numero" => $tool->nb,
        ]);
    }

        /**
     * @Route("/tp2/ex3/libelle/{vallibelle}/value/{valvalue}/nb/{valnb}",
     * name="Tp2_exo3")
     */
    public function exo3(string $vallibelle, string $valvalue, int $valnb)
    {
        $tableau = array();
        $tool = new Tool();
        $tool->setLibelle($vallibelle);
        $tool->setValue($valvalue);
        $tool->setNb($valnb);
        for ($i = 1; $i <= 10; $i++) {
            $num = strval($i);
            $tableau[] = "Objet ".$num." : libelle".$num."_".$tool->getLibelle().", value".$num."_".$tool->getValue().",".$tool->getNb();
        }
        return $this->render('mon_ctrl_tp2/exo3.html.twig', [
            "tableau" => $tableau
        ]);
    }
            /**
     * @Route("/tp2/ex4/libelle/{vallibelle}/value/{valvalue}/nb/{valnb}",
     * name="Tp2_exo4")
     */
    public function exo4(string $vallibelle, string $valvalue, int $valnb)
    {
        $tableau = array();
        $tool = new Tool();
        $tool->setLibelle($vallibelle);
        $tool->setValue($valvalue);
        $tool->setNb($valnb);
        for ($i = 1; $i <= 10; $i++) {
            $num = strval($i);
            $tableau[] = "Objet ".$num." : libelle".$num."_".$tool->getLibelle().", value".$num."_".$tool->getValue().",".$tool->getNb();
        }
        return $this->render('mon_ctrl_tp2/exo4.html.twig', [
            "tableau" => $tableau
        ]);
    }
}
