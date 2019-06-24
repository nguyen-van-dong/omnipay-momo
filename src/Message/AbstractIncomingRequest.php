<?php
/**
 * @link https://github.com/phpviet/omnipay-momo
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace Omnipay\MoMo\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
abstract class AbstractIncomingRequest extends AbstractRequest
{
    /**
     * {@inheritdoc}
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData(): array
    {
        $this->validate(array_keys($parameters = $this->getIncomingParameters()));

        return $parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array $parameters = []): self
    {
        parent::initialize();

        $this->parameters->replace($this->getIncomingParameters());

        return $this;
    }

    /**
     * Trả về danh sách parameters từ MoMo gửi sang.
     *
     * @return array
     */
    abstract protected function getIncomingParameters(): array;
}