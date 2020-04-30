<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\ApiException;

final class NullSoapLogger implements SoapLogger
{
    /**
     * {@inheritdoc}
     */
    public function onSuccessfulResponse(BingService $service) : void
    {
        // noop
    }

    /**
     * {@inheritdoc}
     */
    public function onErrorResponse(BingService $service, ApiException $error) : void
    {
        // noop
    }
}
