<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Persistence;

use Generated\Shared\Transfer\TaskTransfer;
use Orm\Zed\TaskManagementRestApi\Persistence\SpyTask;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiPersistenceFactory getFactory()
 */
class TaskManagementRestApiEntityManager extends AbstractEntityManager implements TaskManagementRestApiEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\TaskTransfer $taskTransfer
     *
     * @return void
     */
    public function createTask(TaskTransfer $taskTransfer): void
    {
        $taskTransfer->requireTitle();
        $taskTransfer->requireDueDate();
        $taskTransfer->requireFkUser();

        $taskMapper = $this->getFactory()->createTaskMapper();
        $taskEntity = $taskMapper->mapTaskTransferToTaskEntity($taskTransfer, new SpyTask());

        $taskEntity->save();
    }
}
