<template>
    <!-- Modal -->
<div class="modal fade" :id="modalKey" tabindex="-1" role="dialog" :aria-labelledby="`${modalKey}1`" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form @submit.prevent="handleUpdateSyn">
      <div class="modal-header">
        <h5 class="modal-title" :id="`${modalKey}1`"><i :class="`flag-icon flag-icon-${data.lang.code}`"></i> {{ data.lang.name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
            <div class="form-group">
                <label for="lang">Til:</label>
                <select class="form-control" id="lang" ref="lang">
                    <option v-for="language in languages" :key="language.id" :value="language.id" :selected="data.lang.code === language.code">
                        <i :class="`flag-icon flag-icon-${language.code}`"></i> {{ language.name }}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="icon">Rasm:</label>
                <input type="file" class="form-control" id="icon" @change="changeCoverImage" ref="icon">
            </div>
            <div class="form-group">
                <label for="title">Sarlavha:</label>
                <input type="text" class="form-control" id="title" ref="title" placeholder="Sarlavha" :value="data.title" required>
            </div>
            <div class="form-group">
                <label for="desc">Tavsif:</label>
                <editor
                    ref="desc"
                    :options="editorOptions"
                    :initialValue="data.desc"
                    height="250px"
                    initialEditType="wysiwyg"
                    previewStyle="vertical"
                />
            </div>
            <div class="form-group">
                <label for="status">Holati:</label>
                <select class="form-control" id="status" ref="status">
                    <option :selected="data.status === 'published'" value="published">Aktiv</option>
                    <option :selected="data.status === 'trash'" value="trash">O'chirilgan</option>
                </select>
            </div>
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
import 'codemirror/lib/codemirror.css';
import '@toast-ui/editor/dist/toastui-editor.css';
import { Editor } from '@toast-ui/vue-editor';
export default {
    components: {
        editor: Editor
    },
    props: ['modalKey', 'fetch', 'languages', 'data'],
    data: () => ({
        editorOptions: {
          hideModeSwitch: true
        },
        form: {
            image: null
        }
    }),
    methods: {
        async handleUpdateSyn () {
            const formData = new FormData()
            formData.append('lang', this.$refs.lang.value)
            formData.append('icon', this.form.image)
            formData.append('title', this.$refs.title.value)
            formData.append('desc', this.$refs.desc.invoke('getHtml'))
            formData.append('status', this.$refs.status.value)

            const form = {
                id: this.data.id,
                data: formData
            }
            await this.$store.dispatch('updateService',form)
            document.getElementById(this.modalKey + "closeModal").click()
            await this.fetch()
        },
        changeCoverImage (event) {
            this.form.image = event.target.files[0]
        }
    }
}
</script>