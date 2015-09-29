<?php
/*
 * This file is part of resource-operations.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\ResourceOperations;

use PHPUnit_Framework_TestCase;

/**
 * @covers SebastianBergmann\ResourceOperations\ResourceOperations
 */
class ResourceOperationsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers       SebastianBergmann\ResourceOperations\ResourceOperations::getFunctions
     */
    public function testGetFunctions()
    {
        $tab = ResourceOperations::getFunctions();
        $this->assertTrue(is_array($tab), 'ResourceOperations::getFunctions does not return an array');
        $this->assertContains('zip_open', $tab);
    }
}
