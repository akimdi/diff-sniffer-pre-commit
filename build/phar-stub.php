#!/usr/bin/env php
<?php

Phar::mapPhar('pre-commit.phar');
$exit_code = require 'phar://pre-commit.phar/src/pre-commit.php';
exit($exit_code);
__HALT_COMPILER();
