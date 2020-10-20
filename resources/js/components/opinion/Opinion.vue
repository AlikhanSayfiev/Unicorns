<template>
  <div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Bildirilgan Fikrlar</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <button
          type="button"
          class="btn btn-primary btn-icon-text mb-2 mb-md-0"
          data-toggle="modal" data-target="#createOpinion"
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
            <h6 class="card-title">Bildirilgan Fikrlar</h6>
            <p class="card-description">
                Saytda mavjud Fikrlarnio'zgartirish imkoni mavjud.
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
                  <div class="d-flex justify-content-center" v-if="!loader && opinions.length < 1">
                      Ma'lmotlar mavjud emas.
                  </div>
                    <div class="card" v-if="!loader && opinions.length > 0">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                        <a href="#" v-for="(opinion, index) in opinions.filter((f) => { 
                          if (f.lang.code === language.code) return f 
                        })" :key="index" class="d-flex align-items-center border-bottom pb-3">
                            <div class="mr-3">
                            <img :src="opinion.image" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">{{ opinion.name }}</h6>
                                <p class="text-muted tx-12 mt-2">
                                    <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" :data-target="`#update${opinion.id}`">
                                    <i class="mdi mdi-table-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-icon" @click.prevent="deleteOpinion(opinion.id)" v-if="opinion.status === 'published'">
                                    <i class="mdi mdi-delete"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-icon" @click.prevent="deleteOpinion(opinion.id)" v-if="opinion.status === 'trash'">
                                    <i class="mdi mdi-check-circle"></i>
                                    </button>
                                </p>
                            </div>
                            <p class="text-muted tx-13" v-html="opinion.text.substr(0, 400)"></p>
                            </div>
                            <UpdateOpinion :data="opinion" :modalKey="`update${opinion.id}`" :languages="languages" :fetch="fetchOpinion"/>
                        </a>
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
    <CreateOpinion modalKey="createOpinion" :fetch="fetchOpinion" :languages="languages" />
  </div>
</template>

<script>
import CreateOpinion from './CreateOpinion'
import UpdateOpinion from './UpdateOpinion'

export default {
    components: { CreateOpinion, UpdateOpinion },
    data: () => ({
        loader: false,
        languages: [],
        opinions: []
    }),
    async mounted () {
        await this.fetchLanguages()
        await this.fetchOpinion()
    },
    methods: {
        async fetchLanguages () {
            this.loader = true
            await this.$store.dispatch('fetchLanguages')
            this.languages = this.$store.getters.languages
            this.loader = false
        },
        async fetchOpinion () {
            this.loader = true
            await this.$store.dispatch('fetchOpinions')
            this.opinions = this.$store.getters.opinions
            this.loader = false
        },
        async deleteOpinion (id) {
          await this.$store.dispatch('deleteOpinion', id)
          this.fetchOpinion()
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