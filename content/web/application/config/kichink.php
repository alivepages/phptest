<?php  (! defined('BASEPATH')) and exit('No direct script access allowed');

$config = array();

// Urls
$config['API_BASE_URI'] = 'http://api.alpha.kichink.com/';
$config['LOGIN_BASE_URI'] = 'http://login.alpha.kichink.com/';
$config['UIKIT_SERVE'] = 'http://localhost:9010/';
$config['UIKIT_SERVE_STYLES'] = 'styles/';
$config['PDF_BASE_URI'] = 'https://pagos.kichink.com/';

// algolia
$config['algolia_app_ID'] = '6Z3SGSW00R';
$config['algolia_api_key'] = '9c39ad874d2e2d042720ee07319af8f8';
$config['algolia_index_stores'] = 'Kichink-stores-test';
$config['algolia_index_items'] = 'kichink-items-test';

// nexmo
$config['nexmo_api_key'] = '25c9162d';
$config['nexmo_api_secret'] = '83282678';

// openpay
$config['openpay_merchant_id'] = 'mjsfeyz2bglaysqvia80';
$config['openpay_private_key'] = 'sk_d743c92111b6415083dd35e1322fc8ca';
$config['openpay_public_key'] = 'pk_eb74c7cdeefc4c209056339387692309';
$config['openpay_production_mode'] = false;

// conekta
$config['conekta_public_key'] = 'key_Hscr2qJLq2j8gszS5Bjbqtg';
$config['conekta_private_key'] = 'key_F1NBwxMRiEkTuEPa6XFb1g';


// Twilio
$config['twilio_mode'] = 'prod'; //Mode ("sandbox" or "prod")
$config['twilio_account_sid'] = 'AC7ad9a5e2639233b476421e8bf5b53363';
$config['twilio_auth_token'] = '0357f2f8249a8e9c94f9f30da8a41a43';
$config['twilio_api_version'] = '2010-04-01';
$config['twilio_number'] = '6506810452';
$config['twilio_verification_from'] = '+525527895424';

//Banamex
$config['banamex_endpoint'] = 'https://secure.na.tnspayments.com/api/nvp/version/33';
$config['banamex_apiUsername'] = 'merchant.TEST1054439';
$config['banamex_apiPassword'] = '1f03fa14be434309775abc4d91831fc1';
$config['banamex_merchant'] = 'TEST1054439';

$config['stripe_public_key'] = 'pk_test_JZbEV5YbdJveApHWPP8nITCA';
$config['stripe_secret_key'] = 'sk_test_MDXaLVQdAr0yiJ4vRJqcXWbh';


$config['google_charts_base_url'] = 'https://chart.googleapis.com/chart';

$config['kash_endpoint'] = 'http://apibankash.kichink.com/';
$config['kash_validate_cart'] = 'api/KashUser/checkPin?';
$config['kash_create_charge'] = 'api/card/savePayment';
$config['kash_login'] = 'kash_api/auth';
$config['kash_user'] = 'kichink@kash.com';
$config['kash_password'] = 'kichink2016';
$config['kash_apikey'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJraWNoaW5rLmNvbSIsInN1YiI6ImFwaSB2MC4xIiwiaWF0IjoxNDY4NDI4MDU0LCJjb21wYW55IjoiS2ljaGluayIsInRpbWVfZXhwaXJhdGlvbiI6Iis1IGRheXMiLCJ1c2VyX2FnZW50IjoiTW96aWxsYVwvNS4wIChNYWNpbnRvc2g7IEludGVsIE1hYyBPUyBYIDEwXzExXzUpIEFwcGxlV2ViS2l0XC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBQb3N0bWFuXC80LjQuMiBDaHJvbWVcLzUxLjAuMjcwNC4xMDMgRWxlY3Ryb25cLzEuMi41IFNhZmFyaVwvNTM3LjM2IiwiZmluZ2VycHJpbnQiOiIiLCJ1c2VyIjp7ImlkIjoiOTAzNTYiLCJrYXNoX3VzZXJfaWQiOm51bGwsIk5hbWUiOiJjaGVja291dCIsInVzZXJuYW1lIjoiY2hlY2tvdXRAa2FzaC5jb20iLCJyb2xlIjoiIiwibGFuZ3VhZ2UiOiJlcyIsImNvdW50cnkiOiJNRVgiLCJjdXJyZW5jeSI6Ik1YTiJ9fQ.FIkP6ioFHN3Tyl8TopNosJKkpXqa-5A3cnraMMc1H-k';

$config['kount_apikey'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIxNjQ3MDAiLCJhdWQiOiJLb3VudC4xIiwiaWF0IjoxNDYzNTkyNzUyLCJzY3AiOnsia2EiOm51bGwsImtjIjpudWxsLCJhcGkiOnRydWUsInJpcyI6dHJ1ZX19.Bjjod7labKWHzih5q4ClQRGPbyT75XJ0TqqnwmNYuOM';
$config['kount_url'] = 'https://risk.test.kount.net';
$config['kount_data_collector'] = 'https://tst.kaptcha.com';
$config['kount_merchant_id'] = 164700;