<?php

namespace CustomModule\Blog\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('CustomModule\Blog\Model\Blog','CustomModule\Blog\Model\ResourceModel\Blog');
    }
}