<?php
/**
 * Manual Gateway Response
 */

namespace Omnipay\Cache\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Manual Gateway Response
 */
class Response extends AbstractResponse
{
    public function isPending()
    {
        return true;
    }
}
