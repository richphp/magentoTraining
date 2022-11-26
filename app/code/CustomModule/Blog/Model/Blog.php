<?php

namespace CustomModule\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel
{
    public function _construct()
    {
        $this->_init('CustomModule\Blog\Model\ResourceModel\Blog');
    }
}