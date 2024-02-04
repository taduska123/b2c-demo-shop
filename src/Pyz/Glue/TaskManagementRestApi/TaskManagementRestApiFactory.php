<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TaskManagementRestApi;

use Pyz\Glue\TaskManagementRestApi\Processor\Creator\TaskManagementCreator;
use Pyz\Glue\TaskManagementRestApi\Processor\Creator\TaskManagementCreatorInterface;
use Pyz\Glue\TaskManagementRestApi\Processor\Mapper\TaskManagementMapper;
use Pyz\Glue\TaskManagementRestApi\Processor\Mapper\TaskManagementMapperInterface;
use Pyz\Zed\TaskManagementRestApi\Business\TaskManagementRestApiFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractFactory;

class TaskManagementRestApiFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Glue\TaskManagementRestApi\Processor\Creator\TaskManagementCreatorInterface
     */
    public function createTaskManagementCreator(): TaskManagementCreatorInterface
    {
        return new TaskManagementCreator(
            $this->getTaskManamgementFacade(),
            $this->getResourceBuilder(),
            $this->createMapper(),
        );
    }

    /**
     * @return \Pyz\Zed\TaskManagementRestApi\Business\TaskManagementRestApiFacadeInterface
     */
    protected function getTaskManamgementFacade(): TaskManagementRestApiFacadeInterface
    {
        return $this->getProvidedDependency(TaskManagementRestApiDependencyProvider::FACADE_TASK_MANAGEMENT);
    }

    /**
     * @return \Pyz\Glue\TaskManagementRestApi\Processor\Mapper\TaskManagementMapperInterface
     */
    protected function createMapper(): TaskManagementMapperInterface
    {
        return new TaskManagementMapper();
    }
}
