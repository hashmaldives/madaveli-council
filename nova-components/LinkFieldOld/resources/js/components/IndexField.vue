<template>
  <span v-if="field.value">
      <a :class="field.class ? field.class : 'link-default component-inertia-link'" :target="field.newTab ? '_blank' : ''" :href="field.href">{{ field.text }}</a>
  </span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
  }
}
</script>
