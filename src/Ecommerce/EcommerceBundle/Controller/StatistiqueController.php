<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zend\Json\Expr;
use Ob\HighchartsBundle\Highcharts\Highchart;

class StatistiqueController extends Controller {

    public function chartLineAction() {
        $tab[] = array();
        $i = 0;
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EcommerceBundle:Produits')->findbyPrix();
        foreach ($entities as $produit) {
            if ($i < 10) {
                $tab[$i] = $produit->getnbVente();
                $i++;
            } else {
                break;
            }
        }
        $series = array(
            array("name" => "Nombre du vente", "data" => $tab));
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  //  #id du div où afficher le graphe
        $ob->title->text('Top 10 des produits vendus');
        $ob->xAxis->title(array('text' => "numero du produit"));
        $ob->yAxis->title(array('text' => "!nombre du vente "));
        $ob->series($series);
        $ob1 = $this->chartHistogramme();
        $ob2 = $this->chartPie();
        $ob3 = $this->BilantHistogramme();
        return $this->render('EcommerceBundle:Administration:statistique/statistique.html.twig', array(
                    'chart' => $ob,
                    'chart1' => $ob1,
                    'chart2' => $ob2,
                    'chart3' => $ob3
        ));
    }

    public function chartHistogramme() {


        $janvier = 0;
        $fevrier = 0;
        $mars = 0;
        $avril = 0;
        $mai = 0;
        $juin = 0;
        $juillet = 0;
        $aout = 0;
        $septembre = 0;
        $octobre = 0;
        $novembre = 0;
        $decembre = 0;
        $dateArray = array();

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EcommerceBundle:Commandes')->findAll();
        foreach ($entities as $commande) {
            $datetimeArray = explode(" ", date_format($commande->getDate(), 'Y-m'));
            $dateArray = explode("-", $datetimeArray[0]);
            $year = str_pad($dateArray[0], 2, "0", STR_PAD_LEFT);
            $month = str_pad($dateArray[1], 2, "0", STR_PAD_LEFT);
            if ($year === date('Y')) {
                // le nombre de produit pour chaque mois
                switch ($month) {
                    case '01' : $janvier+=$commande->getCommande()['prixHT'];
                        break;
                    case '02' : $fevrier+=$commande->getCommande()['prixHT'];
                        break;
                    case 03 : $mars+=$commande->getCommande()['prixHT'];
                        break;
                    case 04 : $avril+=$commande->getCommande()['prixHT'];
                        break;
                    case 05 : $mai+=$commande->getCommande()['prixHT'];
                        break;
                    case 06 : $juin+=$commande->getCommande()['prixHT'];
                        break;
                    case 07 : $juillet+=$commande->getCommande()['prixHT'];
                        break;
                    case '08' : $aout+=$commande->getCommande()['prixHT'];
                        break;
                    case '09' : $septembre+=$commande->getCommande()['prixHT'];
                        break;
                    case 10 : $novembre+=$commande->getCommande()['prixHT'];
                        break;
                    case 11 : $octobre+=$commande->getCommande()['prixHT'];
                        break;
                    case 12 : $decembre+=$commande->getCommande()['prixHT'];
                        break;
                }
            }
        }

        $series = array(
            array(
                'name' => 'Total',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array($janvier, $fevrier, $mars, $avril, $mai, $juin, $juillet, $aout, $septembre, $novembre, $octobre, $decembre),
            )
//            array(
//                'name' => 'Temperature',
//                'type' => 'spline',
//                'color' => '#AA4643',
//                'data' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
//            ),
        );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + "" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => '',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " DT" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Total',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

        $ob = new Highchart();
        $ob->chart->renderTo('container1'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Bilan financier pour chaque mois');
        $ob->xAxis->categories($categories);
        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
                 var unit = {
                     "Total": "DT",
                     "": ""
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);
        return $ob;
    }

    public function BilantHistogramme() {


        $firstYear = 0;
        $secondYear = 0;
        $thirdYear = 0;
        $forthYear = 0;
        $fiveYear = 0;
        $dateArray = array();

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EcommerceBundle:Commandes')->findAll();
        foreach ($entities as $commande) {
            $datetimeArray = explode(" ", date_format($commande->getDate(), 'Y-m'));
            $dateArray = explode("-", $datetimeArray[0]);
            $year = str_pad($dateArray[0], 2, "0", STR_PAD_LEFT);
            if ((date('Y') - $year) === 0) {
                $firstYear += $commande->getCommande()['prixHT'];
            }

            if ((date('Y') - $year) === 1) {
                $secondYear += $commande->getCommande()['prixHT'];
            }
            if ((date('Y') - $year) === 2) {
                $thirdYear += $commande->getCommande()['prixHT'];
            }
            if ((date('Y') - $year) === 3) {
                $forthYear += $commande->getCommande()['prixHT'];
            }
            if ((date('Y') - $year) === 4) {
                $fiveYear += $commande->getCommande()['prixHT'];
            }
        }
//                var_dump($firstYear);
//                die;

        $series = array(
            array(
                'name' => 'Total',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array($fiveYear, $forthYear, $thirdYear, $secondYear, $firstYear),
            )
//            array(
//                'name' => 'Temperature',
//                'type' => 'spline',
//                'color' => '#AA4643',
//                'data' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
//            ),
        );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + "" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => '',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " DT" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Total',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array(date('Y') - 4, date('Y') - 3, date('Y') - 2, date('Y') - 1, date('Y'));

        $ob = new Highchart();
        $ob->chart->renderTo('container2'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Bilan financier pour les dernieres 5 années');
        $ob->xAxis->categories($categories);
        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
                 var unit = {
                     "Total": "DT",
                     "": ""
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);
        return $ob;
    }

    public function chartPie() {

        $janvier = 0;
        $fevrier = 0;
        $mars = 0;
        $avril = 0;
        $mai = 0;
        $juin = 0;
        $juillet = 0;
        $aout = 0;
        $septembre = 0;
        $octobre = 0;
        $novembre = 0;
        $decembre = 0;
        $dateArray = array();

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EcommerceBundle:Produits')->findAll();
        foreach ($entities as $produit) {
            $datetimeArray = explode(" ", date_format($produit->getDateajout(), 'Y-m'));
            $dateArray = explode("-", $datetimeArray[0]);
            $year = str_pad($dateArray[0], 2, "0", STR_PAD_LEFT);
            $month = str_pad($dateArray[1], 2, "0", STR_PAD_LEFT);
            // la date courante
            if ($year === date('Y')) {
                // le nombre de produit pour chaque mois
                switch ($month) {
                    case 01 : $janvier++;
                        break;
                    case 02 : $fevrier++;
                        break;
                    case 03 : $mars++;
                        break;
                    case 04 : $avril++;
                        break;
                    case 05 : $mai++;
                        break;
                    case 06 : $juin++;
                        break;
                    case 07 : $juillet++;
                        break;
                    case 08 : $aout++;
                        break;
                    case 09 : $septembre++;
                        break;
                    case 10 : $novembre++;
                        break;
                    case 11 : $octobre++;
                        break;
                    case 11 : $decembre++;
                        break;
                }
            }
        }

//       var_dump($janvier);
//       var_dump(date('Y'));
//       die;
//        


        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Les nouveaux produits pour cette année');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array('Janvier', $janvier),
            array('Fevrier', $fevrier),
            array('Mars', $mars),
            array('Avril', $avril),
            array('Mai', $mai),
            array('Juin', $juin),
            array('Juillet', $juillet),
            array('Aout', $aout),
            array('Septembre', $septembre),
            array('Novembre', $novembre),
            array('Octobre', $octobre),
            array('Decembre', $decembre),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Nombre de produits', 'data' => $data)));
        return $ob;
    }

}
