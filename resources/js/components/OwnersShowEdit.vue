<template>
  <ResourceCard :endpoint="endpoint">
    <template #title="{data}">
      <span v-if="data">{{ data.name }}</span>
    </template>
    <template #default="{data}">
      <pre v-if="data">{{ data }}</pre>
    </template>
  </ResourceCard>
</template>

<script>
import ResourceCard from './ResourceCard.vue'
export default {
  components: {
    ResourceCard,
  },
  computed: {
    endpoint() {
      return `/owner/${this.$route.params.id}`
    },
  },
}
</script>
