<?php
class person {
    var $name;
    function __construct($new_name) {
    $this->name = $new_name;
}
 function get_name() {
    return $this->name;
}
}
?>
