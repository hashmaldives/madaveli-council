<template>
  <!-- <PanelItem :index="index" :field="field" /> -->
    <div class="flex flex-col md:flex-row -mx-6 px-6 py-2 md:py-0 space-y-2 md:space-y-0 component-panel-item component-detail-text-field">
        <div class="md:w-1/4 md:py-3">
            <slot>
                <h4 class="font-normal text-80">
                    {{ label }}
                </h4>
            </slot>
        </div>
        <div class="md:w-3/4 md:py-3 break-all lg:break-words">
            <slot name="value">
                <span v-if="field.value">
                    <a :class="field.class ? field.class : 'link-default component-inertia-link'" :target="field.newTab ? '_blank' : ''" :href="field.href">{{ field.text }}</a>
                </span>
                <p v-else>&mdash;</p>
            </slot>
        </div>
    </div>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
  computed: {
    label() {
        return this.fieldName || this.field.name
    },
  },
}
</script>
