<template>
    <!-- Modal -->
<div class="modal fade" :id="modalKey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form @submit.prevent="handleCreateSyn">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ma'lumot yaratish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
            <div class="form-group">
                <label for="image">Rasm:</label>
                <input type="file" class="form-control" id="image" @change="changeCoverImage" ref="image" required>
            </div>
            <div class="form-group">
                <label for="status">Holati:</label>
                <select class="form-control" id="status" ref="status">
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
import 'codemirror/lib/codemirror.css';
import '@toast-ui/editor/dist/toastui-editor.css';
import { Editor } from '@toast-ui/vue-editor';
export default {
    components: {
        editor: Editor
    },
    props: ['modalKey', 'fetch'],
    data: () => ({
        editorText: '',
        editorOptions: {
          hideModeSwitch: true
        },
        form: {
            image: null
        }
    }),
    methods: {
        async handleCreateSyn () {
            const formData = new FormData()
            formData.append('image', this.form.image)
            formData.append('status', this.$refs.status.value)
    
            await this.$store.dispatch('createFollower',formData)
            document.getElementById("closeModal").click()
            await this.fetch()
            this.clearInput()
        },
        clearInput () {
            this.form.image = null
            this.$refs.image.value = null
        },
        changeCoverImage (event) {
            this.form.image = null
            this.form.image = event.target.files[0]
        }
    }
}
</script>