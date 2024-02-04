<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PyzTest\Glue\TaskManagement\RestApi;

use Generated\Shared\Transfer\CustomerTransfer;
use PyzTest\Glue\TaskManagement\TaskManagementApiTester;
use SprykerTest\Shared\Testify\Fixtures\FixturesBuilderInterface;
use SprykerTest\Shared\Testify\Fixtures\FixturesContainerInterface;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Glue
 * @group TaskManager
 * @group RestApi
 * @group TaskManagerRestApiFixtures
 * Add your own group annotations below this line
 * @group EndToEnd
 */
class TaskManagementRestApiFixtures implements FixturesBuilderInterface, FixturesContainerInterface
{
    /**
     * @var string
     */
    protected const TEST_PASSWORD = 'change123';

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer
     */
    protected CustomerTransfer $customerTransfer;

    /**
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerTransfer(): CustomerTransfer
    {
        return $this->customerTransfer;
    }

    /**
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return \SprykerTest\Shared\Testify\Fixtures\FixturesContainerInterface
     */
    public function buildFixtures(TaskManagementApiTester $I): FixturesContainerInterface
    {
        $this->createCustomer($I);
        $this->confirmCustomer($I);

        return $this;
    }

    /**
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    protected function createCustomer(TaskManagementApiTester $I): void
    {
        $customerTransfer = $I->haveCustomer([
            CustomerTransfer::PASSWORD => static::TEST_PASSWORD,
            CustomerTransfer::NEW_PASSWORD => static::TEST_PASSWORD,
        ]);

        $this->customerTransfer = $customerTransfer;
    }

    /**
     * @param \PyzTest\Glue\TaskManagement\TaskManagementApiTester $I
     *
     * @return void
     */
    protected function confirmCustomer(TaskManagementApiTester $I): void
    {
        $this->customerTransfer = $I->confirmCustomer($this->customerTransfer);
    }
}
