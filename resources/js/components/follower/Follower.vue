<template>
  <div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Hamkorlar</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <button
          type="button"
          class="btn btn-primary btn-icon-text mb-2 mb-md-0"
          data-toggle="modal" data-target="#createFollower"
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
                Saytda mavjud Hamkorlar bo'limini o'zgartirish imkoni mavjud.
            </p>
            <div class="table-responsive pt-3">
              <div class="d-flex justify-content-center" v-if="loader">
                  <div class="spinner-grow text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                  </div>
              </div>
              <div class="aside-body">
                  <div class="d-flex justify-content-center" v-if="!loader && formats.length < 1">
                      Ma'lmotlar mavjud emas.
                  </div>
                      
                    <table class="table table-bordered" v-if="!loader && formats.length > 0">
                      <thead>
                        <tr>
                          <th>
                            Rasm
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
                        <tr v-for="(format, index) in formats" :key="index">
                          <td><img :src="format.image" width="100" height="100"/></td>
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
                          <Update :data="format" :modalKey="`update${format.id}`" :fetch="fetchSyn"/>
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Create modalKey="createFollower" :fetch="fetchSyn"/>
    </div>
</template>

<script>
import Create from './Create'
import Update from './Update'

export default {
    components: { Update, Create },
    data: () => ({
        loader: false,
        formats: []
    }),
    async mounted () {
        await this.fetchSyn()
    },
    methods: {
        async fetchSyn () {
            this.loader = true
            await this.$store.dispatch('fetchFollowers')
            this.formats = this.$store.getters.followers
            this.loader = false
        },
        async deleteSyn (id) {
          await this.$store.dispatch('deleteFollower', id)
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