<?php

require_once __DIR__ . "/../boot.php";

class QuestionTest extends PHPUnit_Framework_TestCase
{

    public function testModelLoaded()
    {
        $this->assertInstanceOf('\Interview\Models\Question', new \Interview\Models\Question(1, new \Interview\Core\Database));
    }

    //--------------------------------------------------------------------------


    public function testInstantiationById()
    {
        $question = new \Interview\Models\Question(1, new \Interview\Core\Database);

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }

    //--------------------------------------------------------------------------


    public function testStaticGetNameById()
    {
        $this->assertNotEmpty(\Interview\Models\Question::getNameById(1, new \Interview\Core\Database));
    }

    //--------------------------------------------------------------------------


    public function testStaticGetTextById()
    {
        $this->assertNotEmpty(\Interview\Models\Question::getTextById(1, new \Interview\Core\Database));
    }

    //--------------------------------------------------------------------------


    public function testStaticGetAnswerById()
    {
        $this->assertNotEmpty(\Interview\Models\Question::getAnswerById(1, new \Interview\Core\Database));
    }

    //--------------------------------------------------------------------------


    public function testStaticGetCreatedById()
    {
        $this->assertNotEmpty(\Interview\Models\Question::getCreatedById(1, new \Interview\Core\Database));
    }

    //--------------------------------------------------------------------------


    public function testQuestionsAnswered()
    {
        $this->assertNotEmpty(\Interview\Models\Question::getAnswerById(1, new \Interview\Core\Database));
        $this->assertNotEmpty(\Interview\Models\Question::getAnswerById(2, new \Interview\Core\Database));
        $this->assertNotEmpty(\Interview\Models\Question::getAnswerById(3, new \Interview\Core\Database));
    }

    //--------------------------------------------------------------------------
}
