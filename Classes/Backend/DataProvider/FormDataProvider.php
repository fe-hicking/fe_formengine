<?php
declare(strict_types=1);
namespace Faktore\FeFormengine\Backend\DataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FormDataProvider implements FormDataProviderInterface
{
    private function injectJavascript(): void
    {
        $pageRenderer = GeneralUtility::makeInstance(
            \TYPO3\CMS\Core\Page\PageRenderer::class
        );
        $pageRenderer->loadJavaScriptModule('@faktore/fe_formengine/FormEngineHandler.js');
    }

    /**
     * @param array $result Initialized result array
     * @return array Result filled with more data
     */
    public function addData(array $result)
    {
        // @TODO: This can be restricted by a specific field.

        $this->injectJavascript();

        return $result;
    }
}
