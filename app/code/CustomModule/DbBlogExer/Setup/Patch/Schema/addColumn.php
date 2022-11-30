<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CustomModule\DbBlogExer\Setup\Patch\Schema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class addColumn implements SchemaPatchInterface
{
    /**
     * @var SchemaSetupInterface $moduleSchemaSetup
     */
    private $moduleSchemaSetup;

    /**
     * @param SchemaSetupInterface $moduleSchemaSetup
     */
    public function __construct(SchemaSetupInterface $moduleSchemaSetup)
    {
        $this->moduleSchemaSetup = $moduleSchemaSetup;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        $this -> moduleSchemaSetup -> startSetup();

        $this -> moduleSchemaSetup -> getConnection() -> addColumn(
            'blog_category',
            'meta_title',
            [
               'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
               'length' => 255,
               'nullable' => true,
               'comment' => 'meta title for category'
            ]
        );
        $this -> moduleSchemaSetup -> getConnection() -> addColumn(
            'blog_category',
            'meta_keywords',
            [
               'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
               'length' => 255,
               'nullable' => true,
               'comment' => 'meta keywords for category'
            ]
        );
        $this -> moduleSchemaSetup -> getConnection() -> addColumn(
            'blog_post',
            'meta_title',
            [
               'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
               'length' => 255,
               'nullable' => true,
               'comment' => 'meta title for category'
            ]
        );
        $this -> moduleSchemaSetup -> getConnection() -> addColumn(
            'blog_post',
            'meta_keywords',
            [
               'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
               'length' => 255,
               'nullable' => true,
               'comment' => 'meta keywords for category'
            ]
        );

        $this -> moduleSchemaSetup -> endSetup();
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
