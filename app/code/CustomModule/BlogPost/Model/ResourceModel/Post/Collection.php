<?php

namespace CustomModule\BlogPost\Model\ResourceModel\Post;

use CustomModule\BlogPost\Model\Post;
use CustomModule\BlogPost\Model\ResourceModel\Post as PostResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}