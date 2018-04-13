<?php


namespace SAREhub\Commando\Handler;


use SAREhub\Commando\Command\Command;

/**
 * Locates handler of Command and return it.
 */
interface CommandHandlerLocator
{
    public function locate(Command $command): CommandHandler;
}