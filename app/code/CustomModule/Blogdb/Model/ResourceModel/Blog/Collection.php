<?php

namespace CustomModule\Blogdb\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('CustomModule\Blogdb\Model\Blog','CustomModule\Blogdb\Model\ResourceModel\Blog');
    }
}
