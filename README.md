Error Encountered in PHPUnit Testing

Error Message:

PHPUnit 8.5.38 by Sebastian Bergmann and contributors.

E                                                                   1 / 1 (100%)

Time: 540 ms, Memory: 4.00 MB

There was 1 error:

1) Tests\DatabaseConnectionTest::testDatabaseConnection
Error: Class "config\Config_Database" not found

C:\Users\lenovo\source\repos\PHP-assessment\core\database.php:16
C:\Users\lenovo\source\repos\PHP-assessment\tests\DatabaseConnectionTest.php:13

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.


Description:
During the execution of PHPUnit tests in my project (PHP-assessment), an error occurred related to the class Config_Database not being found. This error specifically happened when PHPUnit attempted to run the DatabaseConnectionTest::testDatabaseConnection test method.

Probable Causes:
Autoloading Issue: The autoloader might not be correctly configured to load the Config_Database class.
Namespace Mismatch: There could be a mismatch between the namespace defined in Config_Database and where PHPUnit expects to find it.
File Path or Name Issue: The file defining Config_Database might not exist or might be named differently than expected.
Steps Taken to Resolve
Checked the composer.json for correct autoloading configurations.
Verified the namespace and class name in Config_Database and DatabaseConnectionTest.php.
Ran composer dump-autoload to regenerate autoload files.
Reviewed the file path and ensured it matches the namespace structure.
Next Steps
To resolve this issue, I will continue investigating the autoloading setup and namespace/class definitions to ensure that PHPUnit can locate the Config_Database class during testing.

Additional Information
PHPUnit Version: 8.5.38
-Project Path: C:\Users\lenovo\source\repos\PHP-assessment
-Affected Files:
-core\database.php
-tests\DatabaseConnectionTest.php
