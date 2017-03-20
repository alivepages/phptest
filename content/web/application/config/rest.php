<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| HTTP protocol
|--------------------------------------------------------------------------
|
| Should the service accept only HTTPS requests or not?
|
|   Default: FALSE
|
*/
$config['force_https'] = FALSE;

/*
|--------------------------------------------------------------------------
| REST Format
|--------------------------------------------------------------------------
|
| What format should the data be returned in by default?
|
|   Default: xml
|
*/
$config['rest_default_format'] = 'json';

/*
|--------------------------------------------------------------------------
| REST Status field name
|--------------------------------------------------------------------------
|
| The field name for the status of the response
|
|   'status'
|
*/
$config['rest_status_field_name'] = 'status';

/*
|--------------------------------------------------------------------------
| REST message field name
|--------------------------------------------------------------------------
|
| The field name for the message inside the response
|
|   'error'
|
*/
$config['rest_message_field_name'] = 'error';

/*
|--------------------------------------------------------------------------
| Enable emulate request
|--------------------------------------------------------------------------
|
| Should we enable emulation of the request (e.g. used in Mootools request)?
|
|   Default: TRUE
|
*/
$config['enable_emulate_request'] = TRUE;


/*
|--------------------------------------------------------------------------
| REST Realm
|--------------------------------------------------------------------------
|
| Name for the password protected REST API displayed on login dialogs
|
|   E.g: My Secret REST API
|
*/
$config['rest_realm'] = 'API KICHINK';

/*
|--------------------------------------------------------------------------
| REST Login
|--------------------------------------------------------------------------
|
| Is login required and if so, which type of login?
|
|   '' = no login required, 'basic' = unsecure login, 'digest' = more secure login,
|   'session' = check for PHP session variable. Set variable name below.
|
*/
$config['rest_auth'] = '';

/*
|--------------------------------------------------------------------------
| REST Login
|--------------------------------------------------------------------------
|
| Is login required and if so, which user store do we use?
|
|   '' = use config based users, 'ldap' = use LDAP authencation, 'library' = use a authentication library
|   If 'rest_auth' is 'session' then set 'auth_source' to the name of the session variable to check for.
|
*/

//change this to '' for wildcard unit test
$config['auth_source'] = '';

/*
|--------------------------------------------------------------------------
| REST Login
|--------------------------------------------------------------------------
|
| If library authentication is used define the class and function name here
|
| The function should accept two parameters: class->function($username, $password)
| In other cases override the function _perform_library_auth in your controller
|
| For digest authentication the library function should return already stored md5(username:restrealm:password) for that username
|   E.g: md5('admin:REST API:1234') = '1e957ebc35631ab22d5bd6526bd14ea2'
|
*/
$config['auth_library_class'] = '';
$config['auth_library_function'] = '';

/*
|--------------------------------------------------------------------------
| Override auth types for specific class/method
|--------------------------------------------------------------------------
|
| Set specific authentication types for methods within a class (controller)
|
| Set as many config entries as needed.  Any methods not set will use the default 'rest_auth' config value.
|
| example:
|
|           $config['auth_override_class_method']['deals']['view'] = 'none';
|           $config['auth_override_class_method']['deals']['insert'] = 'digest';
|           $config['auth_override_class_method']['accounts']['user'] = 'basic';
|           $config['auth_override_class_method']['dashboard']['*'] = 'none|digest|basic';
|
| Here 'deals', 'accounts' and 'dashboard' are controller names, 'view', 'insert' and 'user' are methods within. An asterisk may also be used to specify an authentication method for an entire classes methods. Ex: $config['auth_override_class_method']['dashboard']['*'] = 'basic'; (NOTE: leave off the '_get' or '_post' from the end of the method name)
| Acceptable values are; 'none', 'digest' and 'basic'.
|
*/
// $config['auth_override_class_method']['deals']['view'] = 'none';
// $config['auth_override_class_method']['deals']['insert'] = 'digest';
// $config['auth_override_class_method']['accounts']['user'] = 'basic';
$config['auth_override_class_method']['kichink_api']['index'] = 'none';
$config['auth_override_class_method']['kontrol']['index'] = 'none';
$config['auth_override_class_method']['komand']['index'] = 'none';
$config['auth_override_class_method']['kore']['index'] = 'none';
$config['auth_override_class_method']['kichink_api']['auth'] = 'none';
$config['auth_override_class_method']['kontrol']['auth'] = 'none';
$config['auth_override_class_method']['komand']['auth'] = 'none';
$config['auth_override_class_method']['kore']['auth'] = 'none';
$config['auth_override_class_method']['kore']['user_signup'] = 'none';
$config['auth_override_class_method']['kontrol']['recovery_password'] = 'none';
$config['auth_override_class_method']['kontrol']['require_recovery_password'] = 'none';
$config['auth_override_class_method']['kontrol']['options1_to_options2'] = 'none';
$config['auth_override_class_method']['kontrol']['upgradeOptions'] = 'none';
$config['auth_override_class_method']['kore']['customcss'] = 'none';
$config['auth_override_class_method']['kontrol']['customcss'] = 'none';
$config['auth_override_class_method']['kore']['store_template'] = 'none';
$config['auth_override_class_method']['kontrol']['store_template'] = 'none';
$config['auth_override_class_method']['kore']['item_template'] = 'none';
$config['auth_override_class_method']['kontrol']['item_template'] = 'none';
$config['auth_override_class_method']['kontrol']['w'] = 'none';
$config['auth_override_class_method']['kontrol']['roles_migrate'] = 'none';
$config['auth_override_class_method']['kontrol']['migrate_users'] = 'none';
$config['auth_override_class_method']['kontrol']['migrate_favorite_store'] = 'none';



$config['auth_override_class_method']['checkout']['order_insert_item_guest'] = 'none';
$config['auth_override_class_method']['checkout']['cart_guest'] = 'none';
$config['auth_override_class_method']['checkout']['user_card_guest'] = 'none';
$config['auth_override_class_method']['checkout']['user_shipment_guest'] = 'none';
$config['auth_override_class_method']['kore']['order_shipments'] = 'none';
$config['auth_override_class_method']['kore']['orders'] = 'none';
$config['auth_override_class_method']['checkout']['order_coupon_guest'] = 'none';
$config['auth_override_class_method']['checkout']['order_coupons_guest'] = 'none';
$config['auth_override_class_method']['checkout']['order_item_insert_guest'] = 'none';
$config['auth_override_class_method']['checkout']['order_item_remove_guest'] = 'none';
$config['auth_override_class_method']['checkout']['order_update_item_guest'] = 'none';
$config['auth_override_class_method']['checkout']['check_user_register'] = 'none';
$config['auth_override_class_method']['kore']['countries'] = 'none';
$config['auth_override_class_method']['kore']['states'] = 'none';
$config['auth_override_class_method']['kore']['store_details'] = 'none';
$config['auth_override_class_method']['kore']['store_items'] = 'none';
$config['auth_override_class_method']['kore']['lists'] = 'none';
$config['auth_override_class_method']['kore']['lists_detail'] = 'none';
$config['auth_override_class_method']['kore']['lists_items'] = 'none';
$config['auth_override_class_method']['kore']['lists_like'] = 'none';
$config['auth_override_class_method']['kore']['lists_dislike'] = 'none';
$config['auth_override_class_method']['kore']['item_like'] = 'none';
$config['auth_override_class_method']['kore']['item_dislike'] = 'none';
$config['auth_override_class_method']['kore']['store_like'] = 'none';
$config['auth_override_class_method']['kore']['store_dislike'] = 'none';
$config['auth_override_class_method']['kore']['basic_user_profile'] = 'none';
$config['auth_override_class_method']['kore']['lists_homelist'] = 'none';

$config['auth_override_class_method']['kore']['store_search'] = 'none';
$config['auth_override_class_method']['kore']['item_search'] = 'none';
$config['auth_override_class_method']['kore']['total_stores'] = 'none';

$config['auth_override_class_method']['kore']['b2b_custom_fields'] = 'none';
$config['auth_override_class_method']['kore']['b2b_set_data_request'] = 'none';
$config['auth_override_class_method']['kore']['b2b_login'] = 'none';
$config['auth_override_class_method']['kore']['b2b_access_request'] = 'none';
$config['auth_override_class_method']['kore']['b2b_send_email'] = 'none';
$config['auth_override_class_method']['kore']['ticket'] = 'none';
$config['auth_override_class_method']['kore']['token_banamex'] = 'none';

$config['auth_override_class_method']['kontrol']['store_request'] = 'none';
$config['auth_override_class_method']['kontrol']['store_smscode_request'] = 'none';
$config['auth_override_class_method']['kontrol']['user_email_validate'] = 'none';
$config['auth_override_class_method']['kontrol']['user_name_validate'] = 'none';
$config['auth_override_class_method']['kontrol']['store_name_validate'] = 'none';
$config['auth_override_class_method']['kontrol']['store_code_verify'] = 'none';
$config['auth_override_class_method']['kontrol']['store_code_request'] = 'none';
$config['auth_override_class_method']['kontrol']['store_manual_verify'] = 'none';
$config['auth_override_class_method']['kontrol']['phone_verification_request'] = 'none';
$config['auth_override_class_method']['kontrol']['valid_url'] = 'none';

$config['auth_override_class_method']['kore']['order_simplified'] = 'none';
$config['auth_override_class_method']['kore']['order_delivered_survey'] = 'none';
$config['auth_override_class_method']['kore']['user_shipment_guest'] = 'none';
$config['auth_override_class_method']['checkout']['cart_guest'] = 'none';
$config['auth_override_class_method']['checkout']['shipment_guest'] = 'none';
$config['auth_override_class_method']['checkout']['store_shipments_guest'] = 'none';
$config['auth_override_class_method']['checkout']['order_shipment_guest'] = 'none';
$config['auth_override_class_method']['checkout']['get_processor'] = 'none';
$config['auth_override_class_method']['checkout']['get_logo_gif'] = 'none';
$config['auth_override_class_method']['checkout']['get_logo_html'] = 'none';
$config['auth_override_class_method']['checkout']['cash'] = 'none';
$config['auth_override_class_method']['checkout']['migrate_brand'] = 'none';
$config['auth_override_class_method']['checkout']['register_new_user'] = 'none';
$config['auth_override_class_method']['checkout']['cart_delete'] = 'none';

$config['auth_override_class_method']['kore']['widget_categorization'] = 'none';
$config['auth_override_class_method']['kore']['widget_rating'] = 'none';
$config['auth_override_class_method']['kore']['widget_categories'] = 'none';
$config['auth_override_class_method']['kore']['widget_user_rating'] = 'none';
$config['auth_override_class_method']['kore']['widget_user_categorie'] = 'none';
$config['auth_override_class_method']['kore']['get_stores_by_categories'] = 'none';
$config['auth_override_class_method']['kore']['get_items_by_categories'] = 'none';

$config['auth_override_class_method']['checkout']['orders_guest'] = 'none';
$config['auth_override_class_method']['kontrol']['create_stores_index'] = 'none';
$config['auth_override_class_method']['kontrol']['create_items_index'] = 'none';

//---Uncomment list line for the wildard unit test
//$config['auth_override_class_method']['wildcard_test_cases']['*'] = 'basic';
/*
|--------------------------------------------------------------------------
| REST Login usernames
|--------------------------------------------------------------------------
|
| Array of usernames and passwords for login, if ldap is configured this is ignored
|
|   array('admin' => '1234')
|
*/
$config['rest_valid_logins'] = array('admin' => '1234');

/*
|--------------------------------------------------------------------------
| Global IP Whitelisting
|--------------------------------------------------------------------------
|
| Limit connections to your REST server to whitelisted IP addresses.
|
| Usage:
| 1. Set to true *and* select an auth option for extreme security (client's IP
|    address must be in whitelist and they must also log in)
| 2. Set to true with auth set to false to allow whitelisted IPs access with no login.
| 3. Set to false here but set 'auth_override_class_method' to 'whitelist' to
|    restrict certain methods to IPs in your whitelist
|
*/
$config['rest_ip_whitelist_enabled'] = false;

/*
|--------------------------------------------------------------------------
| REST IP Whitelist
|--------------------------------------------------------------------------
|
| Limit connections to your REST server to a comma separated
| list of IP addresses
|
| Example: $config['rest_ip_whitelist'] = '123.456.789.0, 987.654.32.1';
|
| 127.0.0.1 and 0.0.0.0 are allowed by default.
|
*/
$config['rest_ip_whitelist'] = '';

/*
|--------------------------------------------------------------------------
| Global IP Blacklisting
|--------------------------------------------------------------------------
|
| Prevent connections to your REST server from blacklisted IP addresses.
|
| Usage:
| 1. Set to true *and* add any IP address to "rest_ip_blacklist" option
|
*/
$config['rest_ip_blacklist_enabled'] = false;

/*
|--------------------------------------------------------------------------
| REST IP Blacklist
|--------------------------------------------------------------------------
|
| Block connections from these IP addresses.
|
| Example: $config['rest_ip_blacklist'] = '123.456.789.0, 987.654.32.1';
|
|
*/
$config['rest_ip_blacklist'] = '';

/*
|--------------------------------------------------------------------------
| REST Database Group
|--------------------------------------------------------------------------
|
| Connect to a database group for keys, logging, etc. It will only connect
| if you have any of these features enabled.
|
|   'default'
|
*/
$config['rest_database_group'] = 'Kichink';

/*
|--------------------------------------------------------------------------
| REST API Keys Table Name
|--------------------------------------------------------------------------
|
| The table name in your database that stores API Keys.
|
|   'keys'
|
*/
$config['rest_keys_table'] = 'keys';

/*
|--------------------------------------------------------------------------
| REST Enable Keys
|--------------------------------------------------------------------------
|
| When set to true REST_Controller will look for a key and match it to the DB.
| If no key is provided, the request will return an error.
|
|   FALSE

    CREATE TABLE `keys` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `key` varchar(40) NOT NULL,
      `level` int(2) NOT NULL,
      `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
      `is_private_key` tinyint(1)  NOT NULL DEFAULT '0',
      `ip_addresses` TEXT NULL DEFAULT NULL,
      `date_created` int(11) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/
$config['rest_enable_keys'] = true;

/*
|--------------------------------------------------------------------------
| REST Table Key Column Name
|--------------------------------------------------------------------------
|
| If you are not using the default table schema as shown above, what is the
| name of the db column that holds the api key value?
|
*/
$config['rest_key_column'] = 'key';

/*
|--------------------------------------------------------------------------
| REST Key Length
|--------------------------------------------------------------------------
|
| How long should created keys be? Double check this in your db schema.
|
|   Default: 32
|   Max: 40
|
*/
$config['rest_key_length'] = 40;

/*
|--------------------------------------------------------------------------
| REST API Key Variable
|--------------------------------------------------------------------------
|
| Which variable will provide us the API Key
|
| Default: X-API-KEY
|
*/
$config['rest_key_name'] = 'X-API-KEY';

/*
|--------------------------------------------------------------------------
| REST API Logs Table Name
|--------------------------------------------------------------------------
|
| The table name in your database that stores logs.
|
|   'logs'
|
*/
$config['rest_logs_table'] = 'logs';

/*
|--------------------------------------------------------------------------
| REST Enable Logging
|--------------------------------------------------------------------------
|
| When set to true REST_Controller will log actions based on key, date,
| time and IP address. This is a general rule that can be overridden in the
| $this->method array in each controller.
|
|   FALSE
|
    CREATE TABLE `logs` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `uri` varchar(255) NOT NULL,
      `method` varchar(6) NOT NULL,
      `params` text DEFAULT NULL,
      `api_key` varchar(40) NOT NULL,
      `ip_address` varchar(45) NOT NULL,
      `time` int(11) NOT NULL,
      `rtime` float DEFAULT NULL,
      `authorized` tinyint(1) NOT NULL,
      `response_code` smallint(3) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/
$config['rest_enable_logging'] = TRUE;


/*
|--------------------------------------------------------------------------
| REST API Access Table Name
|--------------------------------------------------------------------------
|
| The table name in your database that stores the access controls.
|
|   'access'
|
*/
$config['rest_access_table'] = 'access';

/*
|--------------------------------------------------------------------------
| REST Method Access Control
|--------------------------------------------------------------------------
|
| When set to true REST_Controller will check the access table to see if
| the API KEY can access that controller.  rest_enable_keys *must* be enabled
| to use this.
|
|   FALSE
|
CREATE TABLE `access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL DEFAULT '',
  `controller` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/
$config['rest_enable_access'] = TRUE;


/*
|--------------------------------------------------------------------------
| REST API Param Log Format
|--------------------------------------------------------------------------
|
| When set to true API log params will be stored in the database as JSON,
| when false they will be php serialized.
|
*/
$config['rest_logs_json_params'] = FALSE;

/*
|--------------------------------------------------------------------------
| REST API Limits Table Name
|--------------------------------------------------------------------------
|
| The table name in your database that stores limits.
|
|   'limits'
|
*/
$config['rest_limits_table'] = 'limits';

/*
|--------------------------------------------------------------------------
| REST Enable Limits
|--------------------------------------------------------------------------
|
| When set to true REST_Controller will count the number of uses of each method
| by an API key each hour. This is a general rule that can be overridden in the
| $this->method array in each controller.
|
|   FALSE
|
    CREATE TABLE `limits` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `uri` varchar(255) NOT NULL,
      `count` int(10) NOT NULL,
      `hour_started` int(11) NOT NULL,
      `api_key` varchar(40) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
| To specify limits, within your Controller __construct() method add per-method
| limits with:

 $this->method['METHOD_NAME']['limit'] = [NUM_REQUESTS_PER_HOUR];

| See application/controllers/api/example.php for examples.
*/
$config['rest_enable_limits'] = FALSE;

/*
|--------------------------------------------------------------------------
| REST Ignore HTTP Accept
|--------------------------------------------------------------------------
|
| Set to TRUE to ignore the HTTP Accept and speed up each request a little.
| Only do this if you are using the $this->rest_format or /format/xml in URLs
|
|   FALSE
|
*/
$config['rest_ignore_http_accept'] = FALSE;

/*
|--------------------------------------------------------------------------
| REST AJAX Only
|--------------------------------------------------------------------------
|
| Set to TRUE to only allow AJAX requests. If TRUE and the request is not
| coming from AJAX, a 505 response with the error message "Only AJAX
| requests are accepted." will be returned. This is good for production
| environments. Set to FALSE to also accept HTTP requests.
|
|   FALSE
|
*/
$config['rest_ajax_only'] = FALSE;

/* End of file config.php */
/* Location: ./system/application/config/rest.php */
