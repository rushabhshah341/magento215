<?php
/**
 * Copyright © 2015 Rushabh. All rights reserved.
 */

namespace Rushabh\HelloPage\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
	
        $installer = $setup;

        $installer->startSetup();

		/**
         * Create table 'hellopage_custom'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('hellopage_custom')
        )
		->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'hellopage_custom'
        )
		->addColumn(
            'hellopageid',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'HelloPageID'
        )
		->addColumn(
            'hello page text',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '64k',
            [],
            'Hello Page Text'
        )
		/*{{CedAddTableColumn}}}*/
		
		
        ->setComment(
            'Rushabh HelloPage hellopage_custom'
        );
		
		$installer->getConnection()->createTable($table);
		/*{{CedAddTable}}*/

        $installer->endSetup();

    }
}
