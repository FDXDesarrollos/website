<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once "tcpdf/tcpdf.php";
 
class MyTCPDF extends TCPDF {
    function __construct() {
        parent::__construct();
    }
}

/* application/libraries/MyTCPDF.php */