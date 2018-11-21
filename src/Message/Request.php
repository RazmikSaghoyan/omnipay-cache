<?php
/**
 * Manual Gateway Request
 */

namespace Omnipay\Cache\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Manual Gateway Request
 */
class Request extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount');

        return $this->getParameters();
    }

    public function sendData($data)
    {
        return $this->response = new Response($this, $data);
    }
}
