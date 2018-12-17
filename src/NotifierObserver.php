<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.12.2018
 * Time: 15:03
 */

namespace Ruslan\Notifier;


class NotifierObserver implements NotifierObserverInterface
{
    private $adapters = [];

    public function add(NotifierAdapterInterface $adapter)
    {
        $this->adapters = $adapter;
    }

    public function notice(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->notice($message);
        }
    }

    public function warning(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->warning($message);
        }
    }

    public function info(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->info($message);
        }
    }

    public function error(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->error($message);
        }
    }

    public function emergency(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->emergency($message);
        }
    }

    public function debug(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->debug($message);
        }
    }

    public function critical(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->critical($message);
        }
    }

    public function alert(string $message)
    {
        foreach ($this->adapters as $adapter) {
            $adapter->alert($message);
        }
    }


}