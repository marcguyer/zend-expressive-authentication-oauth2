<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-authentication-oauth2 for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-authentication-oauth2/blob/master/LICENSE.md
 *     New BSD License
 */

declare(strict_types=1);

namespace ZendTest\Expressive\Authentication\OAuth2\Entity;

use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use PHPUnit\Framework\TestCase;
use Zend\Expressive\Authentication\OAuth2\Entity\RefreshTokenEntity;

class RefreshTokenEntityTest extends TestCase
{
    public function testImplementsRefreshTokenEntityInterface()
    {
        $entity = new RefreshTokenEntity();
        $this->assertInstanceOf(RefreshTokenEntityInterface::class, $entity);
    }
}
