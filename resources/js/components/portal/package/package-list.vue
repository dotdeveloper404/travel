<template>
  <table   id="package_table" class="table table-striped border rounded gy-5 gs-7">
    <thead>
      <tr>
        <th>ID</th>
        <th>Package Name</th>
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
  </table>
</template>
  
<script>
export default {
  props: ["packages"],

  data() {
    return {
      packageList: [],
    };
  },

  mounted() {
    console.log("Component mounted.");
    // swal('Success', 'Package Deleted Successfully', 'Success');
    this.packageList = this.packages;
  },

  methods: {

    deletePackage(id) {
      axios.delete(`/package/${id}`).then((response) => {
        let i = this.packageList.map((data) => data.id).indexOf(id);
        this.packageList.splice(i, 1);
        swal('Success', 'Package Deleted Successfully', 'Success');
      });
    },
  },
};
</script>

