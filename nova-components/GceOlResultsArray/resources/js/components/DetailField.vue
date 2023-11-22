<template>
  <div class="flex flex-col md:flex-row -mx-6 px-6 py-2 md:py-0 space-y-2 md:space-y-0 component-panel-item component-detail-text-field">
      <div class="md:w-1/4 md:py-3">
          <h4 class="font-normal text-80">{{ field.name }}</h4>
      </div> 
      <div class="md:w-3/4 md:py-3 break-all lg:break-words">
          <p class="text-90">
            <div class="hash-dynamic-array" v-for="item in field.value" v-bind:key="item.id">
                <div style="margin-bottom: 20px;" class="hash-dynamic-array-item">
                    <div><span style="display: block; width: 220px; float: left;">Subject:</span> <p>{{ item.gce_ol_subject }}</p></div>
                    <div><span style="display: block; width: 220px; float: left;">Grade:</span> <p>{{ item.gce_ol_grade }}</p></div>
                    <div><span style="display: block; width: 220px; float: left;">Year:</span> <p>{{ item.gce_ol_year }}</p></div>
                </div>
            </div>
          </p>
      </div>
  </div>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>
