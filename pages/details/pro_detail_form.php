<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1" />
 <title> Zay Shop || Detail </title>
   <!-- Favicon Link -->
  <link rel="shortcut icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/zay/img/favicon.ico">
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Reset Css Link -->
  <link rel="stylesheet" href="/zay/css/reset.css">
  <!-- Main Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/style.css">
  <!-- Media Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/media.css">
</head>
<body>
 <div class="wrap">

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

  <section class="pro_insert">
   <div class="center">
    <div class="detail_contents">

    <?php
      $pro_idx = $_GET['pro_idx'];
      include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
      $sql = "SELECT * FROM zay_pro WHERE ZAY_pro_idx='{$pro_idx}'";
      $detail_result= mysqli_query($dbConn,$sql);
      $detail_row = mysqli_fetch_array($detail_result);

      $detail_img1 = $detail_row['ZAY_pro_img_01'];
      $detail_img2 = $detail_row['ZAY_pro_img_02'];
      $detail_tit = $detail_row['ZAY_pro_name'];
      $detail_pri = $detail_row['ZAY_pro_pri'];
      $detail_desc = $detail_row['ZAY_pro_desc'];
      $detail_color = $detail_row['ZAY_pro_color'];
      $detail_bran = $detail_row['ZAY_pro_bran'];
    ?>
     <div class="detail_img">
       <img src="/zay/data/product_imgs/<?=$detail_img1?>" alt="">
       <img src="/zay/data/product_imgs/<?=$detail_img2?>" alt="">
       <div class="detail_tab_btns">
        <span><img src="/zay/data/product_imgs/<?=$detail_img1?>" alt=""></span>
        <span><img src="/zay/data/product_imgs/<?=$detail_img2?>" alt=""></span>
       </div>
     </div>
     <div class="detail_txt">
       <div class="detail_wrap">
         <div class="detail_top">
           <h2><?=$detail_tit?></h2>
           <p><span><i class="fa fa-krw"></i><?=$detail_pri?></span></p>
           <div class="detail_like">
            <div class="like_unlike">
             <span>좋아요 | <b> 20 </b></span>
             <span>별로에요 | <b>11 </b> </span>
            </div>
            <p class="gray">Brands : <?=$detail_bran?></p>
            <div class="detail_desc">
             <h3>상품설명</h3>
             <p> 딘딘과 민경훈은 오는 19일 록발라드 곡을 발매할 예정이다. 14일 엑스포츠뉴스 취재 결과, 딘딘과 민경훈은 오는 19일 록발라드 곡을 발매할 예정이다. 딘딘과 민경훈은 지난해 우주힙쟁이(김희철, 민경훈) 작업으로 함께한 바 있다.</p>
            </div>
            <p class="gray">Available Color: White/ Black</p>
          </div>
          <!-- End of detail_like -->
         </div>
         

         <div class="size_quan">
           <div class="size">
            <p>Size:
             <span>S</span>
             <span>M</span>
             <span>L</span>
             <span>XL</span>
            </p>
            <p>Quality
             <span>-</span>
             <b>1</b>
             <span>+</span>
            </p>
           </div>
            <div class="detail_btns">
             <button type="button">BUY NOW</button>
             <button type="button">ADD TO CART</button>
            </div>
         </div>
        <!-- End of size_quantity -->
      </div>
      </div>
    </div>
    <!-- End of detail Contents -->
   </div>
  </section>
  
  <section class="comments">
   <div class="center">
    <div class="comments_tit">
     <span>상품평: </span>
     <span><em>15</em> Comments</span>
    </div>
    <div class="comment_insert">
      <form action="#" method="post" name="comment_form">
        <textarea type="text" placeholder="상품평을 입력해 주세요." 
        name="comment_txt"> </textarea>
        <button type="button">입력</button>
      </form>
    </div>
    <div class="comment_contents">
      <!--Loop Comments-->
      <div class="loop_contents">
        <div class="comments_tit">
          <span>mjmjpc</span>
          <span>2021-07-16 14:36:15</span>
        </div>
        <div class="comments_text">
          <span class="txt"> 
            <em>상품이 별로에요. 배송도 느려요.</em> 
          </span>
          <span class="comment_btns">
          <button type="button">수정</button>
          <button type="button">삭제</button>
          </span>
        </div>
      </div>
      <!--End of Loop Comments-->
      <!--Loop Comments-->
      <div class="loop_contents">
        <div class="comments_tit">
          <span>pink12</span>
          <span>2021-07-16 14:36:15</span>
        </div>
        <div class="comments_text">
          <span class="txt"> 
            <em>상품이 멋있어요.</em> 
          </span>
          <span class="comment_btns">
            <button type="button">수정</button>
            <button type="button">삭제</button>
          </span>
        </div>
      </div>
      <!--End of Loop Comments-->
    </div>
   </div>
  </section>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php";?>

 </div>
  <!--jQuery Framework Load-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="/zay/js/jq.main.js"></script>
 
</body>
</html>

