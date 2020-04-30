<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\Exception\ApiException;
use function GuzzleHttp\Psr7\str as http_message_tostring;

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

    /**
     * @var bool
     */
    private $debug;

    public function __construct(BingSession $session, string $wsdl, array $options=[], ServiceDescriptor $sd=null)
    {
        $options['exceptions'] = true;
        parent::__construct($wsdl, $options);
        $this->classmap = $options['classmap'] ?? [];
        $this->trace = filter_var($options['trace'] ?? false, FILTER_VALIDATE_BOOLEAN);
        $this->wsdlScheme = parse_url($wsdl, PHP_URL_SCHEME);
        $this->session = $session;
        $this->serviceDescriptor = $sd ?? new ServiceDescriptor(new \ReflectionClass($this));
        $this->debug = ($options['trace'] ?? false) && ($options['debug'] ?? false);
    }

    public function __soapCall($func, $args, $options=null, $inputHeaders=null, &$outputHeaders=null)
    {
        try {
            $response = parent::__soapCall($func, $args, $options, array_merge(
                (array) $inputHeaders,
                $this->createSoapHeaders()
            ), $outputHeaders);

            if ($this->debug) {
                $httpRequest = $this->lastRequest();
                $httpResponse = $this->lastResponse();
                $this->getLogger()->debug($httpRequest ? http_message_tostring($httpRequest) : 'bing ads missing request');
                $this->getLogger()->debug($httpResonse ? http_message_tostring($httpResponse) : 'bing ads missing response');
            }

            return $response;
        } catch (\SoapFault $fault) {
            $exception = $this->getFaultParser()->toException($fault, $this->classmap);
            $exception->setRequest($httpRequest = $this->lastRequest());
            $exception->setResponse($httpResponse = $this->lastResponse());

            if ($this->debug) {
                $this->getLogger()->error($httpRequest ? http_message_tostring($httpRequest) : 'bing ads missing request');
                $this->getLogger()->error($httpResponse ? http_message_tostring($httpResponse) : 'bing ads missing response');
            }

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
