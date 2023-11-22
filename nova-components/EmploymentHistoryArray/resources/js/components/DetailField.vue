<template>
  <div class="flex flex-col md:flex-row -mx-6 px-6 py-2 md:py-0 space-y-2 md:space-y-0 component-panel-item component-detail-text-field">
      <div class="md:w-1/4 md:py-3">
          <h4 class="font-normal text-80">{{ field.name }}</h4>
      </div> 
      <div class="md:w-3/4 md:py-3 break-all lg:break-words">
          <p class="text-90">
            <div class="hash-dynamic-array" v-for="item in field.value" v-bind:key="item.id">
                <div style="margin-bottom: 20px;" class="hash-dynamic-array-item">
                    <div><span style="display: block; width: 230px; float: left;">Position Name:</span> <p>{{ item.employment_position_name }}</p></div>
                    <div><span style="display: block; width: 230px; float: left;">Place of employment:</span> <p>{{ item.place_of_employment }}</p></div>
                    <div><span style="display: block; width: 230px; float: left;">Duration (Years):</span> <p>{{ item.employment_duration }}</p></div>
                    <div><span style="display: block; width: 230px; float: left;">Salary:</span> <p>{{ item.employment_salary }}</p></div>
                    <div><span style="display: block; width: 230px; float: left;">Reason of termination:</span> <p>{{ item.employment_termination_reason }}</p></div>
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
