<?php

namespace interview;

class Question
{

    public $id;
    public $name;
    public $text;
    public $answer;
    public $created;

    protected $tableName = 'questions';
    const      TABLE_NAME = 'questions';

    public function __construct($questionId, Database $db)
    {
        $sql  = "SELECT * FROM `$this->tableName` WHERE `id` = '" . $questionId . "' LIMIT 1;";

        $result = $db->getArray($sql);

        $this->id      = $questionId;
        $this->name    = $result[0]['name'];
        $this->text    = $result[0]['text'];
        $this->answer  = $result[0]['answer'];
        $this->created = $result[0]['created'];
    }
    //--------------------------------------------------------------------------


    public static function getNameById($questionId, Database $db)
    {
        $sql = "SELECT `name` FROM `" . self::TABLE_NAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['name'];
    }
    //--------------------------------------------------------------------------


    public static function getTextById($questionId, Database $db)
    {
        $sql = "SELECT `text` FROM `" . self::TABLE_NAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['text'];
    }
    //--------------------------------------------------------------------------


    public static function getAnswerById($questionId, Database $db)
    {
        $sql = "SELECT `answer` FROM `" . self::TABLE_NAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['answer'];
    }
    //--------------------------------------------------------------------------


    public static function getCreatedById($questionId, Database $db)
    {
        $sql = "SELECT `created` FROM `" . self::TABLE_NAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['created'];
    }
    //--------------------------------------------------------------------------


    public static function addQuestion($questionName, $questionText, $questionAnswer, Database $db)
    {
        $columns = array(
            'name',
            'text',
            'answer'
        );

        $data = array(
            $questionName,
            $questionText,
            $questionAnswer
        );

        $db->insert(self::TABLE_NAME, $columns, $data);

        return true;
    }
    //--------------------------------------------------------------------------
}