<?php
/**
 * @link https://github.com/phpviet/omnipay-momo
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace Omnipay\MoMo\Message\AllInOne;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class RefundResponse extends AbstractResponse
{
    /**
     * {@inheritdoc}
     */
    protected function getSignatureParameters(): array
    {
        return [
            'partnerCode', 'accessKey', 'requestId', 'orderId', 'errorCode', 'transId', 'message',
            'localMessage', 'requestType',
        ];
    }
}
