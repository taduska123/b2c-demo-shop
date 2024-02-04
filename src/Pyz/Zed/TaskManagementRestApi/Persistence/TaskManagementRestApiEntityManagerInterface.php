<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Persistence;

use Generated\Shared\Transfer\TaskTransfer;

interface TaskManagementRestApiEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\TaskTransfer $taskTransfer
     *
     * @return void
     */
    public function createTask(TaskTransfer $taskTransfer): void;
}
