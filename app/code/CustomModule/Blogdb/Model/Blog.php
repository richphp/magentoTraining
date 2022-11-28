<?php

namespace CustomModule\Blogdb\Model;

use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel
{
    public function _construct()
    {
        $this->_init('CustomModule\Blogdb\Model\ResourceModel\Blog');
    }
}
