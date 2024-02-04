<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Glue\TaskManagementRestApi\Processor;

use Pyz\Glue\TaskManagementRestApi\Processor\Mapper\TaskManagementMapperInterface;
use Pyz\Zed\TaskManagementRestApi\Business\TaskManagementRestApiFacadeInterface;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface;

abstract class AbstractTaskManagerProcessor
{
    protected TaskManagementRestApiFacadeInterface $facade;

    protected RestResourceBuilderInterface $resourceBuilder;

    protected TaskManagementMapperInterface $mapper;

    /**
     * @param \Pyz\Zed\TaskManagementRestApi\Business\TaskManagementRestApiFacadeInterface $facade
     * @param \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface $resourceBuilder
     * @param \Pyz\Glue\TaskManagementRestApi\Processor\Mapper\TaskManagementMapperInterface $mapper
     */
    public function __construct(
        TaskManagementRestApiFacadeInterface $facade,
        RestResourceBuilderInterface $resourceBuilder,
        TaskManagementMapperInterface $mapper
    ) {
        $this->facade = $facade;
        $this->resourceBuilder = $resourceBuilder;
        $this->mapper = $mapper;
    }
}
