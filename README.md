# Partial Mock Examples in PHPUnit

![Build status](https://github.com/pryazhnikov/phpunit-mock-examples/actions/workflows/php.yml/badge.svg)

## See also

### Example #1: `setMethods()` of existent methods

Everything is fine in PHPUnit 8.5 & 9.5, but there is an error in PHPUnit 10.0-dev (because `setMethods()` was removed).

[Code](https://github.com/pryazhnikov/phpunit-mock-examples/blob/article_example1/src/AbstractCommand.php), [unit test](https://github.com/pryazhnikov/phpunit-mock-examples/blob/article_example1/tests/AbstractCommandTest.php), [test run results](https://github.com/pryazhnikov/phpunit-mock-examples/actions/runs/761025993)

### Example #2: `setMethods()` of existent & non-existent methods

Everything is fine in PHPUnit 8.5 & 9.5, but there is an error in PHPUnit 10.0-dev (because `setMethods()` was removed).

[Code](https://github.com/pryazhnikov/phpunit-mock-examples/blob/article_example2/src/AbstractCommand.php), [unit test](https://github.com/pryazhnikov/phpunit-mock-examples/blob/article_example2/tests/AbstractCommandTest.php), [test run results](https://github.com/pryazhnikov/phpunit-mock-examples/actions/runs/761045115)
