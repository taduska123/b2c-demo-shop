<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PyzTest\Glue\TaskManagement\RestApi;

use PyzTest\Glue\TaskManagement\TaskManagementApiTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Glue
 * @group TaskManagement
 * @group RestApi
 * @group TaskManagementRestApiCest
 * Add your own group annotations below this line
 */
class TaskManagementRestApiCest
{
    /**
     * @var \PyzTest\Glue\TaskManagement\RestApi\TaskManagementRestApiFixtures
     */
    protected TaskManagementRestApiFixtures $fixtures;

    /**
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    public function _before(TaskManagementApiTester $I): void
    {
//        /** @var \PyzTest\Glue\TaskManagement\RestApi\TaskManagementRestApiFixtures $fixtures */
//        $fixtures = $I->loadFixtures(TaskManagementRestApiFixtures::class);
//
//        $this->fixtures = $fixtures;
//
//        $oauthResponseTransfer = $I->haveAuthorizationToGlue($this->fixtures->getCustomerTransfer());
//        $I->amBearerAuthenticated($oauthResponseTransfer->getAccessToken());
    }

    /**
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    public function createTaskViaAPI(TaskManagementApiTester $I): void
    {
        $I->wantTo('Create a new task via API');
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('/task-management', [
            'title' => 'Test Task',
            'description' => 'This is a test task',
            'dueDate' => '2024-02-05',
            'status' => 'In progress',
        ]);

        $I->seeResponseCodeIs(201); // HTTP Created
    }

    /**
     * @skip Skip message
     *
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    public function retrieveTaskByIdViaAPI(TaskManagementApiTester $I): void
    {
        $I->wantTo('Retrieve a task by ID via API');
        $taskId = 1; // Assuming this task exists
        $I->sendGET("/task-management/${taskId}");

        $I->seeResponseCodeIs(200); // HTTP OK
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'data' => [
                'type' => 'task-management',
                'id' => $taskId,
            ],
        ]);
    }

    /**
     * @skip Skip message
     *
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    public function updateTaskViaAPI(TaskManagementApiTester $I)
    {
        $I->wantTo('Update a task via API');
        $taskId = 1; // Assuming this task exists
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPATCH("/task-management/${taskId}", [
            'title' => 'Updated Task Title',
        ]);

        $I->seeResponseCodeIs(200); // HTTP OK
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'data' => [
                'attributes' => [
                    'title' => 'Updated Task Title',
                ],
            ],
        ]);
    }

    /**
     * @skip Skip message
     *
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    public function deleteTaskViaAPI(TaskManagementApiTester $I)
    {
        $I->wantTo('Delete a task via API');
        $taskId = 1; // Assuming this task exists and is deletable
        $I->sendDELETE("/task-management/${taskId}");

        $I->seeResponseCodeIs(204); // HTTP No Content or appropriate response for deletion
    }
}
