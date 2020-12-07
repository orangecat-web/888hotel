<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner">
    <img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container row mx-auto px-0 py-5">
    <div class="col-12 title">
        <h1 class="px-3">最新資訊<span>news</span></h1>
    </div>
    <!-- 左側 nav -->
    <aside class="col-md-3">
        <nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu asideNav">
            <button class="navbar-toggler w-100" type="button" data-toggle="collapse" data-target="#navbarNavAside" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                最新資訊
            </button>
            <div class="collapse navbar-collapse asideNav" id="navbarNavAside">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a active class="nav-link" href="news.php">優惠訊息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">公告訊息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">媒體報導</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <!-- right content -->
    <section class="col-md-9">
        <div class="pTitle"><h2>優惠訊息</h2></div>
        <dl class="newsList container row mx-auto px-0">
            <!--start-->
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <!--end-->
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-md-4 col-6">
                <figure class="news" onclick="location.href='news_detail.php'">
                    <p class="d-flex justify-content-center align-items-center"><img src="upload/img-news.jpg" alt=""></p>
                    <figcaption>
                        <p>2018-06-14</p>
                        <h4>消息標題文字消息標題文字消息標題文字消息標題文字</h4>
                    </figcaption>
                </figure>
            </dd>
            <dd class="col-12">
                <!--pagination-->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </dd>
        </dl>
    </section>
</section>


<?php include("footer.php")?>

</body>
</html>