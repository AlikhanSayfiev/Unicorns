<template>
  <div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Menu</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <button
          type="button"
          class="btn btn-primary btn-icon-text mb-2 mb-md-0"
          data-toggle="modal" data-target="#createMenu"
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
            <h6 class="card-title">Menyular ro'yxati</h6>
            <p class="card-description">
                Saytda mavjud manyularni o'zgartirish va yangi menyu yaratish imkoni mavjud, Menyular ro'yhati jadvalda ko'rsatilgan.
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
                  <div class="d-flex justify-content-center" v-if="!loader && menus.length < 1">
                      Menyular mavjud emas.
                  </div>
                      
                    <table class="table table-bordered" v-if="!loader && menus.length > 0">
                      <thead>
                        <tr>
                          <th>
                            Til
                          </th>
                          <th>
                            Nomi
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
                        <tr v-for="(menu, index) in menus.filter((f) => { 
                          if (f.lang.code === language.code) return f 
                        })" :key="index">
                          <td><i :class="`flag-icon flag-icon-${menu.lang.code}`"></i></td>
                          <td>{{ menu.name }}</td>
                          <td>{{ menu.url }}</td>
                          <td v-html="statusChange(menu.status)"></td>
                          <td>
                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" :data-target="`#update${menu.id}`">
                              <i class="mdi mdi-table-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-icon" @click.prevent="deleteMenu(menu.id)" v-if="menu.status === 'published'">
                              <i class="mdi mdi-delete"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-icon" @click.prevent="deleteMenu(menu.id)" v-if="menu.status === 'trash'">
                              <i class="mdi mdi-check-circle"></i>
                            </button>
                          </td>
                          <UpdateMenu :data="menu" :modalKey="`update${menu.id}`" :fetch="fetchMenu"/>
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
    <CreateMenu modalKey="createMenu" :fetch="fetchMenu" :languages="languages" />
  </div>
</template>

<script>
import CreateMenu from './CreateMenu'
import UpdateMenu from './UpdateMenu'

export default {
    components: { CreateMenu, UpdateMenu },
    data: () => ({
        loader: false,
        languages: [],
        menus: []
    }),
    async mounted () {
        await this.fetchLanguages()
        await this.fetchMenu()
    },
    methods: {
        async fetchLanguages () {
            this.loader = true
            await this.$store.dispatch('fetchLanguages')
            this.languages = this.$store.getters.languages
            this.loader = false
        },
        async fetchMenu () {
            this.loader = true
            await this.$store.dispatch('fetchMenus')
            this.menus = this.$store.getters.menus
            this.loader = false
        },
        async deleteMenu (id) {
          await this.$store.dispatch('deleteMenu', id)
          this.fetchMenu()
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