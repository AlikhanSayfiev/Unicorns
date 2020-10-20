<template>
  <div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Yangiliklar</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <button
          type="button"
          class="btn btn-primary btn-icon-text mb-2 mb-md-0"
          data-toggle="modal" data-target="#createBlog"
        >
          <i
            class="btn-icon-prepend"
            data-feather="download-cloud"
          ></i>
          Qo'shish
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Ro'yxat</h6>
            <p class="card-description">
                Saytda mavjud Yangiliklar bo'limini o'zgartirish imkoni mavjud.
            </p>
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
                  <div class="d-flex justify-content-center" v-if="!loader && formats.length < 1">
                      Ma'lmotlar mavjud emas.
                  </div>
                      
                    <table class="table table-bordered" v-if="!loader && formats.length > 0">
                      <thead>
                        <tr>
                          <th>
                            Til
                          </th>
                          <th>
                            Rasm
                          </th>
                          <th>
                            Sarlavha
                          </th>
                          <th>
                            Havola
                          </th>
                          <th>
                            Holati
                          </th>
                          <th>
                            Boshqaruv
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(format, index) in formats.filter((f) => { 
                          if (f.lang.code === language.code) return f 
                        })" :key="index">
                          <td><i :class="`flag-icon flag-icon-${format.lang.code}`"></i></td>
                          <td><img :src="format.image" width="50" height="50"/></td>
                          <td>{{ format.title }}</td>
                          <td v-html="format.url"></td>
                          <td v-html="statusChange(format.status)"></td>
                          <td>
                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" :data-target="`#update${format.id}`">
                              <i class="mdi mdi-table-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-icon" @click.prevent="deleteSyn(format.id)" v-if="format.status === 'published'">
                              <i class="mdi mdi-delete"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-icon" @click.prevent="deleteSyn(format.id)" v-if="format.status === 'trash'">
                              <i class="mdi mdi-check-circle"></i>
                            </button>
                          </td>
                          <Update :data="format" :modalKey="`update${format.id}`" :languages="languages" :fetch="fetchSyn"/>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Create modalKey="createBlog" :fetch="fetchSyn" :languages="languages" />
  </div>
</template>

<script>
import Create from './Create'
import Update from './Update'

export default {
    components: { Create, Update },
    data: () => ({
        loader: false,
        languages: [],
        formats: []
    }),
    async mounted () {
        await this.fetchLanguages()
        await this.fetchSyn()
    },
    methods: {
        async fetchLanguages () {
            this.loader = true
            await this.$store.dispatch('fetchLanguages')
            this.languages = this.$store.getters.languages
            this.loader = false
        },
        async fetchSyn () {
            this.loader = true
            await this.$store.dispatch('fetchBlogs')
            this.formats = this.$store.getters.blogs
            this.loader = false
        },
        async deleteSyn (id) {
          await this.$store.dispatch('deleteBlog', id)
          this.fetchSyn()
        },
        statusChange(status) {
          if(status === "published") {
            return "<i class='mdi mdi-check-circle' style='color: green;'></i>"
          } else {
            return "<i class='mdi mdi-delete' style='color: red;'></i>"
          }
        }
    }
}
</script>