<?php


namespace SAREhub\Commando\Bus;


use SAREhub\Commando\Command\Command;

/**
 * CommandBus dispatching command
 */
interface CommandBus
{
    public function dispatch(Command $command);
}