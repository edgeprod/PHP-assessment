<?php

namespace Interview\Models;

class Question
{

    public $id;
    public $name;
    public $text;
    public $answer;
    public $created;

    const TABLENAME = 'questions';

    public function __construct($questionId, \Interview\Core\Database $db)
    {
        $sql = "SELECT * FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);
        $this->id = $questionId;
        $this->name = $result[0]['name'];
        $this->text = $result[0]['text'];
        $this->answer = $result[0]['answer'];
        $this->created = $result[0]['created'];
    }

    //--------------------------------------------------------------------------


    public static function getNameById($questionId, \Interview\Core\Database $db)
    {
        $sql = "SELECT `name` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['name'];
    }

    //--------------------------------------------------------------------------


    public static function getTextById($questionId, \Interview\Core\Database $db)
    {
        $sql = "SELECT `text` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['text'];
    }

    //--------------------------------------------------------------------------


    public static function getAnswerById($questionId, \Interview\Core\Database $db)
    {
        $sql = "SELECT `answer` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['answer'];
    }

    //--------------------------------------------------------------------------


    public static function getCreatedById($questionId, \Interview\Core\Database $db)
    {
        $sql = "SELECT `created` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        return $result[0]['created'];
    }

    //--------------------------------------------------------------------------


    public static function addQuestion($questionName, $questionText, $questionAnswer, \Interview\Core\Database $db)
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

        $db->insert(self::TABLENAME, $columns, $data);

        return true;
    }

    //--------------------------------------------------------------------------
}
