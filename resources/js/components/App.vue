<template>
    <div>
        <app-header></app-header>
		<app-nav></app-nav>
        <div style="height:100vh"></div>
		<app-sidebar></app-sidebar>
		<app-footer></app-footer>
    </div>
</template>

<script>
import AppHeader from "./layouts/AppHeader.vue"
import AppNav from "./layouts/AppNav.vue"
import AppSidebar from "./layouts/AppSidebar.vue"
import AppFooter from "./layouts/AppFooter.vue"

export default {
        components:{
            "app-header" : AppHeader,
            "app-nav" : AppNav,
            "app-sidebar" : AppSidebar,
            "app-footer" : AppFooter,
        }
    }
</script>