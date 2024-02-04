<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Business;

use Generated\Shared\Transfer\TaskTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\TaskManagementRestApi\Business\TaskManagementRestApiBusinessFactory getFactory()
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiRepositoryInterface getRepository()
 */
class TaskManagementRestApiFacade extends AbstractFacade implements TaskManagementRestApiFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\TaskTransfer $taskTransfer
     *
     * @return void
     */
    public function createTask(TaskTransfer $taskTransfer): void
    {
        $this->getFactory()->createWriter()->createTask($taskTransfer);
    }
}
