1. phpunit testBasics.php
PHPUnit 4.2.6 by Sebastian Bergmann.

...

Time: 1.04 seconds, Memory: 1.50Mb

OK (3 tests, 3 assertions)

2. phpunit testQuestion.php
PHPUnit 4.2.6 by Sebastian Bergmann.

.FFFFFF

Time: 7.19 seconds, Memory: 1.50Mb

There were 6 failures:

1) QuestionTest::testInstantiationById
Failed asserting that a NULL is not empty.

D:\AppServ\www\PHP-assessment1\tests\testQuestion.php:18

2) QuestionTest::testStaticGetNameById
Failed asserting that a NULL is not empty.

D:\AppServ\www\PHP-assessment1\tests\testQuestion.php:28

3) QuestionTest::testStaticGetTextById
Failed asserting that a NULL is not empty.

D:\AppServ\www\PHP-assessment1\tests\testQuestion.php:35

4) QuestionTest::testStaticGetAnswerById
Failed asserting that a NULL is not empty.

D:\AppServ\www\PHP-assessment1\tests\testQuestion.php:42

5) QuestionTest::testStaticGetCreatedById
Failed asserting that a NULL is not empty.

D:\AppServ\www\PHP-assessment1\tests\testQuestion.php:49

6) QuestionTest::testQuestionsAnswered
Failed asserting that a NULL is not empty.

D:\AppServ\www\PHP-assessment1\tests\testQuestion.php:56

FAILURES!
Tests: 7, Assertions: 7, Failures: 6.