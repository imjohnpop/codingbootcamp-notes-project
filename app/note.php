<?php
    /*
    *   model for the notes table
    */

    namespace app;
    use \codingbootcamp\exercises\db;
    use \PDO;
    class note
    {
        public $id = null;
        public $title = null;
        public $text = null;
        public $short_summary = null;
        public $added_at = null;
        public $tags = null;
        public $user_id = null;

        public function insert()
        {
            $query = "INSERT INTO `note` 
            (`title`, `text`, `short_summary`, `added_at`, `tags`, `user_id`)
            VALUES 
            (?, ?, ?, ?, ?, ?)";
            db::query($query, [
                $this->title,
                $this->text,
                $this->short_summary,
                $this->added_at,
                $this->tags,
                $this->user_id
            ]);
        }

        public static function find($id)
        {
            $query = "
                SELECT *
                FROM `note`
                WHERE `note`.`id`
            ";
            $stmt = db::query($query, [$id]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, '\\app\\note');

            // fetch first returned row
            $note = $stmt->fetch();

            // return it
            return $note;
        }
    }