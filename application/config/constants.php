<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/* Nextasy Contants Initialization */
define('HIGH_PTIORITY_SELECTED', 1);
$active_user = 1;
$active=1;
$inactive=0;
$active_status='1';
$active_instatus='2';
$hold_status = '3';
 $gnp_active_status='Y';
$active_team_activity_status='1';
$ticket_documents_path='public/ticket/documents/';

$invalid_image="Please select valid Image";
$invalid_location='Please enter valid location'; 

$data_saved="Your data has been updated successfully";
$data_deleted="your data has been deleted";

$error_message = "Some Error Occured, Please Contact Administrator";
$try_again ="Some Error Occured.Try again";

//project stages
 $on_going_status=2;

//images path
$project_documents_path='public/project/documents/';
$project_img_path='public/project/image/';
$person_path='public/person/';
 define('company_path', 'public/company/');

define('person_path1', 'public/person/resize/');
define('prs_width', 60);
define('prs_height', 60);
//define('prs_image_library', '$_FILES['file']['name']');
define('prs_source_image', 'gd2');
define('prs_maintain_ratio', TRUE);

$person_no_img_path='public/images/prson_no_img.png';
 $project_no_img_path='public/images/project_no_img.png';

// Start of global variables for communication 
$EUS_type_email='email';
$EUS_type_sms='sms';
$TMP_name_reg_verification='verification';
$EUS_USR_type_user='user';
$EUS_USR_type_admin='admin';
$admin_email='admin_email';
$admin_contact='admin_contact';
$admin_source_email='admin_source_email';
$admin_source_pw='admin_source_pw';
$eus_status_active= '1';
// End of global variables for communication


//communication model events

$ticket_event='ticket';
$ticket_changed_event='ticket_changed';
$ticket_comment_event='ticket_comment';
$template_comment_event='template_comment';
$ticket_owner_comment_event='ticket_owner_comment';
//communication model template

$ticket_temp='ticket';
$ticket_changed_temp='ticket_changed';
$ticket_comment_temp='ticket_comment';
$template_comment_temp='template_comment';
$ticket_owner_comment_temp='ticket_owner_comment';

// invoice

$inv_status = '1';

// qoutation

$qut_status = '1';

// reminder

$rem_status = '1';
$rem_done_status = '2';
//Ticket status
$released=6;
$closed=7;
$open=1;
$Development=3;
$review=4;
$rework=8;

//Ticket Severity
define('severity_high', 1);

// Departments
$admin=1;
define('CLIENT_DPT_ID', 3);

//activity type
$activity=1;
$project=2;

/* Encryption and Decryption*/
define('KEY', 'NextasyMumbaiToDubai2017');
define('CIPHER', 'AES-128-ECB');


/* End of file constants.php */
/* Location: ./application/config/constants.php */

/*
|--------------------------------------------------------------------------
|Email Contents
|--------------------------------------------------------------------------
|
| These templates are used while sending email
|
*/
/***********************************************************
				NEW ASSIGNED TICKET 
************************************************************/

define('PROJECT_NAME','Nextasy Support');

define('ADD_TICKET_EMAIL_SUBJECT','%TICKET_ID% - %TICKET_PRIORITY% has been assigned to you by %PERSON_SENDER%');

define('ADD_TICKET_EMAIL_BODY','Hi %PERSON_RECEIVER%,<br>
		<b>%PERSON_SENDER%</b> has assigned you <b><a href="%TICKET_URL%" target="_blank">%TICKET_ID%</a><br></b> 
		Title: <b>%TICKET_TITLE% </b><br>
		Status: <b>%TICKET_STATUS%</b> <br>
		Project: <b>%PROJECT_NAME%</b> <br>
		Priority: <b>%TICKET_PRIORITY%</b> <br>
		Description: %TICKET_DESC% <br><br>
		Regards,<br>
		Admin,<br>
		<a href="http://www.support.nextasy.in" target="_blank"> Nextasy Support</a>');


/***************************************************************
			MODIFIED TICKET 
****************************************************************/

define('EDIT_TICKET_EMAIL_SUBJECT','%TICKET_ID% - %TICKET_PRIORITY% modified by %PERSON_SENDER%');

define('EDIT_TICKET_EMAIL_BODY','Hi %PERSON_RECEIVER%,<br>
		<b>%PERSON_SENDER%</b> has modified your ticket <b><a href="%TICKET_URL%" target="_blank">%TICKET_ID%</a><br></b> 
		Title: <b>%TICKET_TITLE% </b><br>
		Old status: <b>%TICKET_OLD_STATUS%</b><br>
		Old user: <b>%TICKET_OLD_USER%</b><br>
		New Status: <b>%TICKET_NEW_STATUS%</b><br>
		New User: <b>%TICKET_NEW_USER%</b><br>
		Project: <b>%PROJECT_NAME%</b> <br>
		Priority: <b>%TICKET_PRIORITY%</b><br>
		Description: %TICKET_DESC% <br><br>

		Regards,<br>
		Admin,<br>
		<a href="http://www.support.nextasy.in" target="_blank"> Nextasy Support</a>');


/***************************************************************
			BASIC MODIFICATION IN TICKET 
****************************************************************/

define('BASIC_EDIT_TICKET_EMAIL_SUBJECT','%TICKET_ID% - %TICKET_PRIORITY% updated by %PERSON_SENDER%');

define('BASIC_EDIT_TICKET_EMAIL_BODY','Hi %BASIC_PERSON_RECEIVER%,<br>
		<b>%BASIC_PERSON_SENDER%</b> has modified your ticket <b><a href="%BASIC_TICKET_URL%" target="_blank">%BASIC_TICKET_ID%</a><br></b> 
		Title: <b>%BASIC_TICKET_TITLE% </b><br>
		
		
		Project: <b>%BASIC_PROJECT_NAME%</b> <br>
		Priority: <b>%BASIC_TICKET_PRIORITY%</b><br>
		Description: %BASIC_TICKET_DESC% <br><br>

		Regards,<br>
		Admin,<br>
		<a href="http://www.support.nextasy.in" target="_blank"> Nextasy Support</a>');



/***************************************************************
			TAGGED IN TICKET 
***************************************************************/

define('TAG_TICKET_EMAIL_SUBJECT','You are tagged in %TICKET_ID% - %TICKET_PRIORITY% by %PERSON_SENDER%');

define('TAG_TICKET_EMAIL_BODY','Hi %PERSON_RECEIVER%,<br>
		<b>%PERSON_SENDER%</b> has tagged you in <b><a href="%TICKET_URL%" target="_blank">%TICKET_ID%</a><br></b> 
		Title: <b>%TICKET_TITLE% </b><br>
		Status: <b>%TICKET_STATUS%</b> <br>
		Project: <b>%TICKET_PROJECT%</b> <br>
		Priority: <b>%TICKET_PRIORITY%</b><br>
		Comment: <b>%TICKET_COMMENT%</b><br>
		Tagged Users:<b>%TAGGED_USERS%</b><br>
		Regards,<br>
		Admin,<br>
		<a href="http://www.support.nextasy.in" target="_blank"> Nextasy Support</a>');


/*************************************************************
			Comment ON TICKET 
**************************************************************/

define('COMMENT_TICKET_EMAIL_SUBJECT','New Comment on %TICKET_ID% - %TICKET_PRIORITY% by %PERSON_SENDER%');

define('COMMENT_TICKET_EMAIL_BODY','Hi %PERSON_RECEIVER%,<br>
		<b>%PERSON_SENDER%</b> has commented on your ticket-  <b><a href="%TICKET_URL%" target="_blank">%TICKET_ID%</a><br></b> 
		Title: <b>%TICKET_TITLE% </b><br>
		Status: <b>%TICKET_STATUS%</b> <br>
		Project: <b>%TICKET_PROJECT%</b> <br>
		Priority: <b>%TICKET_PRIORITY%</b><br>
		Comment: <b>%TICKET_COMMENT%</b><br>
		Tagged Users:<b>%TAGGED_USERS%</b><br>
		Regards,<br>
		Admin,<br>
		<a href="http://www.support.nextasy.in" target="_blank"> Nextasy Support</a>');



/***************************************************************
			TAGGED IN TEMPLATE 
***************************************************************/

define('TAG_TEMPLATE_EMAIL_SUBJECT','You are tagged in %TEMPLATE_TITLE% by %PERSON_SENDER%');

define('TAG_TEMPLATE_EMAIL_BODY','Hi %PERSON_RECEIVER%,<br>
		<b>%PERSON_SENDER%</b> has tagged you in Template - <b><a href="%TEMPLATE_URL%" target="_blank">%TEMPLATE_TITLE%</a><br></b>
		Comment: <b>%TEMPLATE_COMMENT%</b><br>
		Tagged Users:<b>%TEMPLATE_USERS%</b><br><br>
		Regards,<br>
		Admin,<br>
		<a href="http://www.support.nextasy.in" target="_blank"> Nextasy Support</a>');


define('PENDING_REMINDER_EMAIL_SUBJECT' ,'Welcome to '.PROJECT_NAME.'!');

define('PENDING_REMINDER_EMAIL_BODY','Dear %PERSON_NAME%, <br/>

An amount of Rs. %AMOUNT% is due on %REMINDER_DATE%. Please make the payment as soon as possible. 

Warm regards,<br/>'.PROJECT_NAME);





define('EMAIL_PROTOCOL', 'smtp');
define('EMAIL_HOST', 'mail.nextasy.in');
define('EMAIL_PORT', 587);
define('EMAIL_USERNAME', 'noreply@nextasy.in');
define('EMAIL_PASSWORD', 'Nexta@12#$');
define('EMAIL_TYPE', 'html');
define('EMAIL_CHARSET', 'iso-8859-1');
define('EMAIL_WORDWRAP', TRUE);


//word_limitor
define('word_limitor', '300');
define('start_time', '10:45:00');


//group name

 define('NOT_TYPE', 'not_type');

 //NOTIFICATION SUBTYPE

 define('NTF_TICKET_ADD', '1');
 define('NTF_TICKET_MODIFIED', '2');
  define('NTF_TICKET_COMMENT', '5');
 define('NTF_TAGGED_IN_TICKET_COMMENT', '6');
 define('NTF_APPROVE_AND_REJECT', '7');
  //NOTIFICATION STATUS

 define('NTF_READ_STATUS', '1');
 define('NTF_UNREAD_STATUS', 0);

   //NOTIFICATION PRIORITY
 define('NTF_IMP_PRIORITY', '1');
  define('NTF_GENERAL_PRIORITY', '2');

     //NOTIFICATION Delivery

 define('NTF_UNDELIVERED', 0);
  define('NTF_DELIVERED', 1);


/*
|--------------------------------------------------------------------------
|NOTIFICATIONS CONTENT
|--------------------------------------------------------------------------
|
| These templates are used while sending notification
|
*/

/***********************************************************
				NEW ASSIGNED TICKET 
************************************************************/

// define('ADD_TICKET_NOTIFICATION',' %PERSON_SENDER% has assigned you ticket - <b><a href="%TICKET_URL%" target="_blank">%TICKET_ID%</a></b>');

define('ADD_TICKET_NOTIFICATION',' %PERSON_SENDER% has assigned you ticket -<b>%TICKET_ID%</b>');


define('MODIFIED_TICKET_NOTIFICATION',' %PERSON_SENDER% has modified your ticket -<b>%TICKET_ID%</b>');


define('TICKET_COMMENT_NOTIFICATION',' %PERSON_SENDER% has Commented on your ticket -<b>%TICKET_ID%</b>');

define('TAGGED_IN_TICKET_COMMENT',' %PERSON_SENDER% has tagged you in  ticket -<b>%TICKET_ID%</b>');

//Leave Management constants
define('EMAIL_ADMIN',		'stanley@nextasy.in');

//define('SUBJECT_ADMIN',		'- A Leave application has been posted through your Nextasy Support');
// define('MESSAGE_CUSTOMER', '<br><br> We appreciate your time & efforts.You are very important to us, all information received will always remain confidential.<br> We will contact you as soon as we review your message. <br> We wish you a great day ahead.<br><br>Thank you.');
define('SUBJECT_ADMIN_SINGLE', 'Leave request on %DATE% by %PERSON%:');
define('SUBJECT_ADMIN_MULTIPLE', 'Leave request from %FROM% to %TO% by %PERSON%:<br><br>');
define('SUBJECT_USER',		'-  Leave application ');
define('MESSAGE_USER', 'Hello,<br><br>Your leave application has been successfully submitted :<br><br>');

define('DEBIT',	'2');
define('CREDIT','1');
define('ACTIVE_STATUS', '1');
define('IN_ACTIVE_STATUS', '0');
define('ADMIN','1');

define('USER','1,2');

define('PENDING','0');
define('APPROVED','2');
define('REJECTED','3');

define('LEAVE_STATUS','lvt_sts');

define('CASUAL','1');
define('SUBJECT_USER_APPROVED','Your Leave Application has been Approved');
define('SUBJECT_USER_REJECTED','Your Leave Application has been Rejected');
define('ADD_APPROVE_NOTIFICATION','Leave Application Has Been Approved by %PERSON%');

define('ADD_REJECT_NOTIFICATION','Leave Application Has Been Rejected by %PERSON%');

define('ADD_CREDIT_NOTIFICATION','Leave Has Been Credited to your account by %PERSON%');

define('LEAVE_CREDIT_MESSAGE','%QTY% %LEAVE_TYPE% Leave Has Been Credited to your account by %PERSON% for %REASON% ');

define('SICK','2');
define('EMERGENCY','3');


//send email on invoice constants
define('NAME','Nextasy Technologies');
define('BANK_NAME','ICICI Bank');
define('ACCOUNT_TYPE','Current Account');
define('ACCOUNT_DETAILS','120905500290');
define('IFSC_CODE','ICIC0001209');
define('BRANCH_NAME','Mahavir Nagar Branch');
define('INVOICE_LINK','http://care.nextasy.in/invoice-detail');
define('CARE_LINK','http://care.nextasy.in');
define('NEXTASY_TECH','http://nextasy.in');
define('NEXTASY_CONTACT_NO','+919930260491');
define('NEXTASY_EMAIL_ID','biz@Nextasy.in');
define('NEXTASY_ADDRESS','G160, Ground Floor, Raghuleela Mega Mall, Kandivali West,<br> Mumbai, Maharashtra 400067');
define('NEXTASY_IMAGE','http://nextasy.in/assets/img/nextasy.png');

define('NEXTASY_SUPPORT_URL','http://support.nextasy.in/');

define('COMPANY_STATE','cmp_state');
define('NEXTASY_DISCOUNT','discount_type');

define('ONGOING','2');
define('COMPLETED','1');
define('ONHOLD','4');
define('INTERNAL','6');
define('PRODUCT','5');
define('UNPAID_LEAVE','4');
define('LIVE_HOLD','7');
define('PAYMENT_FOLLOW_UP','8');
define('IN_QUEUE','3');
define('POST_PRODUCTION','9');
define('CURRENCY_TYPE','currency_type');
define('INR','1');
define('ENCASHED','5');
define('ENCASHED_TYPE','4');
define('SALARY_DAILY_HOURS','9');
define('SALARY_LATE_MARK','10:45:00');

/****Ticket Status closed and on-hold ******/
define('TCK_STATUS_CLOSED','7');
define('TCK_STATUS_ONHOLD','9');

/****Ticket Status closed and on-hold ******/

/****Purchase ******/
define('PURCHASE_ATTACH_PATH', 'public/purchase_attach');
/****Purchase ******/

/****Quotation Status ******/
define('QUOTATION_APPRVL_STATUS', 'qut_apprvl_status');
define('QUOTATION_APPRVL_STATUS_APPROVED', '1');
define('QUOTATION_APPRVL_STATUS_PENDING', '2');
/****Quotation Status ******/


define('GNP_ACTIVE_STATUS','Y');

//****** Finance product Type *******//
define('FINANCE_PRODUCT_TYPE','fin_prd_type');
define('FIN_PRD_TYPE_PRCH','1');
define('FIN_PRD_TYPE_SALES','2');
define('FIN_PRD_TYPE_BOTH','3');
//****** Finance product Type *******//


define('PRJ_STATE','prj_state');

/****COMPANY TYPE  ******/
define('COMPANY_TYPE', 'cmp_type');
define('COMPANY_TYPE_COMPANY', '1');
define('COMPANY_TYPE_VENDOR', '2');
define('COMPANY_TYPE_BOTH', '3');
define('COMPANY_REFERENCE', 'cmp_referece');

/****COMPANY TYPE  ******/


/****Invoice Purchase product TYPE  ******/

define('INVOICE_PURCHASE_PRODUCT', '1');
define('INVOICE_SALE_PRODUCT', '2');
/****Invoice Purchase product TYPE  ******/

define('SOCIAL_LINKS', 'social_links');