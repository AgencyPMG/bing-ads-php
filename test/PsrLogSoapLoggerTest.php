<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PMG\BingAds\Exception\ApiException;

class PsrLogSoapLoggerTest extends TestCase
{
    private $psrLogger, $soapLogger, $service;

    public function testOnSucccesfulResponseWithNoRequestResponseLogsNothing()
    {
        $this->service->expects($this->once())
            ->method('lastRequest')
            ->willReturn(null);
        $this->service->expects($this->once())
            ->method('lastResponse')
            ->willReturn(null);

        $this->soapLogger->onSuccessfulResponse($this->service);

        $this->assertCount(0, $this->psrLogger->messages, 'should not have logged anything without request and response');
    }

    public function testOnErrorResponseWithNoRequestResponseLoggsNothing()
    {
        $this->soapLogger->onErrorResponse($this->service, new ApiException());

        $this->assertCount(0, $this->psrLogger->messages, 'should not have logged anything without request and response');
    }

    public function testOnSuccessfulResponseConvertsRequestResponseToStringAndLogsThem()
    {
        $request = new Request('GET', '/hello-world', [], '<xml>here</xml>');
        $this->service->expects($this->once())
            ->method('lastRequest')
            ->willReturn($request);
        $response = new Response(200, [], '<xml>there</xml>');
        $this->service->expects($this->once())
            ->method('lastResponse')
            ->willReturn($response);

        $this->soapLogger->onSuccessfulResponse($this->service);

        $this->assertCount(2, $this->psrLogger->messages, 'should not have logged anything without request and response');

        [$requestLog, $responseLog] = $this->psrLogger->messages;
        $this->assertSame(LogLevel::DEBUG, $requestLog['level']);
        $this->assertSame($request, $requestLog['context']['request'] ?? 'missing request from context');
        $this->assertSame(LogLevel::DEBUG, $responseLog['level']);
        $this->assertSame($response, $responseLog['context']['response'] ?? 'missing response from context');
    }

    public function testOnErrorResponseConvertRequestAndResponseObjectstoStringAndLogsThem()
    {
        $request = new Request('GET', '/hello-world', [], '<xml>here</xml>');
        $response = new Response(200, [], '<xml>there</xml>');
        $exception = new ApiException();
        $exception->setRequest($request);
        $exception->setResponse($response);

        $this->soapLogger->onErrorResponse($this->service, $exception);

        $this->assertCount(2, $this->psrLogger->messages, 'should not have logged anything without request and response');

        [$requestLog, $responseLog] = $this->psrLogger->messages;
        $this->assertSame(LogLevel::DEBUG, $requestLog['level']);
        $this->assertSame($request, $requestLog['context']['request'] ?? 'missing request from context');
        $this->assertSame(LogLevel::DEBUG, $responseLog['level']);
        $this->assertSame($response, $responseLog['context']['response'] ?? 'missing response from context');
    }

    protected function setUp()
    {
        $this->psrLogger = new class() extends AbstractLogger
        {
            public $messages = [];

            public function log($level, $message, array $context=[])
            {
                $this->messages[] = [
                    'level' => $level,
                    'message' => $message,
                    'context' => $context,
                ];
            }
        };

        $this->soapLogger = new PsrLogSoapLogger($this->psrLogger);
        $this->service = $this->createMock(BingService::class);
    }
}
