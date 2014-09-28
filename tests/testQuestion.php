<?php

require_once __DIR__ . "/../boot.php";

class QuestionTest extends PHPUnit_Framework_TestCase
{
    public function testModelLoaded()
    {
        $this->assertInstanceOf('\Interview\Question', new \Interview\Question(1, new \Interview\Database));
    }
    //--------------------------------------------------------------------------


    public function testInstantiationById()
    {
        $question = new \Interview\Question(1, new \Interview\Database);

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }
    //--------------------------------------------------------------------------


    public function testStaticGetNameById()
    {
        $this->assertNotEmpty(\Interview\Question::getNameById(1, new \Interview\Database));
    }
    //--------------------------------------------------------------------------


    public function testStaticGetTextById()
    {
        $this->assertNotEmpty(\Interview\Question::getTextById(1, new \Interview\Database));
    }
    //--------------------------------------------------------------------------


    public function testStaticGetAnswerById()
    {
        $this->assertNotEmpty(\Interview\Question::getAnswerById(1, new \Interview\Database));
    }
    //--------------------------------------------------------------------------


    public function testStaticGetCreatedById()
    {
        $this->assertNotEmpty(\Interview\Question::getCreatedById(1, new \Interview\Database));
    }
    //--------------------------------------------------------------------------


    public function testQuestionsAnswered()
    {
        $this->assertNotEmpty(\Interview\Question::getAnswerById(1, new \Interview\Database));
        $this->assertNotEmpty(\Interview\Question::getAnswerById(2, new \Interview\Database));
        $this->assertNotEmpty(\Interview\Question::getAnswerById(3, new \Interview\Database));
    }
    //--------------------------------------------------------------------------
}
