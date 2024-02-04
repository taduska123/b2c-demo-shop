<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PyzTest\Glue\TaskManagement;

use Pyz\Glue\TaskManagement\TaskManagementConfig;
use Spryker\Glue\CartsRestApi\CartsRestApiConfig;
use SprykerTest\Shared\Testify\Tester\EndToEndTester;

/**
 * Inherited Methods
 *
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(\PyzTest\Glue\TaskManagement\PHPMD)
 */
class TaskManagementApiTester extends EndToEndTester
{
    use _generated\TaskManagementApiTesterActions;

    /**
     * Define custom actions here
     */

    /**
     * @param array<string> $includes
     *
     * @return string
     */
    public function buildTaskManagementUrl(array $includes = []): string
    {
        return $this->formatFullUrl(
            '{taskManagement}' . $this->formatQueryInclude($includes),
            [
                'taskManagement' => TaskManagementConfig::RESOURCE_TASK_MANAGEMENT,
            ],
        );
    }
}
