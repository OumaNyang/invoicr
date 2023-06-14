<?php
// Debugging
ini_set('error_reporting', E_ALL);

// DATABASE INFORMATION
define('DATABASE_HOST', getenv('IP'));
define('DATABASE_NAME', 'invoivoitix_2b');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', '');

// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo.png');
define('COMPANY_LOGO_WIDTH', '300');
define('COMPANY_LOGO_HEIGHT', '90');
define('COMPANY_NAME','Angulat Group Pty');
define('COMPANY_ADDRESS_1','Nyerere Square');
define('COMPANY_ADDRESS_2','Dodoma');
define('COMPANY_ADDRESS_3',' ');
define('COMPANY_COUNTY','TZ');
define('COMPANY_POSTCODE','10100');

define('COMPANY_NUMBER','Company No: 865626210'); // Company registration number
define('COMPANY_VAT', 'Company VAT: P5462656Y'); // Company TAX/VAT number

// EMAIL DETAILS
define('EMAIL_FROM', 'digital@novel.co.ke'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'digital@novel.co.ke'); // Email from address
define('EMAIL_SUBJECT', 'Your Invoice'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice default body'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Quote default body'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Receipt default body'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'MD'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Africa/Nairobi'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', 'KSH'); // Currency symbol
define('ENABLE_VAT', true); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '16'); // This is the percentage value

define('PAYMENT_DETAILS', 'Angulat Group.<br>Sort Code: 00-00-00<br>Account Number: 69825983'); // Payment information
define('FOOTER_NOTE', 'Angulat Group Pty');

// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

?>