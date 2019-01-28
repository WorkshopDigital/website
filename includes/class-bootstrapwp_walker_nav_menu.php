<?php
     /**
     * class Bootstrap_Walker_Nav_Menu()
     *
     * Extending Walker_Nav_Menu to modify class assigned to submenu ul element
     *
     * @author Rachel Baker
     **/
class Bootstrapwp_Walker_Nav_Menu extends Walker_Nav_Menu {


    function start_lvl(&$output, $depth = 0, $args = Array()) {

        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul id=\"dropdown-menu\">\n";
    }
}