<?php
namespace CustomModule\PluginInfo\Plugins\Block\Html;
use Magento\Theme\Block\Html\Footer AS FooterChange;

class footer extends \Magento\Framework\View\Element\Template
{
    public function afterGetCopyright(FooterChange $subject, $result){
        return str_replace("Rich Store", "Vicky", $result);
    }
}
