/**
* @snippet       Hide Edit Address Tab @ My Account
* @author        Khalid Almallahi
* @testedwith    WooCommerce 3.5.1
*/
 
add_filter( 'woocommerce_account_menu_items', 'kotsh_remove_address_my_account', 999 );
 
function kotsh_remove_address_my_account( $items ) {
unset($items['edit-address']);
return $items;
}
 
/**
* @snippet       Rename Edit Address Tab @ My Account
* @author        Khalid Almallahi
* @testedwith    WooCommerce 3.5.1
*/
 
add_filter( 'woocommerce_account_menu_items', 'kotsh_rename_address_my_account', 999 );
 
function kotsh_rename_address_my_account( $items ) {
$items['edit-address'] = 'Delivery Address';
return $items;
}
