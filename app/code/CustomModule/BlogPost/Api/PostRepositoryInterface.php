<?php
namespace CustomModule\BlogPost\Api;

interface PostRepositoryInterface
{
    /**
    * @param int $orderId
    * @param mixed $mailId
    * @return mixed
*/
    public function getList();

    /**
    * @param int $orderId
    * @param mixed $mailId
    * @return mixed
*/
    public function getPost(int $id);
}
