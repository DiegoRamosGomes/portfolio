<template>
  <div class="container">
    <a target="_blank" class="link" v-bind:href=url :style="themes" @click=handler>
      {{ this.legend }}
    </a>
  </div>
</template>

<script>
export default {
  name: "Link",
  props: {
    url: {type: [String], default: '#', required: true},
    legend: {type: [String], required: true},
    theme: {type: [String], required: false},
    gtEvent: {type: String, required: true}
  },
  computed: {
    themes() {
      if (this.theme === 'github') {
        return {
          'background-color': '#1D202D',
          border: '1px solid #8B949E',
          color: '#fff'
        }
      }

      if (this.theme === 'instagram') {
        return {
          "background-color": '#DD2A7B',
          color: '#fff'
        }
      }

      if (this.theme === 'linkedin') {
        return {
          "background-color": '#0E76A8',
          color: '#fff'
        }
      }

      if (this.theme === 'mail') {
        return {
          "background-color": '#0e41a8',
          color: '#fff'
        }
      }

      if (this.theme === 'whatsapp') {
        return {
          "background-color": '#075E54',
          color: '#fff'
        }
      }

      return {}
    }
  },
  methods: {
    handler() {
      this.$gtag.event(`click_social_network`, { social: this.gtEvent })
    }
  }
}
</script>

<style scoped>
.link {
  display: inline-block;
  text-decoration: none;
  line-height: 20px;
  letter-spacing: 1px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 11px;
  padding: 0 20px;
  margin: 0 10px 1rem 0;
}

.link img {
  width: 16px;
  vertical-align: text-bottom;
}

@media only screen and (max-width: 600px) {
  .link {
    width: 50%;
    padding: 5px 20px;
  }
}
</style>