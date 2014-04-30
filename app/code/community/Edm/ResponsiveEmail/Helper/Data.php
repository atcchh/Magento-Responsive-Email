<?php

class Edm_ResponsiveEmail_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getConfigCsvAsArray($configPath)
    {
        $value = Mage::getStoreConfig($configPath);
        if (!$value) {
            return array();
        }

        $array = array_map('trim', explode(",", $value));
        return $array;
    }

    public function getInlineCssFilesArray()
    {
        return $this->getConfigCsvAsArray('system/mail_style/inline_css');
    }

    public function getNotInlineCssFilesArray()
    {
        return $this->getConfigCsvAsArray('system/mail_style/external_css_not_inline');
    }

}