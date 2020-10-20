<template>
  <div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Sarlavha</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <button
          type="button"
          class="btn btn-primary btn-icon-text mb-2 mb-md-0"
          data-toggle="modal" data-target="#createTitle"
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
            <h6 class="card-title">Sarlavhalar ro'yxati</h6>
            <p class="card-description">
                Saytda mavjud Sarlavhalarni o'zgartirish imkoni mavjud, Sarlavhalar ro'yhati jadvalda ko'rsatilgan.
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
                  <div class="d-flex justify-content-center" v-if="!loader && titles.length < 1">
                      Sarlavhalar mavjud emas.
                  </div>
                      
                    <table class="table table-bordered" v-if="!loader && titles.length > 0">
                      <thead>
                        <tr>
                          <th>
                            Blok
                          </th>
                          <th>
                            Til
                          </th>
                          <th>
                            Sarlavha
                          </th>
                          <th>
                            Tavsif
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
                        <tr v-for="(title, index) in titles.filter((f) => { 
                          if (f.lang.code === language.code) return f 
                        })" :key="index">
                          <td>{{ title.block }}</td>
                          <td><i :class="`flag-icon flag-icon-${title.lang.code}`"></i></td>
                          <td>{{ title.title }}</td>
                          <td v-html="title.desc.substr(0, 90)"></td>
                          <td v-html="statusChange(title.status)"></td>
                          <td>
                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" :data-target="`#update${title.id}`">
                              <i class="mdi mdi-table-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-icon" @click.prevent="deleteTitle(title.id)" v-if="title.status === 'published'">
                              <i class="mdi mdi-delete"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-icon" @click.prevent="deleteTitle(title.id)" v-if="title.status === 'trash'">
                              <i class="mdi mdi-check-circle"></i>
                            </button>
                          </td>
                          <UpdateTitle :data="title" :modalKey="`update${title.id}`" :languages="languages" :fetch="fetchTitle"/>
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
    <CreateTitle modalKey="createTitle" :fetch="fetchTitle" :languages="languages" />
  </div>
</template>

<script>
import CreateTitle from './CreateTitle'
import UpdateTitle from './UpdateTitle'

export default {
    components: { CreateTitle, UpdateTitle },
    data: () => ({
        loader: false,
        languages: [],
        titles: []
    }),
    async mounted () {
        await this.fetchLanguages()
        await this.fetchTitle()
    },
    methods: {
        async fetchLanguages () {
            this.loader = true
            await this.$store.dispatch('fetchLanguages')
            this.languages = this.$store.getters.languages
            this.loader = false
        },
        async fetchTitle () {
            this.loader = true
            await this.$store.dispatch('fetchTitles')
            this.titles = this.$store.getters.titles
            this.loader = false
        },
        async deleteTitle (id) {
          await this.$store.dispatch('deleteTitle', id)
          this.fetchTitle()
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