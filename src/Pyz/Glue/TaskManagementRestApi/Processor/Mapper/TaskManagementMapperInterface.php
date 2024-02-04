<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TaskManagementRestApi\Processor\Mapper;

use Generated\Shared\Transfer\RestErrorMessageTransfer;
use Generated\Shared\Transfer\RestTaskAttributesTransfer;
use Generated\Shared\Transfer\TaskTransfer;

interface TaskManagementMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\RestTaskAttributesTransfer $restTaskAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\TaskTransfer
     */
    public function mapRestTaskAttributesTransferToTaskTransfer(
        RestTaskAttributesTransfer $restTaskAttributesTransfer
    ): TaskTransfer;

    /**
     * @param int $getCode
     * @param string $getMessage
     *
     * @return \Generated\Shared\Transfer\RestErrorMessageTransfer
     */
    public function mapRestError(int $getCode, string $getMessage): RestErrorMessageTransfer;
}
