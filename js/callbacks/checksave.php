<?php
/*
    Checks if a task can be saved without danger or not.
*/

define('IN_FS', true);

require_once '../../header.php';

$res = $db->query('SELECT last_edited_time FROM {tasks} WHERE task_id = ?', array(Get::val('task_id')));
$last_edit = $db->fetchOne($res);

if (Get::val('time') >= $last_edit) {
    echo 'ok';
}
?>
