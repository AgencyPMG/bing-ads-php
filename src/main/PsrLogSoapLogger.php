<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use function GuzzleHttp\Psr7\str as http_message_tostring;
use PMG\BingAds\Exception\ApiException;

final class PsrLogSoapLogger implements SoapLogger
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function onSuccessfulResponse(BingService $service) : void
    {
        $this->logRequestAndResponse($service->lastRequest(), $service->lastResponse());
    }

    /**
     * {@inheritdoc}
     */
    public function onErrorResponse(BingService $service, ApiException $error) : void
    {
        $this->logRequestAndResponse($error->getRequest(), $error->getResponse());
    }

    private function logRequestAndResponse(?RequestInterface $request, ?ResponseInterface $response) : void
    {
        if ($request) {
            $this->logger->debug(http_message_tostring($request), [
                'request' => $request,
            ]);
        }

        if ($response) {
            $this->logger->debug(http_message_tostring($response), [
                'response' => $response,
            ]);
        }
    }
}
