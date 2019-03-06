<?php 
include ('../model/Connect.php');
include ('../model/news.php');
include ('../model/cat.php');
if(isset($_GET['atc'])) {
    $action = $_GET['atc'];
}
else {
    $action = "";
}
switch ($action) {
    case "qltin";
        include "../view/admin/qltin.php";
    break;
   
    case "qldanhmuc";
    include "../view/admin/qldanhmuc.php";
break;


    /* case"add_news";
    $title      = $_POST['title'];
    $link_seo   = $_POST['link-seo'];
    $date_created       = $_POST['date_creat'];
    $seen       = $_POST['seen'];
    $excu     = $_POST['except'];
    $decs    = "hehe";
    $images       = $_FILES['hinh']['name'];
          if(!empty($hinh)) {
            $tmp = $_FILES['hinh']['tmp_name'];
            $images  = time().$images; // noi ten anh 
            $new_path = "../view/upload/".$images;
      
            if (!move_uploaded_file($tmp,$new_path)) {
              $error = " upload that bai ";
            }
            else {
              move_uploaded_file($tmp,$new_path);
            }
          }
          else {
           $error = " Anh khong duoc de trong ";
          }
    $special      = "";
    if (isset($_POST['speci'])) {
        $special = 1;
    }
    else {
        $special = 0;
    }
    $id_category        = $_POST['select'];
    if (isset($_POST['submit'])) {
       
        $news = new news(2,$title,$link_seo,$date_created,$seen,$excu,$decs,$images,$special,$id_category);
        $news->insert();
        var_dump($news);
    }
   
    
    include "../view/admin/qltin.php";
    break; */
    default:
        include "../view/admin/main.php";
    break;
}
?>