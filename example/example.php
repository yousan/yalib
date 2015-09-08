<?php

include('../src/autoload.php');

global $yalib;
$yalib = yalib::gi('test');

/**
 * Initialize with test data
 */
function init_testdata() {
  global $yalib;
  $sql = 'CREATE TABLE `yalib_test_users` (
  `id` INT NOT NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `modified` DATETIME NULL,
  `created` DATETIME NULL,
  PRIMARY KEY (`id`));';

  $yalib->e($sql);
}

?>
