<?php
function classLoader($class) {
    require_once('classes/'.$class.'.php');
}
spl_autoload_register('classLoader');