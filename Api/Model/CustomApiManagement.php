<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Bluethink\Api\Model;

class CustomApiManagement implements \Bluethink\Api\Api\CustomApiManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getCustomApi($param)
    {
        return 'Value of x is = ' . $param;
    }


    /**
     * {@inheritdoc}
     */
    public function getCustomApi2()
    {
        return 'Hello';
    }



}

