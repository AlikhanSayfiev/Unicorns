<template>
    <!-- Modal -->
<div class="modal fade" :id="modalKey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form @submit.prevent="handleCreateMenu">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yangi menu yaratish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
            <div class="form-group">
                <label for="lang">Til:</label>
                <select class="form-control" id="lang" ref="lang">
                    <option v-for="language in languages" :key="language.id" :value="language.id">
                        <i :class="`flag-icon flag-icon-${language.code}`"></i> {{ language.name }}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Nomi:</label>
                <input type="text" class="form-control" id="name" ref="menuName" placeholder="Nomi" required>
            </div>
            <div class="form-group">
                <label for="url">Havola:</label>
                <input type="text" class="form-control" id="url" ref="menuUrl" placeholder="Havola" required>
            </div>
            <div class="form-group">
                <label for="status">Holati:</label>
                <select class="form-control" id="status" ref="menuStatus">
                    <option selected value="published">Aktiv</option>
                    <option value="trash">O'chirilgan</option>
                </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="closeModal" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <button type="submit" class="btn btn-primary">Saqlash</button>
      </div>
    </form>
    </div>
  </div>
</div>
</template>
<script>
export default {
    props: ['modalKey', 'fetch', 'languages'],
    methods: {
        async handleCreateMenu () {  
            const form = {
                'lang': this.$refs.lang.value,
                'name': this.$refs.menuName.value,
                'url': this.$refs.menuUrl.value,
                'status': this.$refs.menuStatus.value
            }
            await this.$store.dispatch('createMenu', form)
            document.getElementById("closeModal").click()
            await this.fetch()
        }
    }
}
</script>