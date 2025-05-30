<?php 
    class Student{
        public $id;
        public $first_name;
        public $last_name;

        private static $db;
        public function __construct(){
            self::$db = Database::getInstance();
        }

        public static function all(){
            $list = [];
            $result = self::$db->query('SELECT * FROM Students');
            foreach ($result->fetchAll() as $item) {
                $student = new Student();
                $student->id = $item['id'];
                $student->first_name = $item['first_name'];
                $student->last_name = $item['last_name'];
                $list[] = $student;
            }
            return $list;
        }
    }
?>