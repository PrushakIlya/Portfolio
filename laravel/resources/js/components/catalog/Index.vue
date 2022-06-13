<template>
  <Popap id="popap" @updateCatalog="updateCatalog" :name="itemName" />
  <section class="admin_catalog_index">
    <div class="container">
      <table>
        <thead>
        <tr>
          <th>
            <div class="id">ID</div>
            <div>Name</div>
          </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in catalog">
          <td>
            <div class="id">{{item.id}}</div>
            <div>{{item.name}}</div>
          </td>
          <td>
            <button class="icon" @click="deleteCatalog(item.id)">
              <DeleteSvg/>
            </button>
            <a class="icon" href="#popap" @click="getIdName(item.id,item.name)">
              <UpdateSvg/>
            </a>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </section>
</template>

<script>
import axios from "axios";
import DeleteSvg from '../svg30px/DeleteSvg.vue'
import UpdateSvg from "../svg30px/UpdateSvg";
import Popap from '../popap/Popap.vue'

export default {
  name: "Index",
  data() {
    return {
      catalog: null,
      popapVisible: false,
      response: null,
      itemId: null,
      itemName: null,
    }
  },
  mounted() {
    this.getCatalog()
  },
  components: {
    DeleteSvg,
    UpdateSvg,
    Popap,
  },
  methods: {
    getCatalog() {
      axios
        .get('/api/admin/catalog')
        .then(response => this.catalog = response.data)
        .catch(error => {
          console.log(error)
        })
    },
    deleteCatalog(id) {
      if(window.confirm("Confirm DELETE")){
        axios
          .delete(`/api/admin/catalog/${id}`)
          .then(()=>{this.getCatalog()})
          .catch(error => (console.log(error)))
      }
    },
    updateCatalog(resp) {
      if(window.confirm('Confirm SAVE')){
        axios
          .put(`/api/admin/catalog/${this.itemId}`,{
            name: resp
          })
          .then(()=>{this.getCatalog()})
          .catch(error => (console.log(error)))
      }
    },
    getIdName(id,name){
      this.itemId = id;
      this.itemName = name;
    }
  }

}
</script>

<style scoped lang="sass">
.icon
  width: 30px
  margin-right: 10px


.icon:last-child
  margin-right: 0

.id
  width: 40px
  text-align: left
</style>