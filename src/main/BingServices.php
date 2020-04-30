<?php declare(strict_types=1);

namespace PMG\BingAds;

/**
 * A factory for generating services classes.
 *
 * @since 0.1
 */
class BingServices
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
     * @var SoapLogger
     */
    private $soapLogger;

    public function __construct(
        ?RequestHeaders $headers=null,
        ?FaultParser $faults=null,
        ?PsrMessageConverter $converter=null,
        ?SoapLogger $soapLogger=null
    ) {
        $this->headers = $headers ?? new RequestHeaders();
        $this->faults = $faults ?? new FaultParser();
        $this->messageConverter = $converter ?? new PsrMessageConverter();
        $this->soapLogger = $soapLogger ?? new NullSoapLogger();
    }

    public function create(string $service, BingSession $session, array $soapOptions=[]) : BingService
    {
        $sd = ServiceDescriptor::fromClassName($service);
        $cls = $sd->getClassName();

        $service = new $cls($session, $sd->wsdlFor($session->getEnvironment()), $soapOptions, $sd);
        $service->setRequestHeaders($this->headers);
        $service->setFaultParser($this->faults);
        $service->setMessageConverter($this->messageConverter);
        $service->setSoapLogger($this->soapLogger);

        return $service;
    }
}
