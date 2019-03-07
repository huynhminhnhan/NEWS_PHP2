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
    case "archive";
        include "../view/home/archive.php";
    break;
    case "login";
    include "../view/home/login.php";
break;
    // case "idprevTin";
    // header("location:../view/home/single-post.php");
    // break;
    case "search";
    
    if (isset($_GET['atc'])=='search') 
    {
        // Gán hàm addslashes để chống sql injection
        $search = addslashes($_POST['top-search']);

        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
        if (empty($search)) {
            echo "<script>
           alert('Nhập từ khóa cần tìm kím');
            </script>";
            include "../view/home/home.php";
            
        } 
        else
        {
           $news = new news();
           $search_page = $news->search($search);
           include "../view/home/search-page.php";
           
            }
            }
            
              
   
  
    break;
    case "single-post";
        include "../view/home/single-post.php";
        break;
    default:
        include "../view/home/home.php";
    break;

}
?>