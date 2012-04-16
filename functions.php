<?php
/* BNS Menu - retained for compatibility with parent theme (Ground Floor) with
 * the `wp_nav_menu()` implementation at Ground Floor version 1.6
 *
 * @package: Shelter
 * @version: 0.1
 * @date: March 31, 2011
 */
function bns_menu( $menu, $args ) {
    if ( is_home() || is_front_page() ) {
    	$args['show_home'] = false;
    	$args['echo'] = false;
    	$args['depth'] = 1;
    	remove_filter( 'wp_page_menu', 'bns_menu', 10, 2 );
    	$menu = wp_page_menu( $args );
    }
    return $menu; // no need to remake the menu if nothing changed
}
add_filter( 'wp_page_menu', 'bns_menu', 10, 2 );
// End BNS Menu

/* Last Revision: March 31, 2011 v0.1 */
?>