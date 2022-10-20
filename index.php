<?php

namespace ScnJenkinsDemo;

require_once __DIR__ . '/vendor/autoload.php';

$customMath = new \ScnJenkinsDemo\Functions\CustomMath();
print $customMath->pow(2,2);
