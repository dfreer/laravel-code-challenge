<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <ResourceCard endpoint="/averages/addresses" class="mb-4">
          <template #default="{data}">
            <p v-if="data">Average # cars per address: {{ data.cars }}</p>
          </template>
        </ResourceCard>
        <div class="card">
          <div class="card-header">Addresses</div>

          <div class="card-body">
            <address-table-component></address-table-component>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ResourceCard from './ResourceCard.vue'
export default {
  components: {
    ResourceCard,
  },
}
</script>
