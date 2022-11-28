<?php
namespace CustomModule\PluginInfo\Plugins\Block\Html;

use Magento\Catalog\Model\Product;

class changeProductPrice
{

    public function aftergetPrice(Product $subject, $result){
        return $result + 15;
    }
   
}
