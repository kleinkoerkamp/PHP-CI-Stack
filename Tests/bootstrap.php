<?php
/**
 * Created by PhpStorm.
 * User: frankkleinkoerkamp
 * Date: 4-11-2014
 * Time: 14:30
 */
use Doctrine\Common\ClassLoader;
require '/vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';
$commonLoader = new ClassLoader('Doctrine\Common', '/src');
$commonLoader->register();