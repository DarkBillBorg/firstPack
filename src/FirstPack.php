<?php
namespace Odl\FirstPack;

final class FirstPack 
{
   public function generateFirstName(int $number, string $sexe) {

        $prenomsHomme = ['Jean', 'Pierre', 'Paul', 'Jacques', 'Philippe', 'Antoine', 'Nicolas'];
        $prenomsFemme = ['Marie', 'Anne', 'Sophie', 'Isabelle', 'Catherine', 'Charlotte', 'Élise'];

        $resultat = [];

        $prenoms = ($sexe === 'M') ? $prenomsHomme : $prenomsFemme;

        for ($i = 0; $i < $nombre; $i++) {
            $resultat[] = $prenoms[array_rand($prenoms)];
        }

        return $resultat;
   }
}