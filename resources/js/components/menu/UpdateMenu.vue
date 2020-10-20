<template>
    <!-- Modal -->
<div class="modal fade" :id="modalKey" tabindex="-1" role="dialog" :aria-labelledby="`${modalKey}1`" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form @submit.prevent="handleUpdateMenu">
      <div class="modal-header">
        <h5 class="modal-title" :id="`${modalKey}1`"><i :class="`flag-icon flag-icon-${data.lang.code}`"></i> {{ data.lang.name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" ref="lang" :value="data.lang.id" />
        <div class="form-group">
            <label for="name">Nomi:</label>
            <input type="text" class="form-control" id="name" ref="menuName" placeholder="Nomi" :value="data.name">
        </div>
        <div class="form-group">
            <label for="url">Havola:</label>
            <input type="text" class="form-control" id="url" ref="menuUrl" placeholder="Havola" :value="data.url">
        </div>
        <div class="form-group">
            <label for="url">Holati:</label>
            <select class="form-control" id="url" ref="menuStatus">
                <option :selected="data.status === 'published'" value="published">Aktiv</option>
                <option :selected="data.status === 'trash'" value="trash">O'chirilgan</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" :id="`${modalKey}closeModal`" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <button type="submit" class="btn btn-primary">Saqlash</button>
      </div>
    </form>
    </div>
  </div>
</div>
</template>
<script>
export default {
    props: ['modalKey', 'fetch', 'data'],
    methods: {
        async handleUpdateMenu () {
            const form = {
                id: this.data.id,
                data: {
                    'lang': this.$refs.lang.value,
                    'name': this.$refs.menuName.value,
                    'url': this.$refs.menuUrl.value,
                    'status': this.$refs.menuStatus.value
                }
            }
            await this.$store.dispatch('updateMenu', form)
            document.getElementById(`${this.modalKey}closeModal`).click()
            await this.fetch()
        }
    }
}
</script>