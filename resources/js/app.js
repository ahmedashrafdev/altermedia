import AppHeader from "./components/layouts/AppHeader.vue"
import AppNav from "./components/layouts/AppNav.vue"
import AppFooter from "./components/layouts/AppFooter.vue"

import Vue from "vue"

import Flickity from 'flickity';

window.addEventListener('load', function(){
    let elem = document.querySelector('.categories__slides');
    let flkty = new Flickity( elem, {
      // options
      cellAlign: 'right',
      draggable: true,
      prevNextButtons: false,
      pageDots: false,
      groupCells: 2,
      //autoPlay: 3000,
      lazyLoad: 2,
      dragThreshold: 10,
      rightToLeft: true,

      contain: true
    });

    document.querySelector('.prev').addEventListener('click', () => flkty.previous());
    document.querySelector('.next').addEventListener('click', () => flkty.next());


    //tabs

    let controllers = document.querySelectorAll('.tab-control')
    controllers.forEach(controller => {
        controller.addEventListener('click' , () => {
            let link = controller.firstChild
            let id = link.getAttribute('data-tab')
            let currentContent =  document.querySelector(`.tab-content.active`)
            let currentLink =  document.querySelector(`.tab-control a.active`)
            currentContent.classList.remove('active')
            currentLink.classList.remove('active')
            let content =  document.querySelector(`#${id}`)
            link.classList.add('active')
            content.classList.add('active')
        } )
    })

    //sidebar

    const elementsss = document.querySelector(".sidebar");
    let offset = elementsss.offsetTop
    console.log(offset)
});
const app = new Vue({
    el: '#app',
    components:{
        "app-header" : AppHeader,
        "app-nav" : AppNav,
        "app-footer" : AppFooter,
    }
    
});
