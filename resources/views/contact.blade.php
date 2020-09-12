@extends('layouts.app')
@section('content')
@include('layouts.breadcrumbs' , ['name' => 'اتصل بنا'])
<div class="contact page-content">
    <div class="elementor-container">
        <div class="contact__img">
            <img src="{{App\StaticHtml::where('key' , 'about')->first()->image}}" alt="صورة لفريق العمل">
        </div>
    </div>
    <div class="contact__mid">
        <div class="elementor-container">
           <div class="contact__wrapper">
                <div class="contact__form">
                    <div class="title">
                        <h3>تواصل معنا</h3>
                    </div>
                    <form action="">
                        <div class="input">
                            <input type="text" placeholder="الاسم">
                        </div>
                        <div class="input">
                            <input type="text" placeholder="البريد الالكتروني">
                        </div>
                        <div class="input">
                            <input type="text" placeholder="الهاتف">
                        </div>
                        <div class="input">
                            <textarea placeholder="الرسالة"></textarea>
                        </div>
                        <div class="input">
                            <button type="submit">متابعة</button>
                        </div>
                    </form>
                </div>
                <div class="contact__data">
                    <div class="data-wrapper">
                        <h2>معلومات التواصل</h2>
                        <address>
                                {{App\StaticHtml::where('key' , 'address')->first()->value}}
                        </address>
                        <div class="contacts">
                            <div>
                                <a
                                class="tel"
                                href="tel:{{App\StaticHtml::where('key' , 'phone')->first()->value}}"
                                ><i class="fas fa-phone"></i>{{App\StaticHtml::where('key' , 'phone')->first()->value}}
                                </a>
                            </div>
                            <div>
                                <a
                                class="tel"
                                href="{{App\StaticHtml::where('key' , 'phone')->first()->value}}"
                                ><i class="fas fa-fax"></i>{{App\StaticHtml::where('key' , 'land_phone')->first()->value}}
                                </a>
                            </div>
                            <div>
                                <a
                                class="tel"
                                href="mailto:{{App\StaticHtml::where('key' , 'email')->first()->value}}"
                                ><i class="fas fa-envelope"></i>{{App\StaticHtml::where('key' , 'email')->first()->value}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="contact__bottom">
        <div class="elementor-container">
            <div class="title">
                <h2>موقعنا علي الخريطة</h2>
            </div>
            <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.591277759547!2d31.335317050759063!3d30.077248123887923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e10d1b6ff3d%3A0xae2d0966bd3141ba!2z2KfZhNix2YLYp9io2Kkg2KfZhNin2K_Yp9ix2YrYqQ!5e0!3m2!1sen!2seg!4v1577792520669!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
@endsection