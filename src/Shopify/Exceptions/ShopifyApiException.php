<?php
/**
 * Created by oseintow.
 * User: oseintow
 * Date: 9/14/16
 * Time: 7:28 PM
 */

namespace Oseintow\Shopify\Exceptions;

use Exception;

class ShopifyApiException extends Exception
{

    /**
     * ShopifyApiException constructor.
     * @param $message
     * @param int code
     */
    public function __construct($message, $code)
    {
        $message = is_array($message) ? json_encode($message) : $message;

        parent::__construct($message, $code);
    }
}
