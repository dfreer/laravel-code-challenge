<template>
  <div>
    <bootstrap-4-datatable
      :columns="columns"
      :data="rows"
      :filter="filter"
      :per-page="perPage"
      class="table-bordered"
    ></bootstrap-4-datatable>
    <bootstrap-4-datatable-pager
      v-model="page"
      type="abbreviated"
    ></bootstrap-4-datatable-pager>
  </div>
</template>

<script>
import TableButtonsComponent from './TableButtonsComponent'

export default {
  data() {
    return {
      columns: [
        {
          label: 'ID',
          field: 'id',
          align: 'center',
        },
        {
          label: 'Owner',
          field: 'owner.name',
          headerAlign: 'left',
          align: 'left',
        },
        {
          label: '# Cars',
          field: 'cars_count',
          headerAlign: 'left',
          align: 'left',
        },
        {
          label: 'Address',
          field: 'address',
          headerAlign: 'left',
          align: 'left',
          interpolate: true,
          representedAs: (address) => {
            return this.$formatAddress(address)
          },
        },
        {
          label: 'Actions',
          headerAlign: 'right',
          align: 'right',
          component: TableButtonsComponent,
        },
      ],
      rows: [],
      page: 1,
      filter: '',
      perPage: 20,
      loading: true,
    }
  },
  methods: {
    showAddresses: function() {
      axios.get('/address').then(
        function(res) {
          this.rows = res.data.map((o) => ({ ...o, type: 'address' }))
        }.bind(this)
      )
    },
  },
  created: function() {
    this.showAddresses()
  },
}
</script>
