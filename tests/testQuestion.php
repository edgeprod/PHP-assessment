<?php

require_once __DIR__ . '/../boot.php';

use PHPUnit\Framework\TestCase;

class TestQuestion extends TestCase
{
    public function testModelLoaded(): void
    {
        $this->assertInstanceOf(\interview\Question::class, new \interview\Question(1, new \interview\Database()));
    }

    public function testInstantiationById(): void
    {
        $question = new \interview\Question(1, new \interview\Database());

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }

    public function testStaticGetNameById(): void
    {
        $this->assertNotEmpty(\interview\Question::getNameById(1, new \interview\Database()));
    }

    public function testStaticGetTextById(): void
    {
        $this->assertNotEmpty(\interview\Question::getTextById(1, new \interview\Database()));
    }

    public function testStaticGetAnswerById(): void
    {
        $this->assertNotEmpty(\interview\Question::getAnswerById(1, new \interview\Database()));
    }

    public function testStaticGetCreatedById(): void
    {
        $this->assertNotEmpty(\interview\Question::getCreatedById(1, new \interview\Database()));
    }

    public function testQuestionsAnswered(): void
    {
        $this->assertNotEmpty(\interview\Question::getAnswerById(1, new \interview\Database()));
        $this->assertNotEmpty(\interview\Question::getAnswerById(2, new \interview\Database()));
        $this->assertNotEmpty(\interview\Question::getAnswerById(3, new \interview\Database()));
    }
}
