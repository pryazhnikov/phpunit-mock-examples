<?php
declare(strict_types=1);

namespace PhpUnitMockDemo;

abstract class AbstractCommand
{
    /**
     * @throws \PhpUnitMockDemo\CommandException
     * @return void
     */
    abstract protected function execute(): void;

    public function run(): bool
    {
        $success = true;
        try {
            $this->execute();
        } catch (\Exception $e) {
            $success = false;
            $this->logException($e);
        }

        return $success;
    }

    protected function logException(\Exception $e)
    {
        // Logging
    }
}
