<?php
namespace Ruslan\Notifier;


interface NotifierObserverInterface extends NotifierAdapterInterface
{
    public function add(NotifierAdapterInterface $adapter);
}