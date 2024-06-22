<?php

require_once __DIR__ . '/../boot.php';
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Interview\Question;
use Interview\Database;

class QuestionTest extends TestCase
{
    public function testModelLoaded(): void
    {
        $this->assertInstanceOf(Question::class, new Question(1, new Database()));
    }

    public function testInstantiationById(): void
    {
        $question = new Question(1, new Database());

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }

    public function testStaticGetNameById(): void
    {
        $this->assertNotEmpty(Question::getNameById(1, new Database()));
    }

    public function testStaticGetTextById(): void
    {
        $this->assertNotEmpty(Question::getTextById(1, new Database()));
    }

    public function testStaticGetAnswerById(): void
    {
        $this->assertNotEmpty(Question::getAnswerById(1, new Database()));
    }

    public function testStaticGetCreatedById(): void
    {
        $this->assertNotEmpty(Question::getCreatedById(1, new Database()));
    }

    public function testQuestionsAnswered(): void
    {
        $this->assertNotEmpty(Question::getAnswerById(1, new Database()));
        $this->assertNotEmpty(Question::getAnswerById(2, new Database()));
        $this->assertNotEmpty(Question::getAnswerById(3, new Database()));
    }
}

// EOF
