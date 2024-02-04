<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\TaskManagementRestApi\Business\Writer;

use Generated\Shared\Transfer\TaskTransfer;
use Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiEntityManagerInterface;
use Spryker\Zed\User\Business\UserFacadeInterface;

class TaskManagementRestApiWriter implements TaskManagementRestApiWriterInterface
{
    private TaskManagementRestApiEntityManagerInterface $taskManagementRestApiEntityManager;

    private UserFacadeInterface $userFacade;

    /**
     * @param \Pyz\Zed\TaskManagementRestApi\Persistence\TaskManagementRestApiEntityManagerInterface $taskManagementRestApiEntityManager
     * @param \Spryker\Zed\User\Business\UserFacadeInterface $userFacade
     */
    public function __construct(
        TaskManagementRestApiEntityManagerInterface $taskManagementRestApiEntityManager,
        UserFacadeInterface $userFacade
    ) {
        $this->taskManagementRestApiEntityManager = $taskManagementRestApiEntityManager;
        $this->userFacade = $userFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\TaskTransfer $taskTransfer
     *
     * @return void
     */
    public function createTask(TaskTransfer $taskTransfer): void
    {
        if (!$taskTransfer->getFkUser()) {
            $taskTransfer->setFkUser(1);
            // delete the above line and uncomment when authorization of user is enabled
            //$taskTransfer->setFkUser($this->userFacade->getCurrentUser()->getIdUser());
        }

        //TODO: write a check when findTask() is created, that checks if a user does not have same tasks created by title and description.

        $this->taskManagementRestApiEntityManager->createTask($taskTransfer);
    }
}
