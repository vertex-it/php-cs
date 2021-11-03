# php-cs
Vertex IT shared PHP style rules for PHP-CS-Fixer

## Installation
First install the package:
```
composer require --dev vertex-it/php-cs
```

After installation copy the file src/.php-cs-fixer.dist.php to the root of your project:
```
cp vendor/vertex-it/php-cs/src/.php-cs-fixer.dist.php .php-cs-fixer.dist.php
```

## Usage
To run the PHP CS Fixer use the command
```
vendor/bin/php-cs-fixer fix
```

## Integration with PHPStorm
To enable PHP CS Fixer inspections in PHPStorm run these steps:
1. Set up PHP interpreter.  
2. In Settings > PHP > Quality tools > PHP CS Fixer choose your PHP interpreter and set path to cs fixer "vendor/bin/php-cs-fixer".  
3. Go to Settings > Editor > Inspections and enable PHP CS Fixer validation. Select "Custom" for Ruleset, and select path ".php-cs-fixer.dist.php" from the root of the project. 
