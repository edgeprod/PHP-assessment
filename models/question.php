<?php

namespace Interview;

class Question
{
    public $id;
    protected $name;
    public $text;
    public $answer;
    public $created;

    protected $tableName = 'questions';
    const TABLENAME = 'questions';

    public function __construct(int $questionId, Database $db)
    {
        $sql = "SELECT * FROM `{$this->tableName}` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, ['id' => $questionId]);

        $this->id = $questionId;
        $this->name = $result[0]['name'] ?? null;
        $this->text = $result[0]['text'] ?? null;
        $this->answer = $result[0]['answer'] ?? null;
        $this->created = $result[0]['created'] ?? null;
    }

    public static function getNameById(int $questionId, Database $db): ?string
    {
        $sql = "SELECT `name` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, ['id' => $questionId]);

        return $result[0]['name'] ?? null;
    }

    public static function getTextById(int $questionId, Database $db): ?string
    {
        $sql = "SELECT `text` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, ['id' => $questionId]);

        return $result[0]['text'] ?? null;
    }

    public static function getAnswerById(int $questionId, Database $db): ?string
    {
        $sql = "SELECT `answer` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, ['id' => $questionId]);

        return $result[0]['answer'] ?? null;
    }

    public static function getCreatedById(int $questionId, Database $db): ?string
    {
        $sql = "SELECT `created` FROM `" . self::TABLENAME . "` WHERE `id` = :id LIMIT 1;";
        $result = $db->getArray($sql, ['id' => $questionId]);

        return $result[0]['created'] ?? null;
    }

    public static function addQuestion(string $questionName, string $questionText, string $questionAnswer, Database $db): bool
    {
        $columns = ['name', 'text', 'answer'];
        $data = [$questionName, $questionText, $questionAnswer];

        $db->insert(self::TABLENAME, $columns, $data);

        return true;
    }
}

// EOF
