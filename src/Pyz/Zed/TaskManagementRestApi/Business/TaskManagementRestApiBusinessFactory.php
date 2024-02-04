<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Business;

use Pyz\Zed\TaskManagementRestApi\Business\Writer\TaskManagementRestApiWriter;
use Pyz\Zed\TaskManagementRestApi\Business\Writer\TaskManagementRestApiWriterInterface;
use Pyz\Zed\TaskManagementRestApi\TaskManagementRestApiDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\User\Business\UserFacadeInterface;

/**
 * @method \Pyz\Zed\TaskManagementRestApi\TaskManagementRestApiConfig getConfig()
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiRepositoryInterface getRepository()
 */
class TaskManagementRestApiBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\TaskManagementRestApi\Business\Writer\TaskManagementRestApiWriterInterface
     */
    public function createWriter(): TaskManagementRestApiWriterInterface
    {
        return new TaskManagementRestApiWriter(
            $this->getEntityManager(),
            $this->getUserFacade(),
        );
    }

    /**
     * @return \Spryker\Zed\User\Business\UserFacadeInterface
     */
    protected function getUserFacade(): UserFacadeInterface
    {
        return $this->getProvidedDependency(TaskManagementRestApiDependencyProvider::FACADE_USER);
    }
}
