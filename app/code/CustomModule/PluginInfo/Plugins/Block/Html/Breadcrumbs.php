<?php
namespace CustomModule\PluginInfo\Plugins\Block\Html;
use Magento\Theme\Block\Html\Breadcrumbs AS originalBC;
class Breadcrumbs
{
    public function aroundaddCrumb(originalBC $subject, callable $proceed, $crumbName, $crumbInfo){

        $crumbInfo['label'] .= " OK";
        $proceed($crumbName, $crumbInfo);

    }

    public function beforeaddCrumb(originalBC $subject, $crumbName, $crumbInfo){

        if(!empty($crumbInfo['link']) && isset($crumbInfo['link'])){
            $crumbInfo['link'] = $crumbInfo['link'];
        }else{
            $crumbInfo['link'] = '#';
        }

        return [$crumbName, $crumbInfo];

    }
}
