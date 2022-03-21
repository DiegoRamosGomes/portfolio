import { createApp } from 'vue'
import App from './App.vue'
import VueGtag from 'vue-gtag'

createApp(App)
    .use(VueGtag, {
        config: { id: "G-5ZFM0YQSYK" }
    })
    .mount('#app')