<?php  include "header.php";
?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive List Posts Area Start ##### -->
    <div class="vizew-archive-list-posts-area mb-80">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Archive Catagory & View Options -->
                    <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><i class="fa fa-music" aria-hidden="true"></i> <div class="col-md-12">
                <h4><?php if ($search_page == null) {
        
        echo $note_false = "Không tìm thấy kết quả tìm kím phù hợp với từ khóa " ."'$search'";
       
      }
      else {
     //  print_r($search_page);
       echo $note_true = "Kết quả tìm kím phù hợp với từ khóa "."'$search'";
      }
        ?></h4>
                    
                </div> </h4>
                        </div>
                        <!-- View Options -->
                        <div class="view-options">
                            <a href="archive-grid.html"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="archive-list.html" class="active"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                        </div>
                    </div>


                    <!-- Single Post Area -->
                    <?php 

                    
foreach ($search_page as $kq) {
    
   // extract($kq);
    $new_path = "../view/upload/".$kq['Hinh'];
    if(is_file($new_path)){
      $new_path=$new_path;
    }else{
      $new_path="no data";
    }
    echo '<div class="single-post-area style-2">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <!-- Post Thumbnail -->
            <div class="post-thumbnail">
                <img src="'.$new_path.'" alt="">

                <!-- Video Duration -->
                <span class="video-duration">05.03</span>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <!-- Post Content -->
            <div class="post-content mt-0">
                <a href="?atc=archive&idcate='.$kq['idLoaiTin'].'" class="post-cata cata-sm cata-success">'.$kq['Ten'].'</a>
                <a href="single-post.html" class="post-title mb-2">'.$kq['TieuDe'].'</a>
                <div class="post-meta d-flex align-items-center mb-2">
                    <i class="fa fa-circle" aria-hidden="true"></i>
                    <a href="#" class="post-date">'.$kq['date_created'].'</a>
                </div>
                <p class="mb-2">'.$kq['TomTat'].'</p>
                <div class="post-meta d-flex">
                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> ' .$kq['SoLuotXem'] .' </a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
';
}
?>

                    <!-- Single Post Area -->
                   
                    

                    <!-- Pagination -->
                    <nav class="mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
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
                                    <img src="img/bg-img/13.jpg" alt="">

                                    <!-- Video Duration -->
                                    <span class="video-duration">05.03</span>
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                    <a href="single-post.html" class="post-title">Full article Prince Charles's 'urgent' global research</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"> 22</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                        <a href="#"> 23</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 33</a>
                                        <a href="#"> 26</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/35.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 11</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"> 21</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget add-widget mb-50">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
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
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Music Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/26.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Trending Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/27.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Travel Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/28.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Sport Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/29.jpg" alt="">
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
                        <div class="single-widget">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Most Viewed Playlist</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/36.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Sweet Yummy Chocolate in the</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/37.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/38.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive List Posts Area End ##### -->
<?php  include "footer.php" ?>