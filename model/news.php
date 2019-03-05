<?php 

class news {
   
    var $title = NULL;
    var $date_created   = NULL;
    var $seen           = NULL;
    var $excu           = NULL;
    var $decs    = NULL;
    var $images = NULL;
    var $special = NULL;
    var $id_category = NULL;
    public function __construct() {
        if(func_num_args()== 8) {
           
            $this->title    = func_get_arg(0);
            $this->date_created      = func_get_arg(1);
            $this->seen      = func_get_arg(2);
            $this->excu      = func_get_arg(3);
            $this->decs      = func_get_arg(4);
            $this->images   = func_get_arg(5);  
            $this->special   = func_get_arg(6);
            $this->id_category      = func_get_arg(7);
        }
     }

     public function getAllListPage() {
      $db = new connect();
      $select = "SELECT * FROM tintuc ORDER BY id RAND()";
      $result = $db->getList($select);
      return $result;
    }
    public function getAllListPageRand() {
      $db = new connect();
      $select = " SELECT * FROM tintuc ORDER BY RAND(id)";
      $result = $db->getList($select);
      return $result;
    }
   

  public function getListPage($form,$to) {
    $db = new connect();
    $select = "SELECT * FROM tintuc ORDER BY id DESC LIMIT $form ,$to";
    $result = $db->getList($select);
    return $result;
  }

  static function getNewsSpecial($form,$to){
    $db = new connect();
    $query = "select * from tintuc where NoiBat = 1 ORDER BY id DESC limit $form,$to";
$result = $db->getList($query);
    return $result;
}

static function updateSee($id){
  $db = new connect();
  $query = "UPDATE tintuc SET soluotxem =soluotxem +1 WHERE id=$id";
$result = $db->getList($query);
  
} 
// cap nhat so lan xem tin
static function getSee(){
  $db = new connect();
  $query = "SELECT * FROM loaitin INNER JOIN tintuc ON (loaitin.idLoaiTin = tintuc.idloaitin) WHERE SoLuotXem ORDER BY id ASC limit 3";
$result = $db->getList($query);
return $result;
} 
// lay bai viet xem nhieu nhat
static function getNewsSpecialFirst($top){
  $db = new connect();
  $query = "select * from tintuc where NoiBat = 1 ORDER BY id limit $top";
$result = $db->getList($query);
  return $result;
}
// lay bai viet moi nhat
// get archive
static function getNewsArchive($id){
  $db = new connect();
  $query = "select * from tintuc where idLoaiTin=$id";
$result = $db->getList($query);
  return $result;
}

static function getNews($form,$to){
  $db = new connect();
  $query = "SELECT * FROM loaitin INNER JOIN tintuc ON (loaitin.idLoaiTin = tintuc.idLoaiTin)  where NoiBat = 0 ORDER BY id DESC limit $form,$to";
$result = $db->getList($query);
  return $result;
}

// get danh muc the thao
static function getNewsTheThao(){
  $db = new connect();
  $query = "SELECT * FROM tintuc INNER JOIN loaitin ON ( tintuc.idLoaiTin = loaitin.idLoaiTin) WHERE tintuc.idLoaiTin = 30";
  
$result = $db->getList($query);
  return $result;
}
// get news dau tu 
static function getNewsDauTu(){
  $db = new connect();
  $query = "SELECT * FROM tintuc INNER JOIN loaitin ON ( tintuc.idLoaiTin = loaitin.idLoaiTin) WHERE tintuc.idLoaiTin = 29";
  
$result = $db->getList($query);
  return $result;
}


  function insert(){
    $db = new connect();
    /* $query = "INSERT INTO tintuc(TieuDe,TieuDeKhongDau,TomTat,NoiDung,Hinh,NoiBat,SoLuotXem,date_created,idLoaiTin) VALUES('$this->title','$this->link_seo','$this->date_created','$this->excu','$this->seen','$this->decs','$this->images','$this->special','$this->id_category')"; */
    $query = "INSERT INTO tintuc(TieuDe,TomTat,NoiDung,Hinh,NoiBat,SoLuotXem,date_created,idLoaiTin) VALUES('$this->title','$this->excu',";
    $query .= "'$this->decs','$this->images',$this->special,$this->seen,'$this->date_created',$this->id_category)";
    $db->execute($query);
    
   
}
function getAllById($id) {
  $db = new connect();
  $query = "SELECT *  FROM loaitin INNER JOIN tintuc ON (loaitin.idLoaiTin = tintuc.idloaitin) WHERE id=$id ";
  
 $result = $db->getInstancse($query);
 //print_r($result);
  return $result;
}

function upDateNews($title,$excu,$decs,$images,$special,$seen,$date_created,$id_category,$id) {
  $db = new connect();
  $query = "UPDATE tintuc SET TieuDe='$title' ,TomTat='$excu',NoiDung='$decs',Hinh='$images',NoiBat=$special,SoLuotXem=$seen,date_created='$date_created',idLoaiTin=$id_category  WHERE id =$id";
  //echo $query;
 $db->execute($query);
}
function deleteNews($id) {
  $db = new connect();
  $query = "DELETE FROM tintuc WHERE id = $id";
  $db->execute($query);
}

}



?>