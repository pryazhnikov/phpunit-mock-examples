<?php
declare(strict_types=1);

namespace PhpUnitMockDemo;

use PHPUnit\Framework\TestCase;

class AbstractCommandTest extends TestCase
{
    public function testRunOnSuccess()
    {
        // Arrange
        $command = $this->getMockBuilder(AbstractCommand::class)
            ->setMethods(['execute', 'logException', 'timerStart', 'timerStopt']) // timerStopt is a typo
            ->getMock();
        $command->expects($this->once())->method('execute');
        $command->expects($this->never())->method('logException');

        // Act
        $result = $command->run();

        // Assert
        $this->assertTrue($result, "True result is expected in the success case");
    }

    public function testRunOnFailure()
    {
        // Arrange
        $runException = new CommandException();

        // It's an analogue of $this->getMockBuilder(...)->setMethods([...])->getMock()
        $command = $this->createPartialMock(AbstractCommand::class, ['execute', 'logException']);
        $command->expects($this->once())
            ->method('execute')
            ->will($this->throwException($runException));
        $command->expects($this->once())
            ->method('logException')
            ->with($runException);

        // Act
        $result = $command->run();

        // Assert
        $this->assertFalse($result, "False result is expected in the failure case");
    }
}
