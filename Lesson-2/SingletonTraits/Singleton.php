<?php
require 'TraitLog.php';
require 'TraitOptions.php';

final class Logger
{

    use TraitOptions;

    use TraitLog;
}

$logger = Logger::getInstance();

function test()
{
    Logger::getInstance()->log('text');
}

test();

echo 'ok';
