<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CustomModule\DbBlogExer\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class addData implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        $this->moduleDataSetup -> startSetup();

        $this->moduleDataSetup -> getConnection() -> insert(
            'blog_category',
            [
                'name' => 'Food',
                'description' => 'Food Description',
                'url_key' => 'food',
                'meta_title' => 'food blog',
                'meta_keywords' => 'food, kha bhau'
            ]
        );
        $this->moduleDataSetup -> getConnection() -> insert(
            'blog_category',
            [
                'name' => 'Travelling',
                'description' => 'Travelling Description',
                'url_key' => 'travelling',
                'meta_title' => 'travelling blog',
                'meta_keywords' => 'Travelling, fir bhau'
            ]
        );
        $this->moduleDataSetup -> getConnection() -> insert(
            'blog_category',
            [
                'name' => 'City',
                'description' => 'City Description',
                'url_key' => 'city',
                'meta_title' => 'city blog',
                'meta_keywords' => 'city, city bhau'
            ]
        );

        $this->moduleDataSetup -> getConnection() -> insert(
            'blog_post',
            [
                'name' => 'Food Blog 1',
                'short_description' => 'food short Description',
                'post_content' => 'post content',
                'stores_ids' => '1',
                'url_key' => 'food-blog-1',
                'meta_title' => 'food blog',
                'meta_keywords' => 'food, kha bhau'
            ]
        );

        $this->moduleDataSetup -> getConnection() -> insert(
            'blog_post_category',
            [
                'category_id' => '1',
                'post_id' => '1',
                'position' => '1',
            ]
        );

        $this -> moduleDataSetup -> endSetup();        
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
}
