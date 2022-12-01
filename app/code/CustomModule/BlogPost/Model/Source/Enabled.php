<?php
namespace CustomModule\BlogPost\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Enabled implements OptionSourceInterface
{
    public function toOptionArray()
    {
        $options = [
            [
                'label' => __('Yes'),
                'value' => 1
            ],
            [
                'label' => __('No'),
                'value' => 0
            ]
        ];

        return $options;
    }
}