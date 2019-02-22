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
                                    <th>Image</th>
                                    <th>Tiêu đề</th>
                                  
                                    <th>Số lượt xem</th>
                                    <th>Danh mục</th>
                                 
                                    <th>Sửa,Xóa</th>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 1</td>
                                    
                                    <td>50</td>
                                  
                                    <td>Out Of Stock</td>
                                    
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 2</td>
                                    
                                    <td>60</td>
                                  
                                    <td>In Stock</td>
                                   
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 3</td>
                                    
                                    <td>70</td>
                                  
                                    <td>Low Stock</td>
                                    
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 4</td>
                                   
                                    <td>120</td>
                                   
                                    <td>In Stock</td>
                                   
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 5</td>
                                    
                                    <td>30</td>
                                   
                                    <td>Out Of Stock</td>
                                    
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 6</td>
                                   
                                    <td>400</td>
                                  
                                    <td>In Stock</td>
                                   
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
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