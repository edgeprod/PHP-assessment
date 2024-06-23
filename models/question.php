<?php

namespace interview;

use Exception;

class Question
{
    public int $id;
    protected string $name;
    public string $text;
    public string $answer;
    public string $created;

    protected string $tableName = 'questions';
    const TABLENAME = 'questions';

    public function __construct(int $questionId, Database $db)
    {
        $sql = "SELECT * FROM `" . $this->tableName . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, [':id' => $questionId]);

        if (!empty($result)) {
            $this->id = $questionId;
            $this->name = $result[0]['name'];
            $this->text = $result[0]['text'];
            $this->answer = $result[0]['answer'];
            $this->created = $result[0]['created'];
        } else {
            throw new Exception("Question with ID {$questionId} not found.");
        }
    }

    public static function getNameById(int $questionId, Database $db): string
    {
        $sql = "SELECT `name` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, [':id' => $questionId]);

        if (!empty($result)) {
            return $result[0]['name'];
        } else {
            throw new Exception("Question with ID {$questionId} not found.");
        }
    }

    public static function getTextById(int $questionId, Database $db): string
    {
        $sql = "SELECT `text` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, [':id' => $questionId]);

        if (!empty($result)) {
            return $result[0]['text'];
        } else {
            throw new Exception("Question with ID {$questionId} not found.");
        }
    }

    public static function getAnswerById(int $questionId, Database $db): string
    {
        $sql = "SELECT `answer` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, [':id' => $questionId]);

        if (!empty($result)) {
            return $result[0]['answer'];
        } else {
            throw new Exception("Question with ID {$questionId} not found.");
        }
    }

    public static function getCreatedById(int $questionId, Database $db): string
    {
        $sql = "SELECT `created` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, [':id' => $questionId]);

        if (!empty($result)) {
            return $result[0]['created'];
        } else {
            throw new Exception("Question with ID {$questionId} not found.");
        }
    }

    public static function addQuestion(string $questionName, string $questionText, string $questionAnswer, Database $db): bool
    {
        $columns = ['name', 'text', 'answer'];
        $data = [$questionName, $questionText, $questionAnswer];

        $db->insert(self::TABLENAME, $columns, $data);

        return true;
    }
}
