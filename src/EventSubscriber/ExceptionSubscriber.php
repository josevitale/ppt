<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use App\Exception\ErrorException;
use App\Response\ResponseFactory;
use App\Response\ResponseError;

class ExceptionSubscriber implements EventSubscriberInterface
{
    protected $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::EXCEPTION => 'onKernelException'
        );
    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        if ($exception instanceof ErrorException) {
            $responseError = $exception->getResponseError();
        }
        else {
            $statusCode = $exception instanceof HttpExceptionInterface ? $exception->getStatusCode() : 500;
            $responseError = new ResponseError($statusCode);
        }
        $response = $this->responseFactory->crearResponse($event->getRequest(), $responseError);
        $event->setResponse($response);
    }
}
