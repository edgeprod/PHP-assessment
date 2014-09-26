Result - Technical Skills Assessment (PHP)
===============================================
===============================================
phpUnit test result without failure
===============================================
1. testBasics.php

C:\wamp\www\PHP-assessment\tests>phpunit testBasics.php
PHPUnit 4.2.6 by Sebastian Bergmann.

...
Time: 113 ms, Memory: 3.25Mb
OK (3 tests, 3 assertions)
C:\wamp\www\PHP-assessment\tests>


2 testQuestion.php

C:\wamp\www\PHP-assessment\tests>phpunit testQuestion.php
PHPUnit 4.2.6 by Sebastian Bergmann.
.......
Time: 215 ms, Memory: 3.25Mb
OK (7 tests, 12 assertions)
C:\wamp\www\PHP-assessment\tests>

===============================================
phpUnit test result without failure
===============================================
C:\wamp\www\PHP-assessment\tests>phpunit testQuestion.php
PHPUnit 4.2.6 by Sebastian Bergmann.

.......F
Time: 228 ms, Memory: 3.25Mb
There was 1 failure:

1) QuestionTest::testQuestionsNameWithFailure
Failed asserting that a string is empty.

C:\wamp\www\PHP-assessment\tests\testQuestion.php:65

FAILURES!
Tests: 8, Assertions: 13, Failures: 1.

C:\wamp\www\PHP-assessment\tests>
===============================================