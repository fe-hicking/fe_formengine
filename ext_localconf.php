<?php
defined('TYPO3') || die('Access denied.');

(function () {
    if (1) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
        [\Faktore\FeFormengine\Backend\DataProvider\FormDataProvider::class] = [
            'depends' => [
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexPrepare::class,
            ],
            'before' => [
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexProcess::class,
            ],
        ];
    }
})();
