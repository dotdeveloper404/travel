<template>
  <table id="tour_table" class="table table-striped border rounded gy-5 gs-7">
    <thead>
      <tr>
        <th>ID</th>
        <th>tour Name</th>
        <th>tour Type</th>
        <th>Product Type</th>
        <th>Nights</th>
        <th>Days</th>
        <th>tour Price</th>
        <th>tour Discount</th>
        <th>Total Amount</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in tourList" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.tour_name }}</td>
        <td>{{ item.tour_type.replace("_", " ").toUpperCase() }}</td>
        <td>{{ item.product_type.replace("_", " ").toUpperCase() }}</td>
        <td>{{ item.nights }}</td>
        <td>{{ item.days }}</td>
        <td>{{ item.tour_price }}</td>
        <td>{{ item.discount }}</td>
        <td>{{ item.net_amount }}</td>
        <td class="btn-group" role="group">
          <button
            v-if="item.status == 1"
            class="btn btn-success"
            @click="updateTour(item, 1)"
          >
            Active
          </button>
          <button
            v-if="item.status == 0"
            class="btn btn-danger"
            @click="updateTour(item, 0)"
          >
            Inactive
          </button>
          &nbsp;
          <a class="btn btn-primary" :href="'tour/' + item.id + '/edit'"
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
  props: ["tours"],

  data() {
    return {
      tourList: [],
      users: [],
      dtRef: null,
    };
  },

  mounted() {
    console.log("Component mounted.");
    // swal('Success', 'tour Deleted Successfully', 'Success');
    this.tourList = this.tours;

    setTimeout(() => {
      $("#tour_table").DataTable({
        lengthMenu: [
          [5, 10, 25, 50, -1],
          [5, 10, 25, 50, "All"],
        ],
        pageLength: 10,
      });
    });
  },

  methods: {
    updateTour(item, status) {
      axios.delete(`/tour/${item.id}`).then((response) => {
        this.tourList.forEach((loop_item) => {
          if (loop_item.id == item.id) {
            loop_item.status = status == 0 ? 1 : 0;
          }
        });

        // swal('Success', 'tour Deleted Successfully', 'Success');
      });
    },
  },
};
</script>

