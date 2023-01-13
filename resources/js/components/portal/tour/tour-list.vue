<template>
  <DataTable  :columns="columns"  :options="{select: true, search:true}"  id="tour_table" class="table table-striped border rounded gy-5 gs-7">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tour Name</th>
        <th>Tour Type</th>
        <th>Product Type</th>
        <th>Nights</th>
        <th>Days</th>
        <th>Tour Price</th>
        <th>Tour Discount</th>
        <th>Total Amount</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in tourList" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.tour_name }}</td>
        <td>{{ item.tour_type.replace('_',' ').toUpperCase() }}</td>
        <td>{{ item.product_type.replace('_',' ').toUpperCase() }}</td>
        <td>{{ item.nights }}</td>
        <td>{{ item.days }}</td>
        <td>{{ item.tour_price }}</td>
        <td>{{ item.discount }}</td>
        <td>{{ item.net_amount }}</td>
        <td>
          <div class="btn-group" role="group">
            <button v-if="item.status == 1 "  class="btn btn-success" @click="updateTour(item,1)">
              Active
            </button>
            <button v-if="item.status == 0 " class="btn btn-danger" @click="updateTour(item,0)">
              Inactive
            </button>
            &nbsp;
            <a class="btn btn-primary" :href="'tour/' + item.id + '/edit'"
              >Edit</a
            >
          </div>
        </td>
      </tr>
    </tbody>
  </DataTable >
</template>
  
<script>
 import DataTable from 'datatables.net-vue3'
 import DataTablesLib from 'datatables.net';
 DataTable.use(DataTablesLib);
export default {
  props: ["tours"],

  data() {
    return {
      tourList: [],
    };
  },

  mounted() {
    console.log("Component mounted.");
    this.tourList = this.tours;
  },

  methods: {
    updateTour(item,status)  {
      axios.delete(`/tour/${item.id}`).then((response) => {
        
        this.tourList.forEach((loop_item)=>{
            if(loop_item.id == item.id){
            loop_item.status  = status == 0 ? 1 : 0;
            }
        });

        // let i = this.tourList.map((data) => data.id).indexOf(id);
        // this.tourList.splice(i, 1);
        // alert("Tour Deleted Successfully");

      });
    },
  },
};
</script>

