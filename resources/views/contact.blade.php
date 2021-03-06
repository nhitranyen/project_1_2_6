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
    <link rel="stylesheet" href="./css/contactSlyte.css">
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
                                <li class="nav-item active mx-4">
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
                            <div class="article-top-left col-sm-3 mx-auto">
                                <img class="article-left-1" src="/img/Liên hệ.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-main m-4">
                    <div class="container">
                        <div class="row">
                                <div class="col-sm-7">
                                    <form action="/send-mail" method="get" enctype="multipart/form-data">
                                        <div class="article-middle-bg-1 px-3 py-2">
                                            <div class="article-middle-dashed-1 px-4 py-3">
                                                <p class="text-dark my-1 mx-3" style="text-align: justify;">
                                                    Chúng tôi sẽ trả lời cho bạn qua địa chỉ email hoặc số điện thoại bạn để lại.
                                                    Chúng tôi cam kết giữ kín thông tin cá nhân của khách hàng.
                                                </p>
                                                <img class="article-middle-5" src="/img/Alex_AR_Lay_Do shadow 1.svg" alt="">
        
                                                <div class="form-row d-flex my-3 mx-3">
                                                    <div class="form-group col-md-5" style="margin-right:1.5rem;">
                                                        <input type="text"  value="{{old('name')}}" name="name" class="form-control" id="inputEmail4" placeholder="Tên">
                                                        @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mx-3 col-md-6">
                                                        <input type="email" value="{{old('email')}}" name="email"  class="form-control" id="inputDate" placeholder="Mail">
                                                        @error('email')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row d-flex my-3 mx-3">
                                                    <div class="form-group col-md-5" style="margin-right:1.5rem;">
                                                        <input type="tel" value="{{old('phone')}}" name="phone"  class="form-control" id="inputEmail4" placeholder="Số điện thoại">
                                                        @error('phone')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mx-3 col-md-6">
                                                        <input type="text" value="{{old('address')}}" name="address"  min="1" class="form-control" id="inputDate" placeholder="Địa chỉ">
                                                        @error('address')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mx-3">
                                                    <textarea class="col-md-12 p-2 form-control" value="{{old('comment')}}" name="comment" class="form-control" name="" id="" rows="2">Lời nhắn</textarea>
                                                    @error('comment')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn" style="margin-left: 4rem;">
                                                    <img src="/img/gui-lien-he.svg" style="width: 80%;" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <div class="col-sm-5">
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2 d-flex p-3">
                                        <img class="article-middle-3" src="/img/adress 1.svg" alt="">
                                        <div class="card-text text-dark" style="padding: 0 10px;">
                                            <h4>Địa chỉ</h4>
                                            <p>86/33 Âu Cơ, F 9,Q Tân Bình, TP Hồ Chí Minh</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="article-middle-bg-2 px-3 py-2 my-3">
                                    <div class="article-middle-dashed-2 d-flex p-3">
                                        <img class="article-middle-3" src="/img/mail-inbox-app 1.svg" alt="">
                                        <div class="card-text text-dark" style="padding: 0 10px;">
                                            <h4>Email</h4>
                                            <p>investigate@your-site.com</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2 d-flex p-3">
                                        <img class="article-middle-3" src="/img/phone.svg" alt="">
                                        <div class="card-text text-dark" style="padding: 0 10px;">
                                            <h4>Điện thoại</h4>
                                            <p>+84 145 689 798</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="messenger" id="mess">
                        <div class="alert bg-light text-dark col-sm-3">
                            <span class="closebtn text-danger h2" style="float: right;cursor: pointer;" onclick="offMess()">&times;</span> 
                            <br>
                            <h5>Gửi liên hệ thành công</h5>
                            <p class="pb-4">Chúng tôi sẽ phản hồi bạn sớm nhất có thể.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/mess.js"></script> -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.js"></script>
</body>

</html>