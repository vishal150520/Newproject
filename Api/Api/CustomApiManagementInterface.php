<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Bluethink\Api\Api;

interface CustomApiManagementInterface
{

    /**
     * GET for CustomApi api
     * @param string $param
     * @return string
     */
    public function getCustomApi($param);

    /**
     * GET for CustomApi2 api
     *  @return string
     */
    public function getCustomApi2();
}

