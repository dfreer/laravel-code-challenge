import Owners from './components/Owners.vue'
import OwnersShowEdit from './components/OwnersShowEdit.vue'
import Addresses from './components/Addresses.vue'
import AddressShowEdit from './components/AddressShowEdit.vue'
import Cars from './components/Cars.vue'
import CarsShowEdit from './components/CarsShowEdit.vue'

export const routes = [
  {
    name: 'owners',
    path: '/owners',
    component: Owners,
  },
  {
    name: 'owners.show',
    path: '/owners/:id',
    component: OwnersShowEdit,
  },
  {
    name: 'owners.edit',
    path: '/owners/:id/edit',
    component: OwnersShowEdit,
  },
  {
    name: 'addresses',
    path: '/addresses',
    component: Addresses,
  },
  {
    name: 'addresses.show',
    path: '/addresses/:id',
    component: AddressShowEdit,
  },
  {
    name: 'addresses.edit',
    path: '/addresses/:id/edit',
    component: AddressShowEdit,
  },
  {
    name: 'cars',
    path: '/cars',
    component: Cars,
  },
  {
    name: 'cars.show',
    path: '/cars/:id',
    component: CarsShowEdit,
  },
  {
    name: 'cars.edit',
    path: '/cars/:id/edit',
    component: CarsShowEdit,
  },
]
