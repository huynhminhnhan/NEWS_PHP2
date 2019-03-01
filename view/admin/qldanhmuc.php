<?php 
include "header.php";
if (isset($_POST['submit'])) {
   
   $tieude_Cat = $_POST['title'];
   $TieuDeKhongDau = $_POST['link_seo'];
   $cat = new Catalog('',$tieude_Cat,$TieuDeKhongDau);
   $cat->insert();
    

}
if (isset($_POST['update'])) {
   
    $tieude_Cat = $_POST['title'];
    $TieuDeKhongDau = $_POST['link_seo'];
    $cat = new Catalog();
    $id = $_GET['id'];
   
   $cat->EditCat($tieude_Cat,$TieuDeKhongDau,$id);
     
 
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
                                    
                                  
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>Thêm danh mục</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                    <?php 
                                      
                                    if(isset($_GET['edit'])) {
                                        $cat = new Catalog();
                                      $id = $_GET['id'];
                                      $dsdm =  $cat->getCateById($id);
                                        extract($dsdm);
                                        ?>
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                   
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="title" value="<?php echo $dsdm['Ten'] ?>" class="form-control" placeholder="Tiêu đề danh mục">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="link_seo" value="<?php echo $dsdm['TenKhongDau'] ?>" class="form-control" placeholder="Tiêu đề danh mục không dấu">
                                                    </div>
                                                   
                                                
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" name="update" class="btn btn-primary waves-effect waves-light m-r-10">Save
														</button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard
														</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    </form>
<!-- form truoc khi edit -->
                                   <?php }  else { ?>
                                    <form action="?atc=qldanhmuc" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                   
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="title" class="form-control" placeholder="Tiêu đề danh mục">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" name="link_seo" class="form-control" placeholder="Tiêu đề danh mục không dấu">
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
                                   <?php 
                                   }
                                    ?>
                                   
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Danh sách loại tin</h4>
                           
                            <table>
                                <tr>
                                <th>ID</th>
                                    <th>Tiêu đề</th>
                                  
                                    <th>Tiêu đề không dấu</th>
                                   
                                 
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                              
                                <?php 
                                $cat = new Catalog();
                               $dsdm =  $cat->getList();
                                foreach ($dsdm as $dsdm) {
                                    extract($dsdm);

                                    echo '<tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>'.$dsdm['Ten'].'</td>
                                    
                                    <td>50</td>
                                  
                                    
                                    
                                    <td>
                                    <a href="?atc=qldanhmuc&id='.$dsdm['id'].'&edit"> <button data-toggle="tooltip" name="" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> </a>
                                       
                                    </td>
                                    <td>
                                    
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
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
        </div>
<?php 
include "footer.php";

?>