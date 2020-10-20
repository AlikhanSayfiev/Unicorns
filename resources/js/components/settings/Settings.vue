<template>
  <div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Sozlamalar</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Sozlamalar</h6>
            <div class="table-responsive pt-3">
              <div class="d-flex justify-content-center" v-if="loader">
                  <div class="spinner-grow text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                  </div>
              </div>
              <div class="aside-body">
                <ul class="nav nav-tabs mt-3" role="tablist">
                  <li class="nav-item" v-for="(language, index) in languages" :key="language.id">
                    <a class="nav-link" :class="{'active': index === 0}" :id="`${language.name}-tab`" data-toggle="tab" :href="`#${language.name}`" role="tab" :aria-controls="language.name" aria-selected="true">
                      <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                        <i class="mr-2" :class="`flag-icon flag-icon-${language.code}`"></i>
                        <p class="d-none d-sm-block">{{ language.name }}</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="tab-content mt-3">
                  <div v-for="(language, index) in languages" :key="language.id" class="tab-pane fade" :class="{'show active': index === 0}" :id="language.name" role="tabpanel" :aria-labelledby="`${language.name}-tab`">
                    <div class="card" v-if="!loader && settings.length > 0">
                    <div class="card-body">
                    <div class="d-flex flex-column" v-for="(setting, index) in settings.filter((f) => { 
                          if (f.lang === language.id) return f 
                        })" :key="index">
                        <form @submit.prevent="handleUpdate">
                        <input type="hidden" id="setid" ref="setid" :value="setting.id" />
                        <div class="form-group">
                            <label for="brand">Sayt nomi:</label>
                            <input type="text" class="form-control" id="brand" ref="brand" placeholder="Sayt nomi" :value="setting.brand">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" ref="email" placeholder="Email" :value="setting.email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon raqam:</label>
                            <input type="text" class="form-control" id="phone" ref="phone" placeholder="Telefon raqam" :value="setting.phone">
                        </div>
                        <div class="form-group">
                            <label for="headerText">Tepa qism: </label>
                            <editor
                                ref="headerText"
                                :initialValue="setting.headerText"
                                :options="editorOptions"
                                height="250px"
                                initialEditType="wysiwyg"
                                previewStyle="vertical"
                            />
                        </div>
                        <img v-if="setting.headerimage" :src="setting.headerimage" width="150" height="200">
                        <div class="form-group">
                            <label for="headerimage">Tepa qism:</label>
                            <input type="file" class="form-control" id="headerimage" @change="changeCoverImage1">
                        </div>
                        <img v-if="setting.middleimage" :src="setting.middleimage" width="150" height="200">
                        <div class="form-group">
                            <label for="middleimage">O'rta qism:</label>
                            <input type="file" class="form-control" id="middleimage" @change="changeCoverImage2">
                        </div>
                        <div class="form-group">
                            <label for="button1">Asosiy tugmalar:</label>
                            <input type="text" class="form-control" id="button1" ref="button1" placeholder="Tugma nomi" :value="setting.button1">
                            <input type="text" class="form-control" ref="url1" id="url1" placeholder="Havola" :value="setting.url1">
                            <hr />
                            <input type="text" class="form-control" id="button2" ref="button2" placeholder="Tugma nomi" :value="setting.button2">
                            <input type="text" class="form-control" id="url2" ref="url2" placeholder="Havola" :value="setting.url2">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram:</label>
                            <input type="text" class="form-control" id="instagram" ref="instagram" placeholder="Instagram manzil" :value="setting.instagram">
                        </div>
                        <div class="form-group">
                            <label for="telegram">Telegram:</label>
                            <input type="text" class="form-control" id="telegram" ref="telegram" placeholder="Telegram manzil" :value="setting.telegram">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram:</label>
                            <input type="text" class="form-control" id="instagram" ref="instagram" placeholder="Instagram manzil" :value="setting.instagram">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text" class="form-control" id="facebook" ref="facebook" placeholder="Facebook manzil" :value="setting.facebook">
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube:</label>
                            <input type="text" class="form-control" id="youtube" ref="youtube" placeholder="Youtube manzil" :value="setting.youtube">
                        </div>
                        <button type="submit" @click="clickHandle(setting.id)" class="btn btn-primary">Saqlash</button>
                        </form>
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import 'codemirror/lib/codemirror.css';
import '@toast-ui/editor/dist/toastui-editor.css';
import { Editor } from '@toast-ui/vue-editor';
export default {
    components: {
        editor: Editor
    },
    data: () => ({
        editorOptions: {
          hideModeSwitch: true
        },
        loader: false,
        languages: [],
        settings: [],
        header: null,
        middle: null,
        setId: null
    }),
    async mounted () {
        await this.fetchLanguages()
        await this.fetchSettings()
    },
    methods: {
        async fetchLanguages () {
            this.loader = true
            await this.$store.dispatch('fetchLanguages')
            this.languages = this.$store.getters.languages
            this.loader = false
        },
        async fetchSettings () {
            this.loader = true
            await this.$store.dispatch('fetchSettings')
            this.settings = this.$store.getters.settings
            this.loader = false
        },
        async handleUpdate () {
            const formData = new FormData()
            formData.append('brand', this.$refs.brand[this.setId - 1].value)
            formData.append('email', this.$refs.email[this.setId - 1].value)
            formData.append('phone', this.$refs.phone[this.setId - 1].value)
            formData.append('headerimage', this.header)
            formData.append('middleimage', this.middle)
            formData.append('headerText', this.$refs.headerText[this.setId - 1].invoke('getHtml'))
            formData.append('button1', this.$refs.button1[this.setId - 1].value)
            formData.append('button2', this.$refs.button2[this.setId - 1].value)
            formData.append('url1', this.$refs.url1[this.setId - 1].value)
            formData.append('url2', this.$refs.url2[this.setId - 1].value)
            formData.append('telegram', this.$refs.telegram[this.setId - 1].value)
            formData.append('instagram', this.$refs.instagram[this.setId - 1].value)
            formData.append('youtube', this.$refs.youtube[this.setId - 1].value)
            formData.append('facebook', this.$refs.facebook[this.setId - 1].value)

            await this.$store.dispatch('updateSettings', {
                id: this.setId,
                data: formData
            })
            this.header = null
            this.middle = null
            await this.fetchSettings()

        },
        clickHandle(event) {
            this.setId = event
        },
        changeCoverImage1 (event) {
            this.header = event.target.files[0]
        },
        changeCoverImage2 (event) {
            this.middle = event.target.files[0]
        }
    }
}
</script>