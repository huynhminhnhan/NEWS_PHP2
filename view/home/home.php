<?php include "header.php" ?>
<section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content">
                    <?php
$news = new News();

$dssp = $news->getNewsSpecialFirst(1);

foreach ($dssp as $kq) {
    
    extract($kq);
    $new_path = "../view/upload/".$kq['Hinh'];
    if(is_file($new_path)){
      $new_path=$new_path;
    }else{
      $new_path="no data";
    }
    echo ' <div class="tab-pane fade" id="post-1" role="tabpanel" aria-labelledby="post-1-tab" style="display:block;opacity:1;">
    <!-- Single Feature Post -->
    <div class="single-feature-post video-post bg-img" style="background-image: url('.$new_path.')">
        <!-- Play Button -->
        

        <!-- Post Content -->
        <div class="post-content">
            <a href="#" class="post-cata">Sports</a>
            <a href="?atc=single-post&id='.$kq['id'].'&idLoaiTin='.$kq['idLoaiTin'].'" class="post-title">'.$kq['TieuDe'].'</a>
            <div class="post-meta d-flex">
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
             
              
            </div>
        </div>

        <!-- Video Duration -->
        <span class="video-duration"><i class="fa fa-eye" aria-hidden="true"> '.$kq['SoLuotXem'].' </i></span>
    </div>
</div>';
}
?>
    <!-- Video Duration --></div>  
                        </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="nav vizew-nav-tab" role="tablist">
                    <?php

$dssp = $news->getNewsSpecial(0,5);

foreach ($dssp as $kq) {
   
    extract($kq);
    $new_path = "../view/upload/".$kq['Hinh'];
    if(is_file($new_path)){
      $new_path=$new_path;
    }else{
      $new_path="no data";
    }
echo '
<li class="nav-item">
    <a class="nav-link active" href="?atc=single-post&id='.$kq['id'].'&idLoaiTin='.$kq['idLoaiTin'].'">
        <!-- Single Blog Post -->
        <div class="single-blog-post style-2 d-flex align-items-center">
            <div class="post-thumbnail">
                <img src="'.$new_path.'" alt="">
            </div>
            <div class="post-content">
                <h6 class="post-title">'.$kq['TieuDe'].'</h6>
                <div class="post-meta d-flex justify-content-between">
                    <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                    <span><i class="fa fa-eye" aria-hidden="true"></i> '.$kq['SoLuotXem'].' </span>
                   
                </div>
            </div>
        </div>
    </a>
</li>';
}
?>

                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trending-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>ĐANG ĐƯỢC QUAN TÂM</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Blog Post -->
                <?php 
                $dssp = $news->getSee();

                foreach ($dssp as $kq) {
                    
                    extract($kq);
                    $new_path = "../view/upload/".$kq['Hinh'];
                    if(is_file($new_path)){
                      $new_path=$new_path;
                    }else{
                      $new_path="no data";
                    }

                    echo ' <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="'.$new_path.'" alt="" style="height:220px!important;width:100%;">
                            <!-- Video Duration -->
                            <span class="video-duration">'.$kq['SoLuotXem'].'</span>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata cata-sm cata-success">'.$kq['Ten'].'</a>
                            <a href="single-post.html" class="post-title">'.$kq['TieuDe'].'</a>
                            <div class="post-meta d-flex">
                              '.$kq['TomTat'].'
                            </div>
                        </div>
                    </div>
                </div>
';
                    }
                ?>
                <!-- Single Blog Post -->
                
            </div>

        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4> Tin Mới</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <div class="featured-post-slides owl-carousel mb-30">
                            <!-- Single Feature Post -->
                        <?php 
                        $dssp = $news->getNews(0,2);

                        foreach ($dssp as $kq) {
                           
                            extract($kq);
                            $new_path = "../view/upload/".$kq['Hinh'];
                            if(is_file($new_path)){
                              $new_path=$new_path;
                            }else{
                              $new_path="no data";
                            }
                       echo '
                       <!-- Single Feature Post -->
                       <div class="single-feature-post video-post bg-img" style="background-image: url('.$new_path.');">
                           <!-- Play Button -->
                           

                           <!-- Post Content -->
                           <div class="post-content">
                               <a href="#" class="post-cata">'.$kq['Ten'].'</a>
                               <a href="?atc=single-post&id='.$kq['id'].'" class="post-title">'.$kq['TieuDe'].'</a>
                               <div class="post-meta d-flex">
                                   <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                   <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> '.$kq['SoLuotXem'].'</a>
                                  
                               </div>
                           </div>

                
                       </div>';
                        }
                        ?> 
                        </div>

                        <div class="row">
                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-post-area mb-80">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/12.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">20</span>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                        <a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminste Bridge</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-post-area mb-80">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/13.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">20</span>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                        <a href="single-post.html" class="post-title">Love Island star's boyfriend found dead after her funeral</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $news = new Catalog();
                      
                        //$id_category = $_GET['idLoaiTin'];
                        $id = 30; // the thao 
                        $tin = $news->getCateById($id);
                      //  var_dump($tin);
                       extract($tin);
                       
                        ?>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <!-- Section Heading -->
                                <div class="section-heading style-2">
                                  <a href="?atc=archive&idcate=<?php echo $tin['idLoaiTin'] ?>">  <h4><?php echo $tin['Ten'] ?></h4></a>
                                    <div class="line"></div>
                                </div>

                                <!-- Sports Video Slides -->
                                <div class="sport-video-slides owl-carousel mb-50">
                                    <!-- Single Blog Post -->
                                  <?php 
                                    $news = new News();
                                     //$id_category = $_GET['idLoaiTin'];
                                    
                                    $tin = $news->getNewsTheThao();
                                   foreach ($tin as $kq) {
                                        extract($kq);
                    
                                    $new_path = "../view/upload/".$kq['Hinh'];
                                    if(is_file($new_path)){
                                      $new_path=$new_path;
                                    }else{
                                      $new_path="no data";
                                    }
                                    echo ' <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="'.$new_path.'" alt="">

                                        <!-- Video Duration -->
                                      
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="?atc=archive&idcate='.$kq['idLoaiTin'].'" class="post-cata cata-sm cata-success">'.$kq['Ten'].'</a>
                                        <a href="?atc=single-post&id='.$kq['id'].'" class="post-title">'.$kq['TieuDe'].'</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true">'.$kq['SoLuotXem'].'</i></a>
                                         
                                        </div>
                                    </div>
                                </div>';
                                }
                                  ?>

                                    <!-- Single Blog Post -->
                                   
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- Section Heading -->
                                <?php 
                        $news = new Catalog();
                      
                        //$id_category = $_GET['idLoaiTin'];
                        $id = 29; // dautu
                        $tin = $news->getCateById($id);
                      //  var_dump($tin);
                       extract($tin);
                       
                        ?>
                                <div class="section-heading style-2">
                                   <a href="?atc=archive&idcate=<?php echo $tin['idLoaiTin'] ?>"> <h4><?php echo $tin['Ten'] ?></h4></a>
                                    <div class="line"></div>
                                </div>

                                <!-- Business Video Slides -->
                                <div class="business-video-slides owl-carousel mb-50">
                                    <!-- Single Blog Post -->
                                    <?php 
                                    $news = new News();
                                     //$id_category = $_GET['idLoaiTin'];
                                    
                                    $tin = $news->getNewsDauTu();
                                   foreach ($tin as $kq) {
                                        extract($kq);
                    
                                    $new_path = "../view/upload/".$kq['Hinh'];
                                    if(is_file($new_path)){
                                      $new_path=$new_path;
                                    }else{
                                      $new_path="no data";
                                    }
                                    echo ' <div class="single-post-area">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="'.$new_path.'" alt="">

                                        <!-- Video Duration -->
                                      
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="?atc=archive&idcate='.$kq['idLoaiTin'].'" class="post-cata cata-sm cata-success">'.$kq['Ten'].'</a>
                                        <a href="?atc=single-post&id='.$kq['id'].'" class="post-title">'.$kq['TieuDe'].'</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true">'.$kq['SoLuotXem'].'</i></a>
                                         
                                        </div>
                                    </div>
                                </div>';
                                }
                                  ?>
                                    

                                    <!-- Single Blog Post -->
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row mb-30">
                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/16.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Epileptic boy's cannabis let through border</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/18.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Paramedics 'drilled into boat death woman'</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/19.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Tory vice-chairs quit over PM's Brexit plan</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/20.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Do This One Simple Action for an Absolutely</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>Tin thời sự</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <div class="featured-post-slides owl-carousel mb-30">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(assets/img/bg-img/14.jpg);">
                                <!-- Play Button -->
                                

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">20</span>
                            </div>

                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(assets/img/bg-img/7.jpg);">
                                <!-- Play Button -->
                                

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">20</span>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/21.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">20</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                        <a href="single-post.html" class="post-title mb-2">May fights on after Johnson savages Brexit approach</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By Jane</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">Sep 08, 2018</a>
                                        </div>
                                        <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/22.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">20</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                        <a href="single-post.html" class="post-title mb-2">Thailand cave rescue: Boys 'doing well' after spending night</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By Jane</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">Sep 08, 2018</a>
                                        </div>
                                        <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/23.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">20</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                        <a href="single-post.html" class="post-title mb-2">Theresa May battles Brexiteer backlash amid disquiet</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By Jane</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">Sep 08, 2018</a>
                                        </div>
                                        <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/24.jpg" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">20</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                        <a href="single-post.html" class="post-title mb-2">Theresa May warned Brexit strategy 'risks putting Jeremy Corbyn</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By Jane</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">Sep 08, 2018</a>
                                        </div>
                                        <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Latest Video</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/13.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">20</span>
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                    <a href="single-post.html" class="post-title">Full article Prince Charles's 'urgent' global research</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 33</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 26</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/35.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 11</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 21</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget add-widget mb-50">
                            <a href="#"><img src="assets/img/bg-img/add.png" alt=""></a>
                        </div>

                        <!-- ***** Sidebar Widget ***** -->
                        <div class="single-widget youtube-channel-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Hot Channels</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="assets/img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Music Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="assets/img/bg-img/26.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Trending Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="assets/img/bg-img/27.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Travel Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="assets/img/bg-img/28.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Sport Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="assets/img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">TV Show Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget newsletter-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Newsletter</h4>
                                <div class="line"></div>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <!-- Newsletter Form -->
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
                                    <button type="submit" class="btn vizew-btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Most Viewed Playlist</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/36.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Sweet Yummy Chocolate in the</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/37.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="assets/img/bg-img/38.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- ##### Vizew Psot Area End ##### -->
	<?php include "footer.php" ?>
