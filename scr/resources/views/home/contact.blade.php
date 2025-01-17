@extends('home.master')

@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('/template/home/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <p class="breadcrumbs mb-0">
                    <span class="mr-3">
                        <a href="/">Trang chủ
                            <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                    <span>Liên hệ</span>
                </p>
                <h1 class="mb-3 bread">Liên hệ</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <!-- Thêm phần Google Map Embed -->
        <div class="row mb-5">
            <div class="col-md-12">
                <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.126136735588!2d106.3465193!3d9.9234516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0175ea296facb%3A0x55ded92e29068221!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBUcsOgIFZpbmg!5e0!3m2!1svi!2s!4v1704723012660!5m2!1svi!2s"
        width="1100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Liên hệ </h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Địa chỉ:</span> 126 Nguyễn Thiện Thành, Khóm 4, Phường 5, Tp.Trà Vinh</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://1234567920">+84 382 533 858</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">kimthisophi1101@gmail.com</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Website</span> <a href="#">Job24h.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-12 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
