<?php


namespace Hummingbird\Mod82\Model\ResourceModel\Employee;


use Hummingbird\Mod82\Model\Employee;
use Hummingbird\Mod82\Model\ResourceModel\Employee as EmployeeResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResourceModel::class);
    }
}