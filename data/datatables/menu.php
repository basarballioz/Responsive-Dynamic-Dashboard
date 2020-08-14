<?php
include "../../all.php";

$menu = "<ul id=\"mainnav-menu\" class=\"list-group\">";
$menu .= "<li class=\"list-header\"> Menü </li>";
$anaMenu = $dbm->select("menu", "*", ['parent_id' => 0])->fetchAll();

foreach ($anaMenu as $mMenu) {

    $menu .= "<li>";
    $menu .= "<a href= $mMenu[link]>";
    $menu .= "<i class=$mMenu[icon]></i>";
    $menu .= "<span class=\"menu-title\">" . $mMenu['label'] . "</span>";
    $altMenu = $dbm->select("menu", "*", ['parent_id' => $mMenu['menu_id']])->fetchAll();

    //EGER ALT MENUSU VARSA OK ISARETI KOY
    if (!empty($altMenu)) {
        $menu .= "<i class=\"arrow\"></i>";
    }

    $menu .= "</a>";

    if (!empty($altMenu)) {
        $menu .= "<ul class=\"collapse\">";

        foreach ($altMenu as $aMenu) {
            $ikinciAltMenu = $dbm->select("menu", "*", ['parent_id' => $aMenu['menu_id']])->fetchAll();
            $menu .= "<li>";
            $menu .= "<a href= $aMenu[link]>";
            $menu .= "<i class=$aMenu[icon]></i>";
            $menu .= "<span class=\"menu-title\">" . $aMenu['label'] . "</span>";

            if (!empty($ikinciAltMenu)) {
                $menu .= "<i class=\"arrow\"></i>";
            }

            $menu .= "</a>";

            if (!empty($ikinciAltMenu)) {
                $menu .= "<ul class=\"collapse\">";
                foreach ($ikinciAltMenu as $ikiAmenu) {
                    $menu .= "<li>";
                    $menu .= "<a href= $ikiAmenu[link]>";
                    $menu .= "<span class=\"menu-title\">" . $ikiAmenu['label'] . "</span>";
                    $menu .= "</li>";
                }
                $menu .= "</ul>";
            }
            $menu .= "</li>";
        }
        //$menu .= "</ul>";
        $menu .= "</li>";
        $menu .= "</ul>";
    }
}

echo $menu;

?>