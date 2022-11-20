<template>
  <div>
    <button class="btn btn-primary" @click="show">View</button>
    <button class="btn btn-primary" @click="edit">Edit</button>
    <button class="btn btn-danger" @click="destroy">Delete</button>
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
    destroy() {
      if (window.confirm('Are you sure you want to delete this?')) {
        const resource = this.$route.name.substring(
          0,
          this.$route.name.length - 1
        )
        axios.delete(`/${resource}/${this.row.id}`).then(() => {
          // this.$emit('destroyed', this.row)
          this.$router.go()
        })
      }
    },
  },
}
</script>
