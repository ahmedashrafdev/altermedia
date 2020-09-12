@php

$featuredCats = App\Category::where('featured' , true)->orderBy('order')->get();

@endphp

<div class="main-navbar">
    <div class="container">
        <div class="wrapper">
            <div class="left-wrapper">
                <nav class="nav" ref="nav">
                    <div class="mobile-search-input">
                        <div class="search-field">
                        <input
                            placeholder="بحث ..."
                            type="text"
                        >
                        <svg
                            width="24"
                            height="24"
                            xmlns="http://www.w3.org/2000/svg"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                        >
                            <path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" /></svg>
                        </div>
                    </div>
                    <div class="mobile-close" @click.prevent="toggleNav()">
                        <i class="fas fa-times"></i>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item home">
                            <a
                                href="/"
                                class="nav__item--link"
                            >
                                الرئيسية
                            </a>
                        </li>
                        <li class="nav__item about">
                            <a
                                href="/about"
                                class="nav__item--link"
                            >
                                من نحن
                            </a>
                        </li>
                        {{-- remember to put has-dropdown class to enable icon --}}
                        @foreach($featuredCats as $cat)
                        <li class="nav__item">
                            <a
                        href="{{route('posts' , ['category' => $cat->slug])}}"
                                class="nav__item--link "
                            >
                                {{$cat->name}}
                            </a>
                        </li>
                        @endforeach
                        <li class="nav__item">
                            <a
                                href="/videos"
                                class="nav__item--link"
                            >
                                فيديوهات
                            </a>
                        </li>
                        <li class="nav__item articles">
                            <a
                                href="/articles"
                                class="nav__item--link"
                            >
                                المقالات
                            </a>
                        </li>
                        <li class="nav__item posts">
                            <a
                                href="/posts"
                                class="nav__item--link"
                            >
                                الموضوعات
                            </a>
                        </li>
                        <li class="nav__item contact">
                            <a
                                href="/contact"
                                class="nav__item--link"
                            >
                                اتصل بنا
                            </a>
                        </li>
                    </ul>

                    <div class="mobile-contacts">
                        <div class="info">
                        <div class="info__header">
                            <h5>العنوان</h5>
                        </div>
                        <div class="info__content">
                            <address class="address">
                            <p>
                                {{App\StaticHtml::where('key' , 'address')->first()->value}}
                            </p>
                            </address>
                        </div>
                        <div class="info__header">
                            <h5>اتصل بنا</h5>
                        </div>
                        <div class="info__content contacts">
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
                                href="tel:{{App\StaticHtml::where('key' , 'land_phone')->first()->value}}"
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
                        <div class="icons">
                            <div class="icons__header">
                            <h5>روابط التواصل الاجتماعي</h5>
                            </div>
                            <ul>
                                <li><a
                                    target="_blank"
                                    href="{{App\StaticHtml::where('key' , 'facebook')->first()->value}}"
                                    ><i class="fab fa-facebook-f"></i></a></li>
                                <li><a
                                    target="_blank"
                                    href="{{App\StaticHtml::where('key' , 'twitter')->first()->value}}"
                                    ><i class="fab fa-twitter"></i></a></li>
                                <li><a
                                    target="_blank"
                                    href="{{App\StaticHtml::where('key' , 'linkedin')->first()->value}}"
                                    ><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a
                                    target="_blank"
                                    href="{{App\StaticHtml::where('key' , 'youtube')->first()->value}}"
                                    ><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
            {{-- <div class="icons">
                <div class="search-input">
                <div class="search-field">
                    <input
                    placeholder="بحث ..."
                    type="text"
                    >
                    <svg
                    width="24"
                    height="24"
                    xmlns="http://www.w3.org/2000/svg"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    >
                    <path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" /></svg>
                </div>

                <a class="close-icon"><i class="fas fa-times"></i></a>
                </div>
                <a
                href="#"
                class="search-toggler"
                data-toggle="nav-search-feild"
                >
                <svg
                    width="24"
                    height="24"
                    xmlns="http://www.w3.org/2000/svg"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                >
                    <path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" /></svg>
                </a>
                <a
                href="#"
                class="menue-toggler"
                @click.prevent="toggleNav()"
                >

                <span></span>
                <span></span>
                <span></span>
                </a>
            </div> --}}
        </div>
    </div>

</div>