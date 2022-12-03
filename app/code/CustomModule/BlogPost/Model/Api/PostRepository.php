<?php
namespace CustomModule\BlogPost\Model\Api;

use CustomModule\BlogPost\Api\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getList()
    {
        return "Hi this is api list function";
    }

    public function getPost($id)
    {
        return "This shall retun post with entity_id = $id";
    }
}
