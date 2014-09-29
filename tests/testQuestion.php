<?php

require_once __DIR__ . "/../boot.php";

/**
 * QuestionTest class.
 */
class QuestionTest extends PHPUnit_Framework_TestCase
{
    /**
     * This method checks model is loaded or not
     *
     * @method testModelLoaded
     * @return void
     */
    public function testModelLoaded()
    {
        $this->assertInstanceOf('\interview\Question', new \interview\Question(1, new \interview\Database));
    }

    /**
     * This method test initialize question by question id
     *
     * @method testInstantiationById
     * @return void
     */
    public function testInstantiationById()
    {
        $question = new \interview\Question(1, new \interview\Database);

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }
    
    /**
     * This method tests question name by question id
     *
     * @method testStaticGetNameById
     * @return void
     */
    public function testStaticGetNameById()
    {
        $this->assertNotEmpty(\interview\Question::getNameById(1, new \interview\Database));
    }
    
    /**
     * This method tests question text by question id
     *
     * @method testStaticGetTextById
     * @return void
     */
    public function testStaticGetTextById()
    {
        $this->assertNotEmpty(\interview\Question::getTextById(1, new \interview\Database));
    }
    
    /**
     * This method tests question answer by question id
     *
     * @method testStaticGetAnswerById
     * @return void
     */
    public function testStaticGetAnswerById()
    {
        $this->assertNotEmpty(\interview\Question::getAnswerById(1, new \interview\Database));
    }
    
    /**
     * This method tests question answer by question id
     *
     * @method testStaticGetCreatedById
     * @return void
     */
    public function testStaticGetCreatedById()
    {
        $this->assertNotEmpty(\interview\Question::getCreatedById(1, new \interview\Database));
    }

    /**
     * This method tests questions answer
     *
     * @method testQuestionsAnswered
     * @return void
     */
    public function testQuestionsAnswered()
    {
        $this->assertNotEmpty(\interview\Question::getAnswerById(1, new \interview\Database));
        $this->assertNotEmpty(\interview\Question::getAnswerById(2, new \interview\Database));
        $this->assertNotEmpty(\interview\Question::getAnswerById(3, new \interview\Database));
    }
}
