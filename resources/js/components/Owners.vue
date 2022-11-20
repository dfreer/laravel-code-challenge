<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <ResourceCard endpoint="/averages/owners" class="mb-4">
          <template #default="{data}">
            <template v-if="data">
              <p>Average # cars per owner: {{ data.cars }}</p>
              <p>Average # addresses per owner: {{ data.addresses }}</p>
            </template>
          </template>
        </ResourceCard>
        <div class="card">
          <div class="card-header">Owners</div>
          <div class="card-body">
            <owner-table-component></owner-table-component>
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
