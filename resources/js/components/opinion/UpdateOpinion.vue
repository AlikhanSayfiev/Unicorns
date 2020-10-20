<template>
    <!-- Modal -->
<div class="modal fade" :id="modalKey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form @submit.prevent="handleUpdateOpinion">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i :class="`flag-icon flag-icon-${data.lang.code}`"></i> {{ data.lang.name }}</h5>
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
            <img class="img-fluid" v-if="coverImage" :src="coverImage" width="100" height="100">
            <img v-else :src="data.image" width="100" height="100">
            <div class="form-group">
                <label for="text">Ma'lumot:</label>
                <editor
                    ref="text"
                    :initialValue="data.text"
                    :options="editorOptions"
                    height="250px"
                    initialEditType="wysiwyg"
                    previewStyle="vertical"
                />
            </div>
            <div class="form-group">
                <label for="image">Rasm:</label>
                <input type="file" class="form-control" id="image" @change="changeCoverImage">
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
        <button type="button" :id="`${data.id}closeModal`" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
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
    props: ['modalKey', 'fetch', 'data', 'languages'],
    data: () => ({
        editorText: '',
        editorOptions: {
          hideModeSwitch: true
        },
        coverImage: null,
        form: {
            image: null
        }
    }),
    methods: {
        async handleUpdateOpinion () {
            const formData = new FormData()
            formData.append('lang', this.$refs.lang.value)
            formData.append('text', this.$refs.text.invoke('getHtml'))
            formData.append('image', this.form.image)
            formData.append('status', this.$refs.status.value)
        
            await this.$store.dispatch('updateOpinion',{ 
                id: this.data.id,
                data: formData
            })
            document.getElementById(this.data.id + "closeModal").click()
            await this.fetch()
            this.clearInput()
        },
        clearInput () {
            this.$refs.lang.value = null
            this.$refs.status.value = null
            this.image = null
        },
        changeCoverImage (event) {
            this.form.image = event.target.files[0]
            const file = event.target.files[0]
            this.coverImage = URL.createObjectURL(file)
        }
    }
}
</script>