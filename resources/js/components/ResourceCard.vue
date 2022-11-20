<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <slot name="title" :data="data" />
          </div>
          <div class="card-body">
            <slot :data="data" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    endpoint: { type: String, required: true },
  },
  data() {
    return {
      data: null,
    }
  },
  methods: {
    fetch() {
      return axios.get(this.endpoint).then(({ data }) => {
        this.data = data
      })
    },
  },
  mounted() {
    this.fetch()
  },
}
</script>
