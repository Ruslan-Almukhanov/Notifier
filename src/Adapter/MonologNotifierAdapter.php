<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.12.2018
 * Time: 14:58
 */

namespace Ruslan\Notifier\Adapter;


use Monolog\Logger;
use Ruslan\Notifier\NotifierAdapterInterface;

/**
 * Class MonologNotifierAdapter
 * @package Ruslan\Notifier\Adapter
 */
final class MonologNotifierAdapter implements NotifierAdapterInterface
{
    /** @var Logger  */
    private $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function alert(string $message)
    {
        $this->logger->alert($message);
    }
    public function critical(string $message)
    {
        $this->logger->critical($message);
    }
    public function debug(string $message)
    {
        $this->logger->debug($message);
    }
    public function emergency(string $message)
    {
       $this->logger->emergency($message);
    }
    public function error(string $message)
    {
        $this->logger->error($message);
    }
    public function info(string $message)
    {
        $this->logger->info($message);
    }
    public function warning(string $message)
    {
        $this->logger->warning($message);
    }
    public function notice(string $message)
    {
        $this->logger->notice($message);
    }
}