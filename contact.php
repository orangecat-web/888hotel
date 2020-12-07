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
        <h1 class="px-3">聯絡我們<span>contact</span></h1>
    </div>

    <div class="contactIntro">
        <p>888hotel一直秉持著優質的住宿體驗及專業的服務為理念，如您對於888hotel有任何建議及意見，請留下您寶貴的建言，
我們收到後將會儘快與您聯絡！</p>
    </div>

    <!--contact form-->
    <form action="" class="col-md-8 mx-auto">
        <dl class="contact">
            <dd class="d-sm-flex justify-content-sm-start align-items-center">
                <label for=""><sup>*</sup>姓名</label>
                <input type="text" name="" required>
                <span class="col-auto"><input type="radio" name="">先生</span>
                <span class="col-auto"><input type="radio" name="">小姐</span>
            </dd>
            <dd class="d-sm-flex justify-content-sm-start align-items-center">
                <label for=""><sup>*</sup>連絡電話</label>
                <input type="tel" name="" required>
            </dd>
            <dd class="d-sm-flex justify-content-sm-start align-items-center">
                <label for="">電子信箱</label>
                <input type="email" name="">
            </dd>
            <dd class="d-sm-flex justify-content-sm-start align-items-center">
                <label for="">地址</label>
                <input type="text" name="">
            </dd>
            <dd class="d-sm-flex justify-content-sm-start align-items-center">
                <label for="" class="align-self-start">內容</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </dd>
            <dd class="d-sm-flex justify-content-sm-start align-items-center">
                <label for="code"><sup>*</sup>驗證碼</label>
                <input type="text" name="code" class="col-3">
                <img src="imgcode/securimage_show.png" alt="">
                <span class="col-auto">換一張</span>
            </dd>
            <dd class="d-sm-flex justify-content-sm-center align-items-center">
                <button type="reset">重新填寫</button>
                <button type="submit">確認送出</button>
            </dd>
        </dl>
    </form>
</section>

<?php include("footer.php")?>

</body>
</html>