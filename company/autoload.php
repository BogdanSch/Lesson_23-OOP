<?php

function autoload($className) {
	$fileName = $className.'.php';
	require_once $fileName;
}

spl_autoload_register ( "autoload" );