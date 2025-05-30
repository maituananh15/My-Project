<?php 
# models/Major.php
    class Major{
        public $id_major;
        public $name_major;
        public static $db;
        public function __construct(){
            self::$db = Database::getInstance();
        }

        // read a full data from majors
        public static function all(){
            $list = [];
            $result = self::$db->query('SELECT * FROM majors');
            foreach ($result->fetchAll() as $item) {
                $major = new Major();
                $major->id_major = $item['id_major'];
                $major->name_major = $item['name_major'];
                $list[] = $major;
            }
            return $list;
        }

        // CRUD...
        // Treatment function data by id
        public static function findid($id){
            $sql = "SELECT * FROM majors WHERE id_major = ?";
            $major = self::$db->prepare($sql);
            $major->execute([$id]);
            foreach ($major->fetchAll() as $item) {
                $k = new Major();
                $k->id_major = $item['id_major'];
                $k->name_major = $item['name_major'];
                return $k;
            }
        }

        // Save data
        public static function update($id_major,$name_major){
            $sql = "UPDATE majors SET name_major = ? WHERE id_major = ?";
            $major = self::$db->prepare($sql);
            return $major->execute([$name_major, $id_major]);
        }

        //Add new
        public static function add($id_major,$name_major){
            $sql = "INSERT majors(id_major,name_major) VALUES(?,?)";
            $major = self::$db->prepare($sql);
            return $major->execute([$id_major, $name_major]);
        }

        //delete
        public static function delete($id){
            $sql = "DELETE FROM majors WHERE id_major = ?";
            $major = self::$db->prepare($sql);
            return $major->execute([$id]);
        }

        // Detail -> use findid


    }
?>