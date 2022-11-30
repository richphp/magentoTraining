<?php

namespace CustomModule\BlogPost\Model;

use Magento\Framework\Model\AbstractModel;
use CustomModule\BlogPost\Model\ResourceModel\Post as PostResouce;

class Post extends AbstractModel
{
    public function _construct()
    {
        $this->_init(PostResouce::class);
    }
}