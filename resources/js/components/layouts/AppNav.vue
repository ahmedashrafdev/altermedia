<template>
  <div class="main-navbar">
    <div class="container">
      <div class="wrapper">
        <div class="left-wrapper">
          <div class="logo">
            <a
              class="logo__link"
              href="/"
            >
              <img
                class="logo__img"
                src="https://cdn.shortpixel.ai/spai/q_lossless+ret_img+ex_1/http://axilthemes.com/themes/papr/wp-content/themes/papr/assets/img/logo-black.svg"
              >
            </a>
          </div>
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
              <li class="nav__item active">
                <a
                  href="/"
                  class="nav__item--link"
                >
                  الرئيسية
                </a>
              </li>
              <li class="nav__item">
                <a
                  href="/"
                  class="nav__item--link"
                >
                  من نحن
                </a>
              </li>
              <li class="nav__item  has-dropdown">
                <a
                  href="/"
                  class="nav__item--link "
                >
                  انشطة
                </a>
                <ul class="dropdown">
                  <li class="dropdown__item">
                    <a
                      class="dropdown__item--link"
                      href="/"
                    >رحلات</a>
                  </li>
                  <li class="dropdown__item">
                    <a
                      class="dropdown__item--link"
                      href="/"
                    >سينيما</a>
                  </li>
                </ul>
              </li>
              <li class="nav__item">
                <a
                  href="/"
                  class="nav__item--link has-dropdown"
                >
                  مقالات
                </a>
                <!-- <ul class="dropdown">
                  <li class="dropdown__item">
                    <a
                      class="dropdown__item--link"
                      href="/"
                    >رحلات</a>
                  </li>
                  <li class="dropdown__item">
                    <a
                      class="dropdown__item--link"
                      href="/"
                    >سينيما</a>
                  </li>
                </ul> -->
              </li>
              <li class="nav__item">
                <a
                  href="/"
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
                      ١١شارع مختار سعيد- أرض الجولف- خلف الرقابة الإدارية- الدور الأول- مصر الجديدة
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
                      href="tel:8884562790"
                    ><i class="fas fa-phone"></i>(888) 456-2790
                    </a>
                  </div>
                  <div>
                    <a
                      class="tel"
                      href="tel:12125553333"
                    ><i class="fas fa-fax"></i>(121) 255-53333
                    </a>
                  </div>
                  <div>
                    <a
                      class="tel"
                      href="mailto:example@domain.com"
                    ><i class="fas fa-envelope"></i>example@domain.com
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
                        href="#"
                      ><i class="fab fa-facebook-f"></i></a></li>
                    <li><a
                        target="_blank"
                        href="#"
                      ><i class="fab fa-twitter"></i></a></li>
                    <li><a
                        target="_blank"
                        href="#"
                      ><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a
                        target="_blank"
                        href="#"
                      ><i class="fab fa-youtube"></i></a></li>
                    <li><a
                        target="_blank"
                        href="#"
                      ><i class="fab fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div class="icons">
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
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name:'navbar',
  methods:{
    toggleNav(){
      let nav = this.$refs.nav
      nav.classList.toggle('open');
    }
  }
}
</script>

<style lang="scss" scoped>
.main-navbar {
  border-bottom: 1px solid var(--grey-light-two);
  position: relative;
}
.wrapper {
  display: flex;
  justify-content: space-between;
}
.left-wrapper {
  display: flex;
}
.logo {
  margin-left: 4.4rem;
  padding: 2.6rem 0 2.5rem;

  &__link {
    & img {
    }
  }
}
.nav {
  display: flex;
  align-items: center;
  transition:all .3s ease 0s;
  @media (max-width: 991px) {
    display: none;
    transform: translateY(-100%);
  }
  & .mobile-search-input,
  & .mobile-contacts {
    display: none !important;
  }

  & .mobile-close {
    cursor: pointer;
    color: #000;
    display: none;
    font-size: 1.6rem;
    font-weight: 300;
  }
  &__list {
    display: flex;
    font-size: 1.6rem;
  }

  &__item {
    position: relative;
    padding: 2.6rem 0 2.5rem;

    &.has-dropdown {
      &:hover{
        & .dropdown{
          display: block !important;
          transform:scale(1)
        }

         & a:first-child::after {
           transform: rotate(180deg);
         }
      }

      & a:first-child {
        position: relative;
        &::after {
          content: "\f078";
          margin-right: 3px;
          font-family: "Font Awesome 5 Free";
          font-weight: 900;
          font-size: 1.4rem;
          line-height: inherit;
          color: inherit;
          margin-left: 0.5rem;
          width: auto;
          height: auto;
          transition: all 0.5s;
        }
      }
    }
    &.active {
      & a {
        color: var(--primary-color);
      }
    }
    &:hover {
      & a:not(.dropdown__item--link) {
        color: var(--primary-color);
      }
    }
    &:not(:last-child) {
      margin-left: 3.4rem;
    }
  }

  & .dropdown {
    display:none;
    transform:scale(0);
    transition:all .3s ease 0s;
    @media screen and (min-width: 991px) {
      //display: block;
      background: #fff;
      box-shadow: var(--shadow-dark);
      position: absolute;
      top: 100%;
      right: 0;
      padding: 2rem 0;
      min-width: 15rem;
      transition: all 0.3s var(--cubic-easing);
      transform-origin: top left;
      z-index: 99;
    }
    &__item {
      @media screen and (min-width: 991px) {
        display: block;
        margin-right: 0;
        padding: 0 3rem;
        font-size: 1.5rem;
        line-height: 3.4rem;
      }
      &--link {
        transition:all .3s ease 0s;
        @media screen and (min-width: 991px) {
          font-size: 1.6rem;
        }
        &:hover{
          color:var(--primary-color);
        }
        &::after {
          content: "";
          display: none !important;
        }
      }
    }
  }
}

.nav.open {
  @media (max-width: 991px) {
    overflow: scroll;
    display: block;
    width: 100vw;
    height: 100vh;
    padding: 3rem;
    background-color: #fff;
    z-index: 10000000;
    position: fixed;
    top: 0;
    right: 0;
    transition: all .3s;
    transform: translateY(0);

  }
  & .mobile-search-input {
    @media (max-width: 991px) {
      display: block !important;
      width: 100% !important;
      padding: 5rem 1.5rem;
    }
    & .search-field {
      width: 100%;

      & svg {
        top: 50%;
      }
    }

    & input {
      font-size: 3rem;
      font-weight: 500;
      width: 100% !important;
      border-bottom: 2px solid var(--grey-mid) !important;
      line-height: 4.2rem;
      padding: 1.9rem 0 !important;
    }
  }
  & .mobile-close {
    @media (max-width: 991px) {
      display: block;
      position: absolute;
      left: 50px;
      top: 15px;
    }
  }
  & .mobile-contacts {
    @media (max-width: 991px) {
      display: block !important;
      width: 100%;
    }

    & .info {
      & .address {
        @media (max-width: 991px) {
          width: 40%;
        }
        @media (max-width: 700px) {
          width: 60%;
        }
        @media (max-width: 600px) {
          width: 100%;
        }
      }
      &__header {
        @media (max-width: 991px) {
          margin-bottom: 1rem !important;
        }
        & h5 {
          @media (max-width: 991px) {
            font-size: 1.6rem;
          }
        }
      }
      &__content {
        &.contacts {
          @media (max-width: 991px) {
          }

          & a {
            @media (max-width: 991px) {
              font-size: 1.4rem;
              line-height: 2.4rem;
              margin-bottom: 1.5rem;
            }
            & i {
              @media (max-width: 991px) {
                font-size: 1.2rem;
                margin-left: 1%;
              }
            }
          }
        }
        @media (max-width: 991px) {
          margin-bottom: 3rem !important;
          font-size: 1.4rem;
          line-height: 2.4rem;
          color: var(--grey-dark-three);
        }
      }

      & .icons {
        display: block;
        &__header {
          @media (max-width: 991px) {
            margin-bottom: 1rem !important;
          }
          & h5 {
            @media (max-width: 991px) {
              font-size: 1.6rem;
            }
          }
        }
        & ul {
          display: flex;
        }
        & li {
          &:not(:last-child) {
            margin-left: 1rem;
          }
          & a {
            display: inline-block;
            width: 3.2rem;
            height: 3.2rem;
            border-radius: 100%;
            font-size: 1.2rem;
            line-height: 3.4rem;
            text-align: center;
            background: var(--grey-dark-one);
            &:hover {
              background: var(--primary-color);
              color: #fff;
              transform: rotate(45deg);
            }
            & i {
              color: #fff;
            }
          }
        }
      }
    }
  }

  & .nav__list {
    @media (max-width: 991px) {
      display: block;
      padding: 15px 0;
    }

    & .nav__item {
      transition: all 0.3s ease 0s;
      &.has-dropdown {
        & a:first-child {
          @media (max-width: 991px) {
            display: block;
          }

          &::after {
            @media (max-width: 991px) {
              position: absolute;
              top: 50%;
              left: 0;
              transform: translateY(-50%);
            }
          }
        }
      }
      &:hover {
        & a:not(.dropdown__item--link){
          @media (max-width: 991px) {
            color: var(--primary-color);
            margin-right: 3px;
          }

        }
      }
      @media (max-width: 991px) {
        font-size: 1.6rem;
        line-height: 2.6rem;
        margin-bottom: 1rem;
        font-weight: bold;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding-bottom: 1rem;
      }
    }
  }
  & .dropdown {
    display:none;
    @media (max-width: 991px) {
      //display: block !important;
      margin-top: 10px;
    }
    &__item {
      @media (max-width: 991px) {
        padding-right: 15px;
        &--link {
          font-size: 1.4rem;
          padding:5px 0;
          font-weight: 400;
        }
      }
      &:not(.nav__item) :hover{
        color: var(--primary-color);
        margin-right: 3px;
      }
    }
  }
}
.icons {
  display: flex;
  align-items: center;
  & a {
    font-size: 1.6rem;
    &:not(.menue-toggler) {
      display: flex;
      align-items: center;
      & svg {
        transition: all 0.3s ease 0s;
      }
      &:hover {
        & svg {
          fill: var(--primary-color);
        }
      }
    }
    &.menue-toggler {
      margin-right: 2rem;
      transition: all 0.3s ease 0s;
      position: relative;
      padding: 0.8rem 1rem;
      &::after {
        content: " ";
        position: absolute;
        width: 4rem;
        height: 4rem;
        background: rgba(255, 255, 255, 0.1);
        top: 50%;
        left: 50%;
        margin: -2rem;
        border-radius: 100%;
        transform: scale(0);
        transition: all 0.3s ease-in-out;
        background: rgba(0, 0, 0, 0.1);
      }
      &:hover {
        background-color: #fff;

        &::after {
          transform: scale(1);
        }
        & span {
          animation: menu-toggler-anim 0.2s ease-in-out forwards;
          &:not(:first-child) {
            animation-delay: 0.05s;
          }
          &:last-child {
            animation-delay: 0.1s;
          }
        }
      }
      & span {
        background: var(--grey-dark-one);
        position: relative;
        display: block;
        width: 1.8rem;
        height: 0.2rem;
        cursor: pointer;

        &:not(:last-child) {
          margin-bottom: 0.5rem;
        }
      }
    }
  }
}

.search-input {
  position: absolute;
  width: 100vw;
  top: 0;
  left: 50%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: translateX(-50%);
  background: var(--grey-light-three);
  opacity: 0;
  display: none;
  z-index: 999999;
  transition: all 0.5s ease-in-out;
  & .close-icon {
    position: absolute;
    top: 50%;
    left: 3rem;
    font-size: 2.4rem;
    color: var(--grey-dark-one);
    margin-right: 3rem;
    transform: translateY(-50%);
  }
}
.search-field {
  width: 60%;
  margin: 0 auto;
  position: relative;
  & input {
    width: 100%;
    height: 100%;
    border: none;
    background: 0 0;
    border-bottom: 1px solid var(--grey-dark-one);
    padding: 0.4rem 0;
    padding-left: 3rem;
  }
  & svg {
    position: absolute;
    left: 0;
    top: 0;
    border: none;
    background: 0 0;
    transform: scale(0.7);
    fill: #707070;
    &:hover {
      fill: var(--primary-color);
      transition: all 0.3s ease 0s;
    }
    //padding: 0.5rem 0;
    cursor: pointer;
  }
}
</style>