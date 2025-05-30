<?php 
    #models/Result.php 
    class Result{
        public $id;
        public $id_subject;
        public $score;

        private static $db;
        public function __construct(){
            self::$db = Database::getInstance();
        }
        public static function all(){
            $list = [];
            $save = self::$db->query('SELECT * FROM results');
            foreach ($save->fetchAll() as $item) {
                $result = new Result() ;
                $result->id = $item['id'];
                $result->id_subject = $item['id_subject'];
                $result->score = $item['score'];
                $list[] = $result;
            }
            return $list;
        }
        public static function findid($id){
            $sql = "SELECT * FROM results WHERE id_subject = ?";
            $result = self::$db->prepare($sql);
            $result->execute([$id]);
            foreach ($result->fetchAll() as $item) {
                $k = new Result();
                $k->id = $item['id'];
                $k->id_subject = $item['id_subject'];
                $k->score = $item['score'];
                return $k;
            }
        }
        public static function update($id_subject,$score){
            $sql = "UPDATE results SET score = ? WHERE id_subject = ?";
            $result = self::$db->prepare($sql);
            return $result->execute([$score, $id_subject]);
        }
    }
?>