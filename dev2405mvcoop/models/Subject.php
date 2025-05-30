<?php 
    #models/Subject.php 
    class Subject{
        public $id_subject;
        public $name_subject;
        public $lesson;

        private static $db;
        public function __construct(){
            self::$db = Database:: getInstance();

        }
        // read a full data from Subjects
        public static function all(){
            $list = [];
            $result = self::$db->query('SELECT * FROM Subjects');
            foreach ($result->fetchAll() as $item) {
                $subject = new Subject();
                $subject->id_subject = $item['id_subject'];
                $subject->name_subject = $item['name_subject'];
                $subject->lesson = $item['lesson'];
                $list[] = $subject;
            }
            return $list;
        }
        public static function findid($id){
            $sql = "SELECT * FROM Subjects WHERE id_subject = ?";
            $subject = self::$db->prepare($sql);
            $subject->execute([$id]);
            foreach ($subject->fetchAll() as $item) {
                $k = new Subject();
                $k->id_subject = $item['id_subject'];
                $k->name_subject = $item['name_subject'];
                $k->lesson= $item['lesson'];
                return $k;
            }
        }
        public static function update($id_subject,$name_subject){
            $sql = "UPDATE Subjects SET name_subject = ? AND lesson = ?  WHERE id_subject = ?";
            $subject = self::$db->prepare($sql);
            return $subject->execute([$name_subject, $id_subject]);
        }
    }
?>