<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|   $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|       my-controller/my-method -> my_controller/my_method
*/

//Users
$route['(kontrol|komand|kore)/user/auth']['post'] = '$1/auth/';

/**
 *  comienza llamadas sin pruebas unitarias
 */
//TODOK: add app layer to routes
$route['default_controller'] = 'kichink_api/index';
$route['kichink_api/(:any)'] = 'kichink_api/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(kontrol|komand|kore)'] = '$1/index';

//Users
$route['(kontrol|komand|kore)/user/auth']['post'] = '$1/auth/';
$route['(kontrol|komand|kore)/user/auth']['get'] = '$1/auth';
$route['(kontrol|komand|kore)/user/fingerprint']['post'] = '$1/fingerprint';
$route['(kontrol|komand|kore)/user/signup']['post'] = '$1/user_signup';
$route['(kontrol|komand|kore)/user/logout']['get'] = '$1/logout';
$route['(kontrol|komand|kore)/w']['post'] = '$1/w';
$route['(kontrol|komand|kore)/user/(:num)']['get'] = '$1/user_info/id/$2';
$route['(kontrol|komand|kore)/user/me']['get'] = '$1/user_me';
$route['(kontrol|komand|kore)/user/permissions']['get'] = '$1/user_permissions';
$route['(kontrol|komand|kore)/user/profile/(:num)']['get'] = '$1/user_profile/id/$2';
$route['(kontrol|komand)/user/password/change']['post'] = '$1/user_password';
$route['(kontrol|komand|kore)/user/require/password/recovery']['post'] = '$1/require_recovery_password';
$route['(kontrol|komand|kore)/user/password/recovery']['post'] = '$1/recovery_password';
$route['kontrol/user/profile/update/password']['post'] = 'kontrol/password_update';
$route['kore/user/(:num)/contact']['get'] = 'kore/user_contact/id/$1';//Checkout 5.0
$route['kore/shipment']['post'] = 'kore/user_shipment/id/$1';//Mi cuenta
$route['kore/shipment/guest']['post'] = 'kore/user_shipment_guest/id/$1';//Mi cuenta
$route['checkout/shipment']['post'] = 'checkout/shipment';//Checkout 5.0
$route['checkout/shipment/guest']['post'] = 'checkout/shipment_guest';//Checkout 5.0
$route['checkout/shipments']['get'] = 'checkout/shipments';//Checkout 5.0
$route['checkout/user/check']['post'] = 'checkout/check_user_register';
//$route['checkout/shipment/guest']['get'] = 'checkout/shipment_guest';//Checkout 5.0
//$route['kore/user/shipment']['post'] = 'kore/user_shipment_guest/id/$1';//Checkout 5.0
$route['checkout/payments']['get'] = 'checkout/user_payment';//Checkout 5.0
$route['kore/shipments']['get'] = 'kore/user_shipments';//Mi cuenta
$route['kore/payments']['get'] = 'kore/user_payment';//Mi cuenta
$route['checkout/payment']['post'] = 'checkout/user_card/id/$1';//Checkout 5.0
$route['checkout/payment/guest']['post'] = 'checkout/user_card_guest';//Checkout 5.0
$route['checkout/token/banamex']['post'] = 'checkout/token_banamex';//Checkout 5.0
$route['checkout/processor']['get'] = 'checkout/get_processor';//Checkout 5.0
$route['checkout/logo/gif']['get'] = 'checkout/get_logo_gif';//Checkout 5.0
$route['checkout/logo/html']['get'] = 'checkout/get_logo_html';//Checkout 5.0
$route['checkout/user/register']['put'] = 'checkout/active_user_register';//Checkout 5.0
$route['checkout/order/(:any)/cash/(c0n|p4y)']['get'] = 'checkout/cash/super_order_key/$1/provider/$2';//Checkout 5.0
$route['checkout/user/data']['post'] = 'checkout/register_new_user';//Checkout 5.0

$route['kore/user/smscode/request']['get'] = 'kore/smscode_request'; // Mi cuenta
$route['kore/user/smscode/verify']['post'] = 'kore/smscode_verify'; // Mi cuenta
$route['kore/user/(:num)']['put'] = 'kore/info/id/$1'; // Mi cuenta
$route['kore/user/password/change']['post'] = 'kore/update_password'; // Mi cuenta
$route['kore/shipment/(:num)']['get'] = 'kore/user_shipment/id/$1'; // Mi cuenta
$route['kore/shipment/(:num)']['put'] = 'kore/user_shipment/id/$1'; // Mi cuenta
$route['kore/shipment/(:num)']['delete'] = 'kore/user_shipment/id/$1'; // Mi cuenta
$route['kore/payment']['post'] = 'kore/user_payment/id/$1'; // Mi cuenta
$route['kore/payment/(:num)']['delete'] = 'kore/user_payment/id/$1'; // Mi cuenta
$route['kore/orders']['get'] = 'kore/user_orders'; // Mi cuenta
$route['kore/orders/checkout']['get'] = 'kore/orders_get'; // Mi cuenta
$route['checkout/orders']['get'] = 'checkout/orders_get'; // Checkout
$route['checkout/orders/guest']['get'] = 'checkout/orders_guest'; // Checkout
$route['kore/orders/actives']['get'] = 'kore/user_active_orders'; // Mi cuenta
$route['kore/order/(:num)']['get'] = 'kore/user_order/id/$1'; // Mi cuenta
$route['kore/order_simplified/(:any)']['get'] = 'kore/order_simplified/hash/$1'; // Mi cuenta
$route['kore/order_delivered_survey/(:num)']['post'] = 'kore/order_delivered_survey/id/$1';
$route['(kontrol|komand|kore)/user/preference']['put'] = '$1/user_preference/id/$2';

//landing
$route['kontrol/store/request']['post'] = 'kontrol/store_request';
$route['kontrol/code/request']['post'] = 'kontrol/store_code_request';
$route['kontrol/store/name/validate']['post'] = 'kontrol/store_name_validate';
$route['kontrol/user/email/validate']['post'] = 'kontrol/user_email_validate';
$route['kontrol/user/name/validate']['post'] = 'kontrol/user_name_validate';
$route['kontrol/code/verify']['post'] = 'kontrol/store_code_verify';
$route['kontrol/code/manualverify']['post'] = 'kontrol/store_manual_verify';
$route['kontrol/code/verification/request']['get'] = 'kontrol/phone_verification_request';

//Categories
$route['(kontrol|komand|kore)/category/(:num)']['get'] = '$1/category/id/$2';
$route['(kontrol|komand|kore)/category/list']['post'] = '$1/category_list';
$route['(kontrol|komand|kore)/category']['post'] = '$1/category';
$route['(kontrol|komand|kore)/category/update']['post'] = '$1/category_update';
$route['(kontrol|komand|kore)/category']['delete'] = '$1/category';
$route['(kontrol|komand|kore)/category/switch/order']['post'] = '$1/category_switch_order';

//Notifications
$route['(kontrol|komand|kore)/notification/(:num)']['get'] = '$1/notification/id/$2';
$route['(kontrol|komand|kore)/notification/list']['post'] = '$1/notification_list';
$route['(kontrol|komand|kore)/notification/mark/read/(:num)']['get'] = '$1/notification_read/id/$2';

//Orders
$route['(kontrol|komand|kore)/orders/count']['post'] = '$1/orders_count';
$route['kontrol/order/list']['post'] = 'kontrol/order_list';
$route['kontrol/order/list/pickup/today']['post'] = 'kontrol/order_list_today';
$route['(kontrol|komand)/order/(:num)']['get'] = '$1/order/id/$2';
$route['(kontrol|komand|kore)/order/report']['get'] = '$1/order_report';
$route['(kontrol|komand|kore)/order/reschedule/pickup']['post'] = '$1/reschedule_pickup';
$route['checkout/order/(:num)/shipment']['post'] = 'checkout/order_shipment/id/$1';//Checkout 5.0
//$route['kore/orders/']['get'] = 'kore/orders/';//Checkout 5.0, Mi cuenta
$route['checkout/order/confirm']['post'] = 'checkout/order_confirm/';//Checkout 5.0
$route['checkout/order/(:num)/payment']['post'] = 'checkout/order_payment/id/$1';//Checkout 5.0
$route['checkout/order/(:num)/process']['post'] = 'checkout/order_process/id/$1';//Checkout 5.0
$route['checkout/cart/guest']['get'] = 'checkout/cart_guest/';//Checkout 5.0store_total
$route['checkout/cart/']['get'] = 'checkout/cart/';//Checkout 5.0
$route['kore/order/(:num)/email']['post'] = 'kore/resend_order_email/id/$1'; // Mi cuenta
$route['kore/order/(:num)/actions']['get'] = 'kore/order_actions/id/$1'; // Mi cuenta
$route['kore/order/(:num)/track']['get'] = 'kore/order_track/id/$1'; // Mi cuenta

//Payments
$route['(kontrol|komand|kore)/payment/count']['post'] = '$1/payments_count';
$route['(kontrol|komand|kore)/payment/list']['post'] = '$1/payment_list';
$route['(kontrol|komand|kore)/payment/detail']['post'] = '$1/payment_detail';
$route['(kontrol|komand|kore)/payment/require/deposit']['post'] = '$1/payment_deposit_required';
$route['(kontrol|komand|kore)/payment/report']['get'] = '$1/payment_report';
$route['(kontrol|komand|kore)/payment/resume']['post'] = '$1/payment_resume';
$route['(kontrol|komand|kore)/payment/resume/item_detail']['post'] = '$1/payment_item_detail';
$route['(kontrol|komand|kore)/payment/confirm/deposit']['post'] = '$1/payment_confirm_deposit_required';
$route['(kontrol|komand|kore)/payment/report/pdf']['post'] = '$1/payment_report_pdf';

//promotions
$route['(kontrol|komand|kore)/promotions/count']['post'] = '$1/promotions_count';
$route['(kontrol|komand|kore)/promotions/list']['post'] = '$1/promotions_list';
$route['(kontrol|komand|kore)/promotion/(:num)']['get'] = '$1/promotions/id/$2';
$route['(kontrol|komand|kore)/promotion/put']['post'] = '$1/promotions';
$route['(kontrol|komand|kore)/promotion']['delete'] = '$1/promotion';

//discounts
$route['(kontrol|komand|kore)/discount/list']['post'] = '$1/discount_list';
$route['(kontrol|komand|kore)/discount']['delete'] = '$1/discount';
$route['(kontrol|komand|kore)/discount/save']['post'] = '$1/discount_save';
$route['checkout/store/coupon']['post'] = 'checkout/order_coupon';//Checkout 5.0
$route['checkout/store/coupon']['delete'] = 'checkout/order_coupon';//Checkout 5.0
$route['checkout/coupons']['get'] = 'checkout/order_coupons';//Checkout 5.0
$route['checkout/store/coupon/guest']['post'] = 'checkout/order_coupon_guest';//Checkout 5.0
$route['checkout/store/coupon/guest']['delete'] = 'checkout/order_coupon_guest';//Checkout 5.0
$route['checkout/coupons/guest']['get'] = 'checkout/order_coupons_guest';//Checkout 5.0

//images
$route['(kontrol|komand|kore)/image']['delete'] = '$1/image';
$route['(kontrol|komand|kore)/image']['post'] = '$1/image';
$route['(kontrol|komand|kore)/image/reorder']['post'] = '$1/images_order';
$route['(kontrol|komand|kore)/image/aviary/save']['post'] = '$1/images_aviary';
$route['(kontrol|komand|kore)/image/event/save']['post'] = '$1/image_event';
$route['(kontrol|komand|kore)/image/carousel']['post'] = '$1/image_carousel';
$route['(kontrol|komand|kore)/image/header']['post'] = '$1/image_header';
$route['(kontrol|komand|kore)/migrate/stores/thumbs']['get'] = '$1/migrate_stores_thumb';

//Store
$route['(kontrol|komand|kore)/store/sales/overview']['post'] = '$1/store_sale_overview';
$route['(kontrol|komand|kore)/store/sales/graph']['post'] = '$1/store_sales';
$route['(kontrol|komand|kore)/store/sales/top_users']['post'] = '$1/store_sale_top_users';
$route['(kontrol|komand|kore)/store/sales/top_products']['post'] = '$1/store_sale_top_products';
$route['(kontrol|komand|kore)/store/inventory']['post'] = '$1/store_inventory';
$route['(kontrol|komand|kore)/store']['get'] = '$1/store';
$route['(kontrol|komand|kore)/store/settings']['post'] = '$1/store_settings';
$route['(kontrol|komand|kore)/store/settings/update']['post'] = '$1/store_settings_update';
$route['(kontrol|komand|kore)/store/admin']['delete'] = '$1/store_admin';
$route['(kontrol|komand|kore)/store/thumb']['get'] = '$1/store_thumb';
$route['(kontrol|komand|kore)/store/search']['post'] = '$1/store_search';
$route['(kontrol|komand|kore)/store/admins']['post'] = '$1/store_admins';
$route['(kontrol|komand|kore)/store/request_publication']['post'] = '$1/store_request_publication';
$route['(kontrol|komand|kore)/store/admin/add']['post'] = '$1/admin_add';
$route['(kontrol|komand|kore)/store/admin/invite/again']['post'] = '$1/admin_invite_again';
$route['(kontrol|komand|kore)/store/welcome/home']['post'] = '$1/store_welcome_panel';
$route['(kontrol|komand|kore)/store/facebook']['post'] = '$1/facebook';
$route['(kontrol|komand|kore)/store/banks']['post'] = '$1/store_banks';
$route['(kontrol|komand|kore)/store/create']['post'] = '$1/store_create';
$route['(kontrol|komand|kore)/store/custom_css']['get'] = '$1/customcss';
$route['(kontrol|komand|kore)/store/custom_item']['get'] = '$1/custom_item';
$route['(kontrol|komand|kore)/store/custom_css']['post'] = '$1/custom_css';
$route['(kontrol|komand|kore)/store/about']['get'] = '$1/store_about';
$route['(kontrol|komand|kore)/store/about']['post'] = '$1/store_about';
$route['(kontrol|komand|kore)/store/social']['get'] = '$1/store_social';
$route['(kontrol|komand|kore)/store/header']['get'] = '$1/store_header';
$route['kontrol/order/guia']['post'] = 'kontrol/guia';
$route['kore/store/details']['get'] = 'kore/store_details';
$route['kore/store/items']['post'] = 'kore/store_items';
$route['kore/store/(:num)/like/user/(:num)']['get'] = 'kore/store_like/id/$1/user/$2';
$route['kore/store/(:num)/dislike/user/(:num)']['get'] = 'kore/store_dislike/id/$1/user/$2';
$route['kore/store/(:num)/template']['get'] = 'kore/store_template/id/$1';
$route['kore/item/(:num)/template']['get'] = 'kore/item_template/id/$1';
$route['kontrol/favorite_store/']['post'] = 'kontrol/favorite_store/';
$route['kontrol/store/url']['post'] = 'kontrol/valid_url';
$route['kore/stores/by/categories']['get'] = 'kore/get_stores_by_categories';
$route['kore/items/by/categories']['get'] = 'kore/get_items_by_categories';

$route['(kontrol|komand|kore)/store/admin/invite/delete']['delete'] = '$1/store_admin_invite';
//Sale Points
$route['(kontrol|komand|kore)/sale/point/list']['post'] = '$1/sale_point_list';
$route['(kontrol|komand|kore)/sale/point']['delete'] = '$1/sale_point';
$route['(kontrol|komand|kore)/sale/point/new']['post'] = '$1/sale_point_insert';
$route['checkout/store/shipments']['get'] = 'checkout/store_shipments';//Checkout 5.0
$route['checkout/store/shipments/guest']['get'] = 'checkout/store_shipments_guest';//Checkout 5.0
$route['checkout/store/shipment']['put'] = 'checkout/order_shipment';
$route['checkout/store/shipment/guest']['put'] = 'checkout/order_shipment_guest';
$route['checkout/request/invoice']['post'] = 'checkout/request_invoice';
$route['checkout/migrate/brand']['post'] = 'checkout/migrate_brand';

//Item
$route['(kontrol|komand|kore)/item/(:num)']['get'] = '$1/item/id/$2';
$route['(kontrol|komand|kore)/item/list']['post'] = '$1/item_list';
$route['(kontrol|komand|kore)/items/categories/add']['post'] = '$1/items_add_categories';
$route['(kontrol|komand|kore)/item/inventory']['post'] = '$1/item_inventory';
$route['(kontrol|komand|kore)/item/general/update']['post'] = '$1/item_general';
$route['(kontrol|komand|kore)/item']['delete'] = '$1/item';
$route['(kontrol|komand|kore)/items']['delete'] = '$1/items';
$route['(kontrol|komand|kore)/items/set/price']['post'] = '$1/set_price_items';
$route['(kontrol|komand|kore)/items/set/live']['post'] = '$1/set_live_items';
$route['(kontrol|komand|kore)/item/set/live']['post'] = '$1/set_live_item';
$route['(kontrol|komand|kore)/items/set/inventory']['post'] = '$1/set_inventory_items';
$route['(kontrol|komand|kore)/item/set/inventory']['post'] = '$1/set_inventory_item';
$route['(kontrol|komand|kore)/item']['post'] = '$1/item';
$route['(kontrol|komand|kore)/item/digital']['post'] = '$1/item_digital';
$route['(kontrol|komand|kore)/item/discount/insert']['post'] = '$1/item_discount_insert';
$route['(kontrol|komand|kore)/item/ticket/(:num)']['get'] = '$1/item_ticket/id/$2';
$route['(kontrol|komand|kore)/item/ticket/update']['post'] = '$1/item_ticket_update';
$route['(kontrol|komand|kore)/item/advanced/update']['post'] = '$1/item_advanced_update';
$route['(kontrol|komand|kore)/purchase/options/save']['post'] = '$1/save_purchase_options';
$route['(kontrol|komand|kore)/shipping/options']['post'] = '$1/get_shipping_options';
$route['(kontrol|komand|kore)/shipment/update']['post'] = '$1/update_shipment';
$route['(kontrol|komand|kore)/items/reorder']['post'] = '$1/items_reorder';
$route['(kontrol|komand|kore)/item/categories/update']['post'] = '$1/item_categories_update';
$route['(kontrol|komand|kore)/item/switch/order']['post'] = '$1/item_switch_order';
$route['(kontrol|komand|kore)/item/live']['get'] = '$1/item_live';
$route['(kontrol|komand|kore)/exchange/rate']['get'] = '$1/exchange_rate';
$route['checkout/item/(:num)']['delete'] = 'checkout/order_item_remove/id/$1';//Checkout 5.0
$route['checkout/item/(:num)/guest']['delete'] = 'checkout/order_item_remove_guest/id/$1';//Checkout 5.0
$route['checkout/item/(:num)/guest']['post'] = 'checkout/order_insert_item_guest/id/$1';//Checkout 5.0
$route['checkout/item/(:num)']['post'] = 'checkout/order_insert_item/id/$1';//Checkout 5.0
$route['checkout/item/(:num)/guest']['put'] = 'checkout/order_update_item_guest/id/$1';//Checkout 5.0
$route['checkout/item/(:num)']['put'] = 'checkout/order_update_item/id/$1';//Checkout 5.0
$route['kore/item/(:num)/vote']['post'] = 'kore/item_vote/id/$1'; // Mi cuenta
$route['kore/item/(:num)/ratings']['get'] = 'kore/item_ratings/id/$1'; // Mi cuenta
$route['(kontrol|komand|kore)/item/search']['post'] = '$1/item_search';
$route['kore/item/(:num)/like/user/(:num)']['get'] = 'kore/item_like/id/$1/user/$2';
$route['kore/item/(:num)/dislike/user/(:num)']['get'] = 'kore/item_dislike/id/$1/user/$2';
$route['kore/ticket/(:num)']['get'] = 'kore/ticket/id/$1';

//Role
$route['(kontrol|komand|kore)/role/delete/all']['delete'] = '$1/roles_delete_all';
$route['(kontrol|komand|kore)/role/save/all']['post'] = '$1/roles_save_all';
$route['(kontrol|komand|kore)/migrate/users']['get'] = '$1/migrate_users';
$route['(kontrol|komand|kore)/role/migrate']['post'] = '$1/roles_migrate';

//COUNTRY
$route['(kontrol|komand|kore)/country/list']['get'] = '$1/countries';
$route['kore/codes/list']['get'] = 'kore/country_codes';

//STATE
$route['(kontrol|komand|kore)/state/list']['post'] = '$1/states';

//APPS
$route['(kontrol|komand|kore)/apps']['get'] = '$1/apps';
$route['(kontrol|komand|kore)/app/actions']['post'] = '$1/app_actions';

//B2B APP
$route['(kontrol|komand|kore)/app/b2b']['post'] = '$1/b2b_authorize_accounts';
$route['(kontrol|komand|kore)/app/b2b/accept_user_request']['post'] = '$1/b2b_accept_user_request';
$route['(kontrol|komand|kore)/app/b2b/delete_user_request']['post'] = '$1/b2b_delete_user_request';
$route['(kontrol|komand|kore)/app/b2b/revoque_user_access']['post'] = '$1/b2b_revoque_user_access';
$route['(kontrol|komand|kore)/app/b2b/custom_fields']['post'] = '$1/b2b_custom_fields';
$route['(kontrol|komand|kore)/app/b2b/set_data_request']['post'] = '$1/b2b_set_data_request';
$route['(kontrol|komand|kore)/app/b2b/login']['post'] = '$1/b2b_login';
$route['(kontrol|komand|kore)/app/b2b/access_request']['post'] = '$1/b2b_access_request';
$route['(kontrol|komand|kore)/app/b2b/send_email']['post'] = '$1/b2b_send_email';

// Inventory APP
$route['(kontrol|komand|kore)/app/inventory/save']['post'] = '$1/save_inventory';
$route['(kontrol|komand|kore)/app/inventory/csv']['post'] = '$1/csv_inventory';
$route['(kontrol|komand|kore)/app/inventory/items']['get'] = '$1/inventory_items';

//temp
$route['(kontrol|komand|kore)/opt1to2']['post'] = '$1/options1_to_options2';
$route['(kontrol|komand|kore)/upgradeOptions']['post'] = '$1/upgradeOptions';

// Lists
$route['kore/lists/create']['post'] = 'kore/lists_create';
$route['kore/lists/user/(:num)']['get'] = 'kore/lists/user/$1';
$route['kore/lists/(:num)/categories']['get'] = 'kore/lists_categories/id/$1';
$route['kore/lists/(:num)']['get'] = 'kore/lists_detail/id/$1';
$route['kore/lists/(:num)/items']['get'] = 'kore/lists_items/id/$1';
$route['kore/lists/(:num)/like/user/(:num)']['get'] = 'kore/lists_like/id/$1/user/$2';
$route['kore/lists/(:num)/dislike/user/(:num)']['get'] = 'kore/lists_dislike/id/$1/user/$2';
$route['kore/lists/(:num)/live']['get'] = 'kore/lists_live/id/$1';
$route['kore/lists/(:num)/unlive']['get'] = 'kore/lists_unlive/id/$1';
$route['kore/lists/remove_item/(:num)']['get'] = 'kore/lists_remove_item/id/$1';
$route['kore/lists/order']['post'] = 'kore/lists_order';
$route['kore/lists/homelist']['get'] = 'kore/lists_homelist';
$route['kore/lists/delete']['get'] = 'kore/lists_delete';
$route['kore/lists/categories']['post'] = 'kore/sync_categories';

$route['kore/user_basic/(:num)']['get'] = 'kore/basic_user_profile/id/$1';
$route['kore/follow']['post'] = 'kore/lists_follow';
$route['kore/total_stores']['get'] = 'kore/total_stores';

$route['kore/widget/categorization']['post'] = 'kore/widget_categorization';
$route['kore/widget/rating']['post'] = 'kore/widget_rating';
$route['kore/widget/categories']['get'] = 'kore/widget_categories';
$route['kore/widget/user_rating']['get'] = 'kore/widget_user_rating';
$route['kore/widget/user_categorie']['get'] = 'kore/widget_user_categorie';

//Intercom
$route['kontrol/intercom']['get'] = 'kontrol/intercom';


$route['kontrol/migrate/store/favorite']['post'] = 'kontrol/migrate_favorite_store';

$route['support/user/token/decode']['post'] = 'support/decode_token';
$route['support/logs']['post'] = 'support/logs';


$route['komand/order/(:num)/status']['get'] = 'komand/order_status/order_id/$1';
$route['komand/order/get/(:num)']['get'] = 'komand/order/order_id/$1';
$route['komand/store/(:num)/plus']['get'] = 'komand/store_plus/store_id/$1';
$route['komand/order/comment']['post'] = 'komand/order_comment';
$route['komand/order/search']['post'] = 'komand/order_search';


//Checkout
$route['checkout/cart']['post'] = 'checkout/cart';
$route['checkout/cart/guest']['post'] = 'checkout/cart_guest';
$route['checkout/cart/delete']['post'] = 'checkout/cart_delete';

//admin v4
$route['komand/order/search_orders']['post'] = 'komand/search_orders';
$route['komand/order/confirm_order']['post'] = 'komand/confirm_order';
$route['komand/order/update_order_delivery']['post'] = 'komand/update_order_delivery';
$route['komand/order/confirm_order_payment']['post'] = 'komand/confirm_order_payment';
$route['komand/order/reactivar_descargables']['post'] = 'komand/reactivar_descargables';
$route['komand/order/resend_order_email']['post'] = 'komand/resend_order_email';
$route['komand/order/change_order_payment_method']['post'] = 'komand/change_order_payment_method';
$route['komand/order/accept_cancellation_request']['post'] = 'komand/accept_cancellation_request';
$route['komand/order/new_payment_cash_option']['post'] = 'komand/new_payment_cash_option';
$route['komand/order/cancel_order']['post'] = 'komand/cancel_order';
$route['komand/order/undo_cancel_order']['post'] = 'komand/undo_cancel_order';
$route['komand/order/packages_manager']['post'] = 'komand/packages_manager';
$route['komand/order/reembolso']['post'] = 'komand/reembolso';
$route['komand/order/set_aclaracion']['post'] = 'komand/set_aclaracion';
$route['komand/order/set_payed_pod']['post'] = 'komand/set_payed_pod';
$route['komand/order/changeOrderDatePickup']['post'] = 'komand/changeOrderDatePickup';
$route['komand/order/create_order_charge']['post'] = 'komand/create_order_charge';
$route['komand/order/add_message']['post'] = 'komand/add_message';
$route['komand/order/get_historial']['post'] = 'komand/get_historial';
$route['komand/order/get_order_detail']['post'] = 'komand/get_order_detail';
$route['komand/order/new_mark_as_fraud']['post'] = 'komand/new_mark_as_fraud';
$route['komand/order/unmark_as_fraud']['post'] = 'komand/unmark_as_fraud';
$route['komand/order/send_order_mailxstatus']['post'] = 'komand/send_order_mailxstatus';
$route['komand/order/generatePackingListPDF']['post'] = 'komand/generatePackingListPDF';
$route['komand/order/asign_new_status']['post'] = 'komand/asign_new_status';
$route['komand/order/make_refund']['post'] = 'komand/make_refund';
$route['komand/order/guias_orders']['post'] = 'komand/guias_orders';

$route['kontrol/migrate/items/thumbs']['get'] = 'kontrol/migrate_items_thumbs';
$route['kontrol/redis/truncate']['get'] = 'kontrol/redis_truncate';
