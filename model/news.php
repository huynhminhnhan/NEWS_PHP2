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
      $select = "SELECT * FROM tintuc ORDER BY id DESC";
      $result = $db->getList($select);
      return $result;
    }
    
  public function getListPage($form,$to) {
    $db = new connect();
    $select = "SELECT * FROM tintuc ORDER BY id DESC LIMIT $form ,$to";
    $result = $db->getList($select);
    return $result;
  }

  static function getNewsSpecial($top){
    $db = new connect();
    $query = "select * from tintuc where NoiBat = 1 ORDER BY id DESC limit $top";
$result = $db->getList($query);
    return $result;
}
static function getNewsSpecialFirst($top){
  $db = new connect();
  $query = "select * from tintuc where NoiBat = 1 ORDER BY id limit $top";
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
  $query = "select *  FROM tintuc WHERE id = $id";
  $result = $db->getInstancse($query);
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