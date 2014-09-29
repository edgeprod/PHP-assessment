<?php namespace interview;

/**
 * Questions class, holding the model
 * -> methods, for interacting with the 
 * -> database.
 */
class Question
{
    /**
     * Question id
     *
     * @var int
     */
    public $id;

    /**
     * Question name
     *
     * @var string
     */
    public $name;

    /**
     * Question text
     *
     * @var string
     */
    public $text;

    /**
     * Question answer
     *
     * @var string
     */
    public $answer;

    /**
     * Question created
     *
     * @var date
     */
    public $created;

    protected $tableName = 'questions';
    const     TABLENAME = 'questions';

    /**
     * Initialize Question model
     *
     * @params int      $questionId
     * @params Database $db
     */
    public function __construct($questionId, Database $db)
    {
        $sql    = "SELECT * FROM `$this->tableName` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        // Let's just not assume that will always get data from the
        // Database
        if(!empty($result)) {
            $result = $result[0];
        } else {
             Logging::logDBErrorAndExit("__construct - No result found");
        }

        if(empty($result["answer"])) {
            $result["answer"] = "Put some data into the db, othewise I will fail.";
        }

        $this->id      = $questionId;
        $this->name    = $result['name'];
        $this->text    = $result['text'];
        $this->answer  = $result['answer'];
        $this->created = $result['created'];
    }

    /**
     * This method returns question name by id
     *
     * @method getNameById
     * @params int      $questionId
     * @params Database $db
     * @return string
     */
    public static function getNameById($questionId, Database $db)
    {
        $sql    = "SELECT `name` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        if(!empty($result)) {
            $result = $result[0];
        } else {
             Logging::logDBErrorAndExit("getNameById - No result found");
        }

        return $result['name'];
    }

    /**
     * This method returns question text by id
     *
     * @method getTextById
     * @params int      $questionId
     * @params Database $db
     * @return string
     */
    public static function getTextById($questionId, Database $db)
    {
        $sql = "SELECT `text` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        if(!empty($result)) {
            $result = $result[0];
        } else {
             Logging::logDBErrorAndExit("getTextById - No result found");
        }

        return $result["text"];
    }

    /**
     * This method returns question answer by id
     *
     * @method getAnswerById
     * @params int      $questionId
     * @params Database $db
     * @return string
     */
    public static function getAnswerById($questionId, Database $db)
    {
        $sql    = "SELECT `answer` FROM " . self::TABLENAME . " WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        if(!empty($result)) {
            $result = $result[0];
        } else {
             Logging::logDBErrorAndExit("getAnswerById - No result found");
        }

        if(empty($result["answer"])) {
            $result["answer"] = "Put some data into the db, othewise I will fail.";
        }

        return $result['answer'];
    }

    /**
     * This method returns question created by id
     *
     * @method getCreatedById
     * @params int      $questionId
     * @params Database $db
     * @return timestamp
     */
    public static function getCreatedById($questionId, Database $db)
    {
        $sql = "SELECT `created` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

        if(!empty($result)) {
            $result = $result[0];
        } else {
             Logging::logDBErrorAndExit("GetNameById - No result found");
        }

        return $result['created'];
    }

    /**
     * This method add new questions
     *
     * @method addQuestion
     * @params string   $questionName
     * @params string   $questionText
     * @params string   $questionAnswer
     * @params Database $db
     * @return boolean
     */
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

        $db->insert(self::TABLENAME, $columns, $data);

        return true;
    }
}