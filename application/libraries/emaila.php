<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emaila{
var $useragent = "CodeIgniter";
var $mailpath = "/usr/sbin/sendmail";
var $protocol = "smtp";
var $smtp_host = "smtp-mail.outlook.com";
var $smtp_user = "triple.hackeaziq@hotmail.com";
var $smtp_pass = "Haziqohsem99";
var $smtp_port = "587";
var $smtp_timeout = 9;
var $smtp_crypto = "tls";
var $wordwrap = TRUE;
var $wrapchars = "76";
var $mailtype = "text";
var $charset = "utf-8";
var $multipart = "mixed";
var $alt_message = "";
var $validate = FALSE;
var $priority = "1";
var $newline = "\r\n";
var $crlf = "\r\n";
}
