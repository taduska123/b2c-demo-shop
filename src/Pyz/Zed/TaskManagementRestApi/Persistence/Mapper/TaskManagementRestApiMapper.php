<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Persistence\Mapper;

use Generated\Shared\Transfer\TaskTransfer;
use Orm\Zed\TaskManagementRestApi\Persistence\SpyTask;

class TaskManagementRestApiMapper implements TaskManagementRestApiMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\TaskTransfer $taskTransfer
     * @param \Orm\Zed\TaskManagementRestApi\Persistence\SpyTask $taskEntity
     *
     * @return \Orm\Zed\TaskManagementRestApi\Persistence\SpyTask
     */
    public function mapTaskTransferToTaskEntity(TaskTransfer $taskTransfer, SpyTask $taskEntity): SpyTask
    {
        $taskEntity->fromArray($taskTransfer->toArray());

        return $taskEntity;
    }
}
