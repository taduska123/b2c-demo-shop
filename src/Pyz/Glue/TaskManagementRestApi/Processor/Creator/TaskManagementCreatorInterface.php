<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TaskManagementRestApi\Processor\Creator;

use Generated\Shared\Transfer\RestTaskAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface TaskManagementCreatorInterface
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
    ): RestResponseInterface;
}
