
<div class="blog-carousel-1">
  
</div>
<?php get_template_part('parts/slider'); ?>
<div class="row">
</div>
        <!--controls-->
        <nav class="navbar">
          <h3>Our Products</h3>
          <ul style="float:right;">
            <li style="list-style-type:none;">
              <a class="carousel-control-prev" id="products-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" id="products-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="carousel-inner row w-100 mx-auto">
        <div class="carousel-item col-md-3 active">
          <div class="card">
            <img class="card-img-top" src="images/thumb-1.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">12KV Switchgear</p>
            </div>
          </div>
        </div>

        <div class="carousel-item col-md-3">
          <div class="card">
            <img class="card-img-top" src="images/thum-2.png" alt="Second slide">
            <div class="card-body">
              <p class="card-text">36KV Switchgear</p>
            </div>
          </div>
        </div>

        <div class="carousel-item col-md-3 ">
          <div class="card">
            <img class="card-img-top" src="images/thum-3.png" alt="Third slide">
            <div class="card-body">
              <p class="card-text">Ring Main Equipment</p>
            </div>
          </div>
        </div>

        <div class="carousel-item col-md-3 ">
          <div class="card">
            <img class="card-img-top" src="images/thumb-4.png" alt="forth slide">
            <div class="card-body">
              <p class="card-text">Compact Substation</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid">
      <!--news & testimonials section-->
      <div class="row" id="news-test">

        <div class="col-lg-10" style="margin-right:-100px;">
          <!--News-->

          <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false" style="margin-right:66px;">
            <div class="container" style="padding:0px;margin-left:0px;">
              <div class="container position-relative">
                <ol class="carousel-indicators" id="news1">
                  <li data-target="myCarousel2" data-slide-to="0" class="active">
                    <span class="oi oi-minus"></span></li>
                  <li data-target="myCarousel2" data-slide-to="1">
                    <span class="oi oi-minus"></span></li>
                  <li data-target="myCarousel2" data-slide-to="2">
                    <span class="oi oi-minus"></span></li>
                  <li data-target="myCarousel2" data-slide-to="3">
                    <span class="oi oi-minus"></span></li>
                  <li data-target="myCarousel2" data-slide-to="4">
                    <span class="oi oi-minus"></span></li>


                </ol>
              </div>
              <!--controls-->
              <nav class="navbar" style="margin:0px;border-bottom:20px;">
                <p style="17pt;">Latest News</p>
                <ul style="float:right;">
                  <li style="list-style-type:none;">
                    <a class="carousel-control-prev" id="news-prev" href="#myCarousel2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" id="news-next" href="#myCarousel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="row w-100 mx-auto" style="height: 430px;">
              <div class="carousel-inner" style="display:flex;">
                <div class="carousel-item col-md-4 active news">
                  <div class="card">
                    <img class="card-img-top" src="images/thumb-5.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title();?>Standard chunk of Lorem Ipusum used since 1500s</h5>
                      <p class="text-muted"><?php the_date();?>date</p>
                      <p class="card-text">Contrary to popular beleif, Lorem Ipsum is not siply randum text. The roots are dated from. </p>
                      <a href="#" class="btn visible go">Read more...</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item col-md-4 news">
                  <div class="card">
                    <img class="card-img-top" src="images/thumb-6.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title();?>Standard chunk of Lorem Ipusum used since 1500s</h5>
                      <p class="text-muted"><?php the_date();?>date</p>
                      <p class="card-text">Contrary to popular beleif, Lorem Ipsum is not siply randum text. The roots are dated from. </p>
                      <a href="#" class="btn visible go">Read more...</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item col-md-4 news">
                  <div class="card">
                    <img class="card-img-top" src="images/thumb-7.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title();?>Standard chunk of Lorem Ipusum used since 1500s</h5>
                      <p class="text-muted"><?php the_date();?>date</p>
                      <p class="card-text">Contrary to popular beleif, Lorem Ipsum is not siply randum text. The roots are dated from. </p>
                      <a href="#" class="btn visible go">Read more...</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item col-md-4 news">
                  <div class="card">
                    <img class="card-img-top" src="images/thumb-6.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title();?>Standard chunk of Lorem Ipusum used since 1500s</h5>
                      <p class="text-muted"><?php the_date();?>date</p>
                      <p class="card-text">Contrary to popular beleif, Lorem Ipsum is not siply randum text. The roots are dated from. </p>
                      <a href="#" class="btn visible go">Read more...</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item col-md-4 news">
                  <div class="card">
                    <img class="card-img-top" src="images/thumb-5.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title();?>Standard chunk of Lorem Ipusum used since 1500s</h5>
                      <p class="text-muted"><?php the_date();?>date</p>
                      <p class="card-text">Contrary to popular beleif, Lorem Ipsum is not siply randum text. The roots are dated from. </p>
                      <a href="#" class="btn visible go">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php the_content();?>
        </div>
