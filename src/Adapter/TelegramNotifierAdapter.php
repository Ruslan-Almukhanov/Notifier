<?php

namespace Ruslan\Notifier\Adapter;


use Ruslan\Notifier\NotifierAdapterInterface;

final class TelegramNotifierAdapter implements NotifierAdapterInterface
{
    private $url = "https://api.telegram.org/bot<token>/sendMessage?chat_id=<chat_id>&text=Test";
    public function __construct(string $botToken, string $chat_id)
    {
        $this->url = str_replace('<token>',$botToken, $this->url);
        $this->url = str_replace('<chat_id>',$chat_id, $this->url);
    }

    public function debug(string $message)
    {
        file_get_contents($this->url . 'DEBUG' . $message);
    }
    public function info(string $message)
    {
        file_get_contents($this->url . 'info' . $message);
    }
    public function notice(string $message)
    {
        file_get_contents($this->url . 'notice' . $message);
    }
    public function warning(string $message)
    {
        file_get_contents($this->url . 'warning' . $message);
    }
    public function error(string $message)
    {
        file_get_contents($this->url . 'error' . $message);
    }
    public function critical(string $message)
    {
        file_get_contents($this->url . 'critical' . $message);
    }
    public function alert(string $message)
    {
        file_get_contents($this->url . 'alert' . $message);
    }
    public function emergency(string $message)
    {
        file_get_contents($this->url . 'emergency' . $message);
    }
}