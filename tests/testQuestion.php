<?php

require_once __DIR__ . '/../boot.php';

// Added 'use' statements for required classes to follow PSR-1 guidelines
use PHPUnit\Framework\TestCase;
use interview\Question;
use interview\Database;

class QuestionTest extends TestCase
{
    public function testModelLoaded()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertInstanceOf(Question::class, new Question(1, new Database()));
    }

    public function testInstantiationById()
    {
        $question = new Question(1, new Database());

        // Used assertNotEmpty to check if the attributes are not empty
        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }

    public function testStaticGetNameById()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertNotEmpty(Question::getNameById(1, new Database()));
    }

    public function testStaticGetTextById()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertNotEmpty(Question::getTextById(1, new Database()));
    }

    public function testStaticGetAnswerById()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertNotEmpty(Question::getAnswerById(1, new Database()));
    }

    public function testStaticGetCreatedById()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertNotEmpty(Question::getCreatedById(1, new Database()));
    }

    public function testQuestionsAnswered()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertNotEmpty(Question::getAnswerById(1, new Database()));
        $this->assertNotEmpty(Question::getAnswerById(2, new Database()));
        $this->assertNotEmpty(Question::getAnswerById(3, new Database()));
    }
}
