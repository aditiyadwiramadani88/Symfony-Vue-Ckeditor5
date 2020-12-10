<template>
    <div id="App">
    <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
    </div>
</template>
<script>
        import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
        import CKEditor from '@ckeditor/ckeditor5-vue2'

    export default {
      name: 'App',
      components: {
                ckeditor: CKEditor.component
            },
            data() {
                return {
                    editor: ClassicEditor,
                    editorData: '<p>Editor .</p>',
                    editorConfig: {
                        // Elements should be present
                          toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 
                          'numberedList', '|', '|',
                           'imageUpload', 'blockQuote', 'mediaEmbed', '|', 'undo', 'redo'
                        ],
                        // Language Editor
                          language: 'en',
                        //   upload image
                        	simpleUpload: {
                            uploadUrl: '/upload'
                        },
                    } 
                }
    }
}
</script>