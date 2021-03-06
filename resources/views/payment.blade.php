<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/paymentSlyte.css">
</head>

<body>
    <div class="body-bg">
        <div class="bg">
            <div class="header-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg text-white">
                        <a class="navbar-brand" href="http://127.0.0.1:8000/home" style="padding-top: 0 !important;"><img src="/img/logo.svg" style="width: 60%;" alt=""></a>
                        <div style="width: 10rem;"></div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto text-capitalize">
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/home">trang chủ<span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/events">sự kiện</a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/contact">liên hệ</a>
                                </li>
                        </div>
                        <div class="header-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <a class="text-white" href="">0123456789</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="pb-5">
                <div class="article-top">
                    <div class="container">
                        <div class="row">
                            <div class="article-top-left col-sm-5 mx-auto">
                                <img class="article-left-1" src="/img/Thanh toán.svg" alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-main mt-5">
                    <div class="container">
                        <form class="row" method="post" action="/orders-save" style="padding-right: 0;" enctype="multipart/form-data">
                            <div class="col-sm-7">
                                <div class="article-middle-bg-1 px-3 py-2">
                                
                                    <div class="article-middle-dashed-1 px-4 py-3">
                                        <img class="article-middle-2" src="/img/thongtingiadinh.svg" alt="">
                                        <img class="article-middle-5" src="/img/Trini_Arnold_Votay1 2.svg" alt="">
                                        @if(Session::has('id'))
                                            <input type="hidden" name="id" value="{{Session::get('id')}}">
                                        @endif
                                        <div class="form-row d-flex my-2 mx-3">
                                            <div class="form-group col-md-4">
                                                <label class="text-dark pb-2" name="option" for="exampleFormControlSelect1">Số tiền thanh toán</label>
                                                <input type="text" class="form-control" id="inputEmail4"  value="{{number_format(Session::get('amount')*Session::get('price'))}} VND">
                                        
                                            </div>
                                            <div class="form-group mx-3 col-md-3">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Số lượng vé</label>
                                                <div class="d-flex">
                                                    <input type="number" min="1" value="{{Session::get('amount')}}" class="form-control" id="inputDate" placeholder="7">
                                                    <span class="text-dark" style="line-height:30px; padding-left:5px ;">Vé</span>
                                                </div>
                                        
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="text-dark pb-2" for="exampleFormControlSelect1">Ngày sử dụng</label>
                                                <input type="date" class="form-control date" id="inputDate" placeholder="Ngày sử dụng" style="padding: 0 !important;" value="{{Session::get('date')}}" format="DD/MM/YYYY">
                                            
                                            </div>
                                        </div>
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Thông tin liên hệ</label>
                                            <input type="text" class="form-control" id="inputAddress" value="{{Session::get('name')}}">
                                        
                                        </div>
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Điện thoại</label>
                                            <input type="text" class="form-control" id="inputAddress2" value="{{Session::get('phone')}}">
                                        
                                        </div>
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Email</label>
                                            <input type="email" class="form-control" id="inputAddress2" value="{{Session::get('email')}}">
                                        
                                        </div>
                                        <div style="height:60px"></div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-sm-5">
                                <img class="article-middle-4" src="/img/Vector-cycle.svg" alt="">
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2">
                                        <img class="article-middle-3" src="/img/thongtinthanhtoan.svg" alt="">
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Số thẻ</label>
                                            <input type="text" class="form-control" name="number" id="inputAddress" placeholder="123 456 789">
                                            @error('number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Họ tên chủ thẻ</label>
                                            <input type="text" class="form-control" id="inputAddress" name="ten" placeholder="NGUYEN VAN A">
                                            @error('ten')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-9 my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">Ngày hết hạn</label>
                                            <div class="date-wrap">
                                                <input type="date" class="form-control form-hihi p-0" name="ngay" id="inputDate" placeholder="Ngày sử dụng" format="DD/MM/YYYY">
                                            </div>
                                            @error('ngay')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3 my-2 mx-3">
                                            <label class="text-dark pb-2" for="exampleFormControlSelect1">CVV/CVC</label>
                                            <input type="number" min="1" class="form-control" name="CVV" id="inputAddress2" placeholder="...">
                                            @error('CVV')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn">
                                            <img src="/img/thanhtoan.svg" style="width: 80%;" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("#formPayment").addEventListener("submit", function(e) {
        
            e.preventDefault();
            window.location.replace('payment-success.html');
        });
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.js"></script>
</body>

</html>