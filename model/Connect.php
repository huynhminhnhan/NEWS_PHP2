<?php
class connect {
    var $db = NULL;
    function __construct() {
        $dsn = "mysql:host=localhost;dbname=news";
        $user = "root";
        $pass = "root";
        $this->db = new PDO($dsn,$user,$pass);
        $this->db->query('set names "utf8"');
        
        if (!$this->db) {
            return false;
        }
        else {
           return true;
        }
    }
   /* db : tintucabc */

    public function getList($select) {
        $result = $this->db->query($select);
        return $result;
    }

    // hàm lấy dữ liệu từ một bản
   public function getInstancse($select) {
    $results = $this->db->query($select);
                $result = $results->fetch();
                return $result;
                
   }
   public function getmore($select) {
    $results = $this->db->query($select);
                $result = $results->fetch_assoc($select,0);
                return $result;
                
   }
  // tạo phương thức thực thi các câu lệnh insert , update , delete

  
  public function execute($query)
		{
			$result = $this->db->exec($query);
			return $result; 
		}
}


?> 