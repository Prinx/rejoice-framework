<?php

namespace App\Menus;

use Prinx\Rejoice\Menu\BaseMenu;

/**
 * A Menu Entity is an object representation of a menu.
 * It allows you to implement more dynamism on your menu, that you cannot
 * implement with the simple menu resource (in the resources/menus/menus.php).
 *
 * This is the default Menu Entity class which the other menu entities extend.
 * Hence any method added here will be accesible in ALL other menu entity.
 */
class Menu extends BaseMenu
{
}
