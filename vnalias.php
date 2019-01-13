<?php 

defined('_JEXEC') or die('Restricted access');

class PlgSystemVnalias extends JPlugin {

    function __construct(& $subject, $config) {
    	require_once __DIR__ . '/OutputFilter.php';
    }
}
