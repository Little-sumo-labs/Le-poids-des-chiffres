<?php
namespace App;

/**
 * Permet de calculer le poids d'un nombre
 *
 * Class weightOfNumbers
 * @author Guillaume RICHARD <g.jf.richard@gmail.com>
 * @package App
 */
class weightOfNumbers {
    /**
     * weightOfNumbers constructor.
     */
    public function __construct(){}

    /**
     * calculer le poids d'un nombre de 3 chiffres.
     * donne les valeurs résolvant le problème, à partir d'un tableau de donnée
     *
     * @param array $numbers
     * @return array
     */
    public function weight(array $numbers) {

        $data = [];

        for ($i = 100; $i < 1000; $i++) {
            if (strpos($i, '0')) {
                continue;
            }
            list($centaine, $dizaine, $unite) = str_split($i);

            $weight = $numbers[$centaine] + $numbers[$dizaine] + $numbers[$unite];
            if ($i === $weight) {
                $data[] = [
                    "poids à trouver"   => $weight,
                    "clé du tableau"    => "$centaine + $dizaine + $unite",
                    "poids des clés"    => "$numbers[$centaine] + $numbers[$dizaine] + $numbers[$unite]"
                ];
            }
        }

        return $data;
    }
}