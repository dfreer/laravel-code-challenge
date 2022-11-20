<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <ResourceCard :endpoint="endpoint">
          <template #title="{data}">
            <span v-if="data">{{ `${data.make} ${data.model}` }}</span>
          </template>
          <template #default="{data}">
            <pre v-if="data">{{ data }}</pre>
          </template>
        </ResourceCard>
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
  computed: {
    endpoint() {
      return `/car/${this.$route.params.id}`
    },
  },
}
</script>
