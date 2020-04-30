<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\ApiException;

/**
 * Provides an extension point to hook in and log soap requests and responses
 * in a bing service.
 */
interface SoapLogger
{
    /**
     * @param $service The service, loggers can invoke `last{Request,Response}` here to
     *        get the things to log.
     */
    public function onSuccessfulResponse(BingService $service) : void;

    /**
     * Called before the given ApiException is thrown.
     *
     * @param $service The service to be logged
     * @param $error Use `get{Request,Response}` to get PSR7 HTTP objects to log here
     */
    public function onErrorResponse(BingService $service, ApiException $error) : void;
}
