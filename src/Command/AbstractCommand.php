<?php

declare(strict_types=1);

namespace Smeghead\PhpVariableHardUsage\Command;

abstract class AbstractCommand implements CommandInterface
{
    private const VERSION = '0.0.3';

    protected function printVersion(): void
    {
        echo "PHP Variable Hard Usage Analyzer, version " . self::VERSION . "\n";
    }

    protected function printHelp(): void
    {
        echo "Usage: php bin/php-variable-hard-usage [command] [options]\n";
        echo "Commands:\n";
        echo "  single <file>           Analyze a single file\n";
        echo "  scopes <directory>      Analyze PHP files in a directory\n";
        echo "Options:\n";
        echo "  --help                  Display help information\n";
        echo "  --version               Show the version of the tool\n";
    }
}