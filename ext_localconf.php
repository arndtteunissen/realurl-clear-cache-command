<?php
defined('TYPO3_MODE') or die();

$boot = function () {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \Arndtteunissen\RealurlClearCache\Command\RealurlCommandController::class;
};

$boot();
unset($boot);
