<?php
/**
 * Copyright © 2015 Rushabh. All rights reserved.
 */
namespace Rushabh\HelloPage\Model\ResourceModel;

/**
 * Custom resource
 */
class Custom extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('hellopage_custom', 'id');
    }

  
}
