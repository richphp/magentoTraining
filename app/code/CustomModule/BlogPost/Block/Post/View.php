<?php

namespace CustomModule\BlogPost\Block\Post;

use CustomModule\BlogPost\Model\PostFactory;

class View extends \Magento\Framework\View\Element\Template
{
    private $postFactory;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        PostFactory $postFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->postFactory = $postFactory;
    }


    public function getBlogPost()
    {
        $id = $this->getRequest()->getParam('id');
        $post = $this->postFactory->create()->load($id);
        // $post->load($id);

        return $post;
    }
}