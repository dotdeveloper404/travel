<template>
  <DataTable  :columns="columns"  :options="{select: true, search:true}"  id="package_table" class="table table-striped border rounded gy-5 gs-7">
    <thead>
      <tr>
        <th>ID</th>
        <th>Packge Name</th>
        <th>Package Type</th>
        <th>Product Type</th>
        <th>Nights</th>
        <th>Days</th>
        <th>Package Price</th>
        <th>Package Discount</th>
        <th>Total Amount</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in packageList" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.package_name }}</td>
        <td>{{ item.package_type.replace('_',' ').toUpperCase() }}</td>
        <td>{{ item.product_type.replace('_',' ').toUpperCase() }}</td>
        <td>{{ item.nights }}</td>
        <td>{{ item.days }}</td>
        <td>{{ item.package_price }}</td>
        <td>{{ item.discount }}</td>
        <td>{{ item.net_amount }}</td>
        <td>
          <div class="btn-group" role="group">
            <button class="btn btn-danger" @click="deletePackage(item.id)">
              Delete
            </button>
            &nbsp;
            <a class="btn btn-primary" :href="'package/' + item.id + '/edit'"
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
  props: ["packages"],

  data() {
    return {
      packageList: [],
    };
  },

  mounted() {
    console.log("Component mounted.");
    this.packageList = this.packages;
  },

  methods: {
    deletePackage(id) {
      axios.delete(`/package/${id}`).then((response) => {
        let i = this.packageList.map((data) => data.id).indexOf(id);
        this.packageList.splice(i, 1);
        alert("package Deleted Successfully");
      });
    },
  },
};
</script>

