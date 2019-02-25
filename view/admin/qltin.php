<?php 
include "header.php";

if (isset($_POST['submit'])) {
    $title      = $_POST['title'];
   
    $date_created       = $_POST['date_creat'];
    $seen       = $_POST['seen'];
    $excu     = $_POST['except'];
    $decs    = $_POST['decs'];
    $images       = $_FILES['hinh']['name'];
          if(!empty($images)) {
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
    $news = new news($title,$date_created,$seen,$excu,$decs,$images,$special,$id_category);
    $news->insert();
   
}
if(isset($_GET['delete'])) {
    $news = new news();
    $id = $_GET['id'];
      $news->deleteNews($id);  
      
   }
   if(isset($_GET['edit'])) {
    $news = new news();
    $id = $_GET['id'];
    $news->UpdateNews($id);  
      

   }
   if(isset($_GET['update']) && $_GET['edit']) {
    $title      = $_POST['title'];
   
    $date_created       = $_POST['date_creat'];
    $seen       = $_POST['seenn'];
    $excu     = $_POST['except'];
    $decs    = $_POST['decs'];
    $images       = $_FILES['hinh']['name'];
          if(!empty($images)) {
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
    echo $id,$title,$date_created,$seen,$excu,$decs,$images,$special,$id_category;
    $id = $_GET['id'];
    $news = new news($id,$title,$date_created,$seen,$excu,$decs,$images,$special,$id_category);
    $news->UpdateNews();  
      

   }
?>
  <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    
                                    <li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i>Tất cả tin tức</a></li>
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>Thêm tin mới</a></li>
                                    <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                    <?php 
                                                   if (isset($_GET['edit']) && $_GET['id']) { 
                                                       $news = new news;
                                                       $id = $_GET['id'];
                                                       $infor = $news->getAllById($id);
                                                       extract($infor);
                                                        //var_dump($infor)
                                                       ?>

                                                    <form action="?atc=qltin" method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="review-content-section">
                                                              
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                                    <input type="text" name="title" value="<?php echo $infor['TieuDe'] ?>" class="form-control" placeholder="Tiêu đề edit">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                                    <input type="text" name="decs" value="<?php echo $infor['NoiDung'] ?>" class="form-control" placeholder="Noi dung">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                                    <input type="text" name="except" value="<?php echo $infor['TomTat'] ?>" class="form-control" placeholder="Tóm tắt">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                                    <input type="text" name="date_creat" value="<?php echo $infor['date_created'] ?>" class="form-control" id="datepicker" placeholder="Ngày đăng">
                                                                    <script>
              $( function() {
                $( "#datepicker" ).datepicker();
              } );
              </script>
                                                                </div>
                                                               
                                                                </div>  
                                                        </div>
            
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="review-content-section">
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                                    <input value="<?php echo $infor['Hinh'] ?>" type="file" name="hinh"  class="form-control">
                                                                </div>
            
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true">Nổi bật</i></span>
                                                                    <?php 
                                                                    $checked = $infor['NoiBat'];
                                                                    if($checked =1) {
                                                                        echo '<input value=""  type="checkbox"  name="speci" class="form-control" placeholder="Nổi bật" checked >';
                                                                    }
                                                                        else {
                                                                            echo '<input value=""  type="checkbox"  name="speci" class="form-control" placeholder="Nổi bật"  /> ';
                                                                        }
                                                                    ?>
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                                    <input value="<?php echo $infor['SoLuotXem'] ?>" type="text" name="seen" class="form-control" placeholder="Số lượt xem">
                                                                </div>
                                                              
                                                                
                                                                <select name="select"   class="form-control pro-edt-select form-control-primary">
                                                                    <?php
                                                                    $list_catlog = new Catalog();
                                                                    $dslist = $list_catlog->getList();
                                                                    
                                                                    foreach ($dslist as $dslist) {
                                                                        extract($dslist);
                                                                      
            
                                                                    echo '<option value="'.$dslist['id'].'">'.$dslist['Ten'].'</option>';
                                                                    }
                                                                    ?>
                                                                        
                                                                    </select>
                                                                   
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
            
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                                <button type="submit" name="update" class="btn btn-primary waves-effect waves-light m-r-10">Save Edit
                                                                    </button>
                                                                <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                                    </button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                </form>
                                                  <?php } else {?>
                                                    <form action="?atc=qltin" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                  
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="title" class="form-control" placeholder="Tiêu đề">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="decs" class="form-control" placeholder="Noi dung">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="except" class="form-control" placeholder="Tóm tắt">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="date_creat" class="form-control" id="datepicker" placeholder="Ngày đăng">
                                                        <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
                                                    </div>
                                                   
                                                    </div>  
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="file" name="hinh"  class="form-control">
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true">Nổi bật</i></span>
                                                        <input type="checkbox" name="speci" class="form-control" placeholder="Nổi bật">
                                                        
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                        <input type="text" name="seen" class="form-control" placeholder="Số lượt xem">
                                                    </div>
                                                  
                                                    
                                                    <select name="select" class="form-control pro-edt-select form-control-primary">
                                                        <?php
                                                        $list_catlog = new Catalog();
                                                        $dslist = $list_catlog->getList();
                                                        
                                                        foreach ($dslist as $dslist) {
                                                            extract($dslist);
                                                          

                                                        echo '<option value="'.$dslist['id'].'">'.$dslist['Ten'].'</option>';
                                                        }
                                                        ?>
															
                                                        </select>
                                                       
                                                </div>
                                                
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
														</button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard
														</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    </form>
                                                 
                                   
                                      <?php } ?>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product product-tab-list tab-pane fade active in" id="description">
                                <a  href="">Thêm tin mới</a>
                            </div>
                            <table>
                               <tr>
                                   <th>Ảnh</th>
                                   <th>Tiêu đề</th>
                                 
                                   <th>Số lượt xem</th>
                                   <th>Sửa</th>
                                
                                   <th>Xóa</th>
                               </tr>
                                           
                                <?php
                               $news = new News();
                              
                               $dssp = $news->getAllListPage();
                               
                              
                                                     
                               foreach ($dssp as $kq) {
                                  
                                   extract($kq);
                                   $new_path = "../view/upload/".$kq['Hinh'];
                                   if(is_file($new_path)){
                                     $new_path= '<img src='.$new_path.' width="100px"/>';
                                   }else{
                                     $new_path="no data";
                                   }
                                   echo ' <tr>
                                   <td>'.$new_path.'</td>
                                   <td>'.$kq['TieuDe'].'</td>
                                 
                                   <td><i class="fa fa-eye" aria-hidden="true">'.$kq['SoLuotXem'].'</i></td>
                                   <td><a href="?atc=qltin&id='.$kq['id'].'&edit&#description">Sửa</a></td>
                                
                                   <td><a href="?atc=qltin&id='.$kq['id'].'&delete">Xóa</a></td>
                               </tr>';
                               
                                }
                                ?>  

                               
                            </table>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                 <h1>tất cả ??</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
include "footer.php";

?>