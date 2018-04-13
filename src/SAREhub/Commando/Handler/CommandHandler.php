<?php


namespace SAREhub\Commando\Handler;


use SAREhub\Commando\Command\Command;

/**
 * Handler handle only one type of Command
 */
interface CommandHandler
{
    public function handle(Command $command);
}