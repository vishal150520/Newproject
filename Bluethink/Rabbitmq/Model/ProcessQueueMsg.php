<?php
/**
 * @category   NameSpace
 * @package    NameSpace_ModuleName
 * @author     Webkul Software Private Limited
 * @copyright  Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license    https://store.webkul.com/license.html
 */
namespace Bluethink\Rabbitmq\Model;
/**
 * ProcessQueueMsg Model
 */
class ProcessQueueMsg
{
    /**
     * process
     * @param $message
     * @return
     */
    public function process($message)
    {
        // Here you can process your data and and return result
        return "Hello Magento Developer";
    }
}