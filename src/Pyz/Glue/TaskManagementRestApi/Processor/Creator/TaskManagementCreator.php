<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TaskManagementRestApi\Processor\Creator;

use Exception;
use Generated\Shared\Transfer\RestTaskAttributesTransfer;
use Pyz\Glue\TaskManagementRestApi\Processor\AbstractTaskManagerProcessor;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

class TaskManagementCreator extends AbstractTaskManagerProcessor implements TaskManagementCreatorInterface
{
    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestTaskAttributesTransfer $restTaskAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function createTaskManagement(
        RestRequestInterface $restRequest,
        RestTaskAttributesTransfer $restTaskAttributesTransfer
    ): RestResponseInterface {
        $taskTransfer = $this->mapper->mapRestTaskAttributesTransferToTaskTransfer($restTaskAttributesTransfer);

        try {
            $this->facade->createTask($taskTransfer);
        } catch (Exception $exception) {
            $restError = $this->mapper->mapRestError($exception->getCode(), $exception->getMessage());

            return $this->resourceBuilder->createRestResponse()->addError($restError);
        }

        return $this->resourceBuilder->createRestResponse();
    }
}
