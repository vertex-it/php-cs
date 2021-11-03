# php-cs
Vertex IT shared PHP style rules for PHP-CS-Fixer

## Installation
```
composer require --dev vertexit/php-cs
```
After installation copy the file src/.php-cs-fixer.dist.php to the root of your project.

## Usage
To run the PHP CS Fixer use the command
```
vendor/bin/php-cs-fixer fix
```

## Integration with PHPStorm
First set up PHP interpreter.  
Then in Settings > PHP > Quality tools > PHP CS Fixer choose your PHP interpreter and set path to cs fixer "vendor/bin/php-cs-fixer".  
Go to Settings > Editor > Inspections and enable PHP CS Fixer validation. Select "Custom" for Ruleset, and select path ".php-cs-fixer.dist.php" from the root of the project. 
