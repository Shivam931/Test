<?php


namespace Hummingbird\Mod82\Model;


use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Employee::class);
    }
}