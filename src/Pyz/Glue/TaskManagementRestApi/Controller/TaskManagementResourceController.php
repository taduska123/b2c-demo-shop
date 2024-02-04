<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TaskManagementRestApi\Controller;

use Generated\Shared\Transfer\RestTaskAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponse;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;
use Spryker\Glue\Kernel\Controller\AbstractController;

/**
 * @method \Pyz\Glue\TaskManagementRestApi\TaskManagementRestApiFactory getFactory()
 */
class TaskManagementResourceController extends AbstractController
{
    /**
     * @Glue({
     *      "getCollection": {
     *           "summary": [
     *               "Retrieves collection of tasks ."
     *           ],
     *           "parameters": [{
     *               "name": "Accept-Language",
     *               "in": "header"
     *           }]
     *      }
     *  })
     *
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestTaskAttributesTransfer $restTaskAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function getAction(
        RestRequestInterface $restRequest,
        RestTaskAttributesTransfer $restTaskAttributesTransfer
    ): RestResponseInterface {
            return new RestResponse();
    }

    /**
     * @Glue({
     *      "post": {
     *           "summary": [
     *                "Creates a task."
     *           ],
     *           "parameters": [{
     *               "name": "Accept-Language",
     *               "in": "header"
     *           }],
     *           "responses": {}
     *      }
     *  })
     *
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestTaskAttributesTransfer $restTaskAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function postAction(
        RestRequestInterface $restRequest,
        RestTaskAttributesTransfer $restTaskAttributesTransfer
    ): RestResponseInterface {
        return $this->getFactory()->createTaskmanagementCreator()->createTaskManagement(
            $restRequest,
            $restTaskAttributesTransfer,
        );
    }
}
