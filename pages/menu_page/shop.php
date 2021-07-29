<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1" />
 <title> Zay Shop || Products </title>
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
 <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

 <section class="shop">
   <div class="center">
     <div class="tit_box">
       <h2>Our Products</h2>
       <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est laborum.</p>
     </div>

     <div class="shop_btns">
       <div class="tabs">
        <a href="?key=all" class="active">전체보기</a>
        <a href="?key=watches">시계</a>
        <a href="?key=shoes">신발</a>
        <a href="?key=accessories">액세서리</a>
       </div>
       <div class="filters">
         <div class="filter_tabs">
           <select onchange="location.href=this.value">
             <option selected disable value=""id="select">검색조건</option>
             <option value="?key=new">새상품순</option>
             <option value="?key=like">좋아요순</option>
             <option value="?key=price">가격순</option>
           </select>
         </div>
         <form action="/zay/pages/menu_page/shop_search_result.php" name="pro_search_form">
          <div class="search">
           <input type="text" placeholder="상품명 검색" name="pro_search">
           <button type="button"id="search_btn"><i class="fa fa-search"></i></button>
          </div>
          </form>
       </div>
     </div> <!--End of shop btns-->
     
     <div class="featured_box">
      <?php include $_SERVER['DOCUMENT_ROOT']."/zay/data/sort/category_sort.php"?>
     </div>
     <div class="load_more">
        <button type="button">더보기</button>
     </div>
    </div>
   </div>
 </section>


 <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php";?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="/zay/js/jq.like.unlike.js"></script>
 <script src="/zay/js/jq.main.js"></script>
 <script>
   const pathName = window.location.href;
  //  console.log(pathName);

  const btns= document.querySelectorAll('.shop .shop_btns a');
  const filterSelect= document.querySelector('#select')
  // console.log(btns);
  const btnsArr = ['all','watches','shoes','accessories'];
  const filterEng = ['new','like','price'];
  const filterKor = ['새상품순','좋아요순','가격순'];

  for(let i=0; i<btnsArr.length;i++){
    btns[i].classList.remove('active');
    if(pathName.includes(btnsArr[i])){
      btns[i].classList.add('active');
    }
  }

  for(let i=0; i<filterEng.length;i++){
    if(pathName.includes(filterEng[i])){
      filterSelect.innerText=filterKor[i];
    }
  }
    function plzLogin(){
      alert('로그인 후 이용해 주세요.');
      return false; //로그인 창으로 뜨게 설정해도됨 location.href();
    }

    document.querySelector("#search_btn").onclick=function(){
      if(!document.pro_search_form.pro_search.value){
        alert('상품명을 입력해주세요');
        document.pro_search_form.pro_search.focus();
        return;
      }
      document.pro_search_form.submit();
    }
 </script>
</body>
</html>

