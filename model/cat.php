<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author nhan minh huynh
 */
class Catalog {
    var $id = null;
    var $Ten = null;
    var $TenKhongDau = null;
    
    function __construct() {
        if(func_num_args()==3){
		        $this->id = func_get_arg(0);
                $this->Ten = func_get_arg(1);
                $this->TenKhongDau = func_get_arg(2);
        }
    }
    // Lấy danh sách catalog từ database
    function getList()
    {
         $db = new connect();
         $select = "select * from loaitin";
         $result = $db->getList($select);
         return $result;
     }
     
     public function getListPage($form,$to) {
        $db = new connect();
        $select = "SELECT * FROM loaitin ORDER BY id DESC LIMIT $form ,$to";
        $result = $db->getList($select);
        return $result;
      }
     
     // Lấy thông tin chi tiết sản phẩm theo ID
     function getCateById($id)
     {
         $db = new connect();
         $select = "select * from loaitin where id=$id";
         $result=$db->getInstancse($select);
         return $result;
     }
    //Thêm danh muc mới
     function insert(){
        $db = new connect();
        $query = "insert into loaitin(Ten,TenKhongDau) values ('$this->Ten','$this->TenKhongDau')";
        $db->execute($query);
    }
     //Update sản phẩm
//     function Editproduct($tensanpham,$image,$price,$mota,$mathang,$brand,$id)
//     {
//         $db = new connect();
//         $query = "UPDATE products set ProductName='$tensanpham',ProductImage='$image',ProductPrice='$price',ProductDesc='$mota',ProductCategory= '$mathang', ProductBrand='$brand' where ProductID='$id'";
//         $db->exec($query);
//     }
     //Xoá sản phẩm
//     function Deleteproduct($id)
//         {
//            $db = new connect();
//            $query = "delete from products where ProductID = '$id'";
//            $db->exec($query);
//         }
}

?>