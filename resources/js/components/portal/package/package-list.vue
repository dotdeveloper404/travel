<template>
  <table
    id="package_table"
    class="table table-striped border rounded gy-5 gs-7"
  >
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
        <td>{{ item.package_type.replace("_", " ").toUpperCase() }}</td>
        <td>{{ item.product_type.replace("_", " ").toUpperCase() }}</td>
        <td>{{ item.nights }}</td>
        <td>{{ item.days }}</td>
        <td>{{ item.package_price }}</td>
        <td>{{ item.discount }}</td>
        <td>{{ item.net_amount }}</td>
        <td class="btn-group" role="group">
          <button
            v-if="item.status == 1"
            class="btn btn-success"
            @click="updatePackage(item, 1)"
          >
            Active
          </button>
          <button
            v-if="item.status == 0"
            class="btn btn-danger"
            @click="updatePackage(item, 0)"
          >
            Inactive
          </button>
          &nbsp;
          <a class="btn btn-primary" :href="'package/' + item.id + '/edit'"
            >Edit</a
          >
        </td>
      </tr>
    </tbody>
  </table>
</template>
  
<script>
import "jquery/dist/jquery.min.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import $ from "jquery";

export default {
  props: ["packages"],

  data() {
    return {
      packageList: [],
      users: [],
      dtRef: null,
    };
  },

  mounted() {
    console.log("Component mounted.");
    // swal('Success', 'Package Deleted Successfully', 'Success');
    this.packageList = this.packages;

    setTimeout(() => {
      $("#package_table").DataTable({
        lengthMenu: [
          [5, 10, 25, 50, -1],
          [5, 10, 25, 50, "All"],
        ],
        pageLength: 10,
      });
    });
  },

  methods: {
    updatePackage(item, status) {
      axios.delete(`/package/${item.id}`).then((response) => {
        this.packageList.forEach((loop_item) => {
          if (loop_item.id == item.id) {
            loop_item.status = status == 0 ? 1 : 0;
          }
        });

        // swal('Success', 'Package Deleted Successfully', 'Success');
      });
    },
  },
};
</script>

