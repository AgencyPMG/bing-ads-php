<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

trait BingServiceDependencies
{
    /**
     * @var RequestHeaders
     */
    private $headers;

    /**
     * @var FaultParser
     */
    private $faults;

    /**
     * @var PsrMessageConverter
     */
    private $messageConverter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * {@inheritdoc}
     */
    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function setFaultParser(FaultParser $faults) : void
    {
        $this->faults = $faults;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageConverter(PsrMessageConverter $converter) : void
    {
        $this->messageConverter = $converter;
    }

    /**
     * {@inheritdoc}
     */
    public function setLogger(SoapLogger $logger) : void
    {
        $this->logger = $logger;
    }

    protected function getRequestHeaders() : RequestHeaders
    {
        if (!$this->headers) {
            $this->headers = new RequestHeaders();
        }
                
        return $this->headers;
    }

    protected function getFaultParser() : FaultParser
    {
        if (!$this->faults) {
            $this->faults = new FaultParser();
        }

        return $this->faults;
    }

    protected function getMessageConverter() : PsrMessageConverter
    {
        if (!$this->messageConverter) {
            $this->messageConverter = new PsrMessageConverter();
        }

        return $this->messageConverter;
    }

    protected function getLogger() : SoapLogger
    {
        if (!$this->logger) {
            $this->logger = new NullSoapLogger();
        }

        return $this->logger;
    }
}
