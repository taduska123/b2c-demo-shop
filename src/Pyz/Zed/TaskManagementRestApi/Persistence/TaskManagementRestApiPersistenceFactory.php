<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Persistence;

use Pyz\Zed\TaskManagementRestApi\Persistence\Mapper\TaskManagementRestApiMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\TaskManagementRestApi\TaskManagementRestApiConfig getConfig()
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiRepositoryInterface getRepository()
 */
class TaskManagementRestApiPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Pyz\Zed\TaskManagementRestApi\Persistence\Mapper\TaskManagementRestApiMapper
     */
    public function createTaskMapper(): TaskManagementRestApiMapper
    {
        return new TaskManagementRestApiMapper();
    }
}
