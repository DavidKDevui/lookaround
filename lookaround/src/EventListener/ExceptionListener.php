<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use App\Controller\ErrorPageController;

class ExceptionListener
{
    private $errorPageController;

    public function __construct(ErrorPageController $errorPageController)
    {
        $this->errorPageController = $errorPageController;
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        if ($exception instanceof ResourceNotFoundException) {
            $response = $this->errorPageController->show404();
            $event->setResponse($response);
        }
    }
}
