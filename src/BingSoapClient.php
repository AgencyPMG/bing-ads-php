<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\Exception\ApiException;

class BingSoapClient extends \SoapClient implements BingService
{
    use BingServiceDependencies;

    /**
     * @var array
     */
    private $classmap;

    /**
     * @var bool
     */
    private $trace;

    /**
     * @var string
     */
    private $wsdlScheme;

    /**
     * @var BingSession
     */
    private $session;

    /**
     * @var ServiceDescriptor
     */
    private $serviceDescriptor;

    public function __construct(BingSession $session, string $wsdl, array $options=[], ServiceDescriptor $sd=null)
    {
        $options['exceptions'] = true;
        parent::__construct($wsdl, $options);
        $this->classmap = $options['classmap'] ?? [];
        $this->trace = filter_var($options['trace'] ?? false, FILTER_VALIDATE_BOOLEAN);
        $this->wsdlScheme = parse_url($wsdl, PHP_URL_SCHEME);
        $this->session = $session;
        $this->serviceDescriptor = $sd ?? new ServiceDescriptor(new \ReflectionClass($this));
    }

    public function __soapCall($func, $args, $options=null, $inputHeaders=null, &$outputHeaders=null)
    {
        try {
            return parent::__soapCall($func, $args, $options, array_merge(
                (array) $inputHeaders,
                $this->createSoapHeaders()
            ), $outputHeaders);
        } catch (\SoapFault $fault) {
            $exception = $this->getFaultParser()->toException($fault, $this->classmap);
            $exception->setRequest($this->lastRequest());
            $exception->setResponse($this->lastResponse());
            throw $exception;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function lastRequest() : ?RequestInterface
    {
        return $this->getMessageConverter()->createRequest(
            $this->__getLastRequestHeaders(),
            $this->__getLastRequest(),
            $this->wsdlScheme // guess that the scheme for requests is the same as the WSDL
        );
    }

    /**
     * {@inheritdoc}
     */
    public function lastResponse() : ?ResponseInterface
    {
        return $this->getMessageConverter()->createResponse(
            $this->__getLastResponseHeaders(),
            $this->__getLastResponse()
        );
    }

    protected function createSoapHeaders() : array
    {
        return $this->getRequestHeaders()->soapHeadersFor(
            $this->getServiceDescriptor(),
            $this->getSession()
        );
    }

    protected function getSession() : BingSession
    {
        return $this->session;
    }

    protected function getServiceDescriptor() : ServiceDescriptor
    {
        return $this->serviceDescriptor;
    }
}
