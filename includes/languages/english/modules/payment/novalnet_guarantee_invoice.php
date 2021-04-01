<?php
/**
* This script is used for English language content
*
* @author Novalnet AG
* @copyright Copyright (c) Novalnet
* @license https://www.novalnet.de/payment-plugins/kostenlos/lizenz
* @link https://www.novalnet.de
*
* This free contribution made by request.
*
* If you have found this script useful a small
* recommendation as well as a comment on merchant
*
* Script : novalnet_guarantee_invoice.php
*/
include_once(dirname(__FILE__).'/novalnet.php');
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_TEXT_TITLE', 'Invoice with payment guarantee');
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_TEXT_DESCRIPTION', '<br>You will receive an e-mail with the Novalnet account details to complete the payment<br/>');
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_PUBLIC_TITLE', 'Invoice with payment guarantee ');
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_LOGO', (defined('MODULE_PAYMENT_NOVALNET_PAYMENT_LOGO_DISPLAY') && MODULE_PAYMENT_NOVALNET_PAYMENT_LOGO_DISPLAY == 'True') ? zen_image(DIR_WS_IMAGES . 'icons/novalnet/novalnet_invoice.png', 'Invoice with payment guarantee ') : '');

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_STATUS_TITLE', MODULE_PAYMENT_GUARNTEE_REQUIREMENT.MODULE_PAYMENT_NOVALNET_STATUS_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_STATUS_DESC', MODULE_PAYMENT_NOVALNET_STATUS_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_TEST_MODE_TITLE', MODULE_PAYMENT_NOVALNET_TEST_MODE_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_TEST_MODE_DESC', MODULE_PAYMENT_NOVALNET_TEST_MODE_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ONHOLD_TITLE', MODULE_PAYMENT_NOVALNET_PAYMENT_ONHOLD_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ONHOLD_DESC', MODULE_PAYMENT_NOVALNET_PAYMENT_ONHOLD_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ONHOLD_LIMIT_TITLE', MODULE_PAYMENT_NOVALNET_PAYMENT_ONHOLD_LIMIT_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ONHOLD_LIMIT_DESC', MODULE_PAYMENT_NOVALNET_PAYMENT_ONHOLD_LIMIT_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_MIN_AMOUNT_LIMIT_TITLE', 'Minimum order amount for payment guarantee');
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_MIN_AMOUNT_LIMIT_DESC', 'This setting will override the default setting for the minimum order amount. Note that amount should be in the range of 9,99 EUR - 5.000,00 EUR');

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_CUSTOMER_INFO_TITLE', MODULE_PAYMENT_NOVALNET_CUSTOMER_INFO_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_CUSTOMER_INFO_DESC', MODULE_PAYMENT_NOVALNET_CUSTOMER_INFO_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_SORT_ORDER_TITLE', MODULE_PAYMENT_NOVALNET_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_SORT_ORDER_DESC', MODULE_PAYMENT_NOVALNET_SORT_ORDER_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_PENDING_ORDER_STATUS_ID_TITLE', 'Payment pending order status');
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_PENDING_ORDER_STATUS_ID_DESC', 'Status to be used for pending transactions.');

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ORDER_STATUS_ID_TITLE', MODULE_PAYMENT_NOVALNET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ORDER_STATUS_ID_DESC', MODULE_PAYMENT_NOVALNET_ORDER_STATUS_DESC);

define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ZONE_TITLE', MODULE_PAYMENT_NOVALNET_PAYMENT_ZONE_TITLE);
define('MODULE_PAYMENT_NOVALNET_GUARANTEE_INVOICE_ZONE_DESC', MODULE_PAYMENT_NOVALNET_PAYMENT_ZONE_DESC);

?>