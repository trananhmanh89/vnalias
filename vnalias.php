<?php 

defined('_JEXEC') or die('Restricted access');

class PlgSystemVnalias extends JPlugin {

    function __construct(& $subject, $config) {
        $buffer = file_get_contents(JPATH_ROOT . '/libraries/src/Filter/OutputFilter.php');
        $buffer = str_replace('class OutputFilter', 'class _OutputFilter', $buffer);
        $buffer = str_replace('<?php', '', $buffer);
        eval($buffer);

        require_once __DIR__ . '/OutputFilter.php';
    }
}
