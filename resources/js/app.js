import './bootstrap';
    import {createApp} from 'vue/dist/vue.esm-bundler'
    import CookiesWarning from "./components/CookiesWarning.vue"


    const global_app = createApp({
        components:{
            CookiesWarning,
        },
        setup() {}
    })

    global_app.mount("#modal_app");
