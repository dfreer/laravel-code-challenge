<template>
  <div>
    <button class="btn btn-primary" @click="show">View</button>
    <button class="btn btn-primary" @click="edit">Edit</button>
    <button class="btn btn-danger" @click="$emit('destroy', row)">
      Delete
    </button>
  </div>
</template>

<script>
export default {
  props: {
    row: { type: Object },
  },
  methods: {
    show() {
      this.$router.push({
        name: `${this.$route.name}.show`,
        params: { id: this.row.id },
      })
    },
    edit() {
      this.$router.push({
        name: `${this.$route.name}.edit`,
        params: { id: this.row.id },
      })
    },
  },
}
</script>
