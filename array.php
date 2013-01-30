<?php
$a = array('one' => 'I', 'two' => 'II', 'three' => 'III', 'four' => 'IV');
foerach ($a as $key => $value) {
echo htmlspecialchars("$key: $value") . '<br />';
}
?>