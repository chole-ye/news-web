<?
    namespace App;
    use MySQLi;
    class Student{
        protected $link;
        public function __construct () {
            $this -> link = new MySQLi('localhost','root','root','myframe');
            $this -> link -> set_charset('utf8');
        }
        public function getAll () {
            $sql = 'SELECT * FROM student';
            $res = $this->link->query($sql);
            return $res->fetch_all(MYSQLI_ASSOC);
        }
    }
?>
