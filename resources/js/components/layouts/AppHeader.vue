<template>
  <div class="top-header">
    <div class="container">
      <div class="wrapper">
        <div class="links">
          <ul class="date">
            <li class="current-date">23 ديسمبر , 2019 </li>
          </ul>
          <ul class="links__list">
            <li><a href="#">للاعلان</a></li>
            <li><a href="">عن المؤسسة</a></li>
            <li><a href="">اتصل بنا</a></li>
          </ul>
        </div>
        <div class="icons">
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

  </div>
</template>


<style lang="scss" scoped>
.top-header {
  padding: 0.5rem 0;
  position: relative;
  z-index: 999;
  background-color: var(--grey-dark-one);

  @media (max-width: 991px){
    display: none;
  }
}

.wrapper {
  display: flex;
  justify-content: space-between;
}

.links {
  display: flex;

  & ul.date {
    margin-left: 3rem;
    padding: 0.5rem 0;
    & li {
      display: block;

      font-size: 1.4rem;
      line-height: 2.4rem;
      color: var(--grey-dark-six);
      font-weight: var(--s-regular);
      transition: all 0.3s;
    }
  }

  &__list {
    display: flex;
    padding: 0.5rem 0;
    & li {
      display: block;
      font-size: 1.4rem;
      line-height: 2.4rem;
      color: var(--grey-dark-six);
      font-weight: var(--s-regular);
      &:not(:last-child) {
        margin-left: 3rem;
      }
      & a {
        transition: color 0.3s ease 0s;
        &:hover {
          color: var(--primary-color);
        }
      }
    }
  }
}

.icons {
  & ul {
    padding: 0.5rem 0;
    display: flex;
    & li {
      display: block;

      &:not(:last-child) {
        margin-left: 3rem;
      }
      & a {
        &:hover {
          & i {
            color: var(--primary-color);
          }
        }
        & i {
          font-size: 1.4rem;
          transition: color 0.3s ease 0s;
          line-height: 2.4rem;
          color: var(--grey-dark-six);
          font-weight: var(--s-regular);
          transition: all 0.3s;
        }
      }
    }
  }
}
</style>