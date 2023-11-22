<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <editor
        :id="field.attribute"
        v-model="value"
        :api-key="field.options.apiKey"
        :init="field.options.init"
        :plugins="field.options.plugins"
        :toolbar="field.options.toolbar"
        :placeholder="field.name"
      />
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import Editor from '@tinymce/tinymce-vue';
// import $ from 'jquery'
// import ThaanaKeyboard from 'thaana-keyboard/ThaanaKeyboard';

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field', "options"],

  components: {
    editor: Editor,
  },

  data(){
    return{
        init: {},
    }
  },

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },

    /**
     * Update the field's internal value.
     */
    handleChange(value) {
      this.value = value
    },
  },
  // mounted() {
    
  //   var ref = this;
  //   this.init = {
  //     setup: function (editor) {
  //       if(ref.field.thaana){
  //         thaanaKeyboard.defaultKeyboard = 'phonetic';
  //         editor.on('keypress', function (e) {
  //             thaanaKeyboard.value = '';
  //             thaanaKeyboard.handleKey(e);
  //             editor.insertContent(thaanaKeyboard.value);
  //         });
  //       }
  //     }
  //   }
  // }
}
</script>
