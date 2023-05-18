<template>
  
  

  <table class="table" id="d_table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Created Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in destinationList" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.name }}</td>
        <td>{{ item.city.name }}</td>
        <td>{{ moment(item.created_at).format("DD-MM-YYYY") }}</td>
        <td>
          <div class="btn-group" role="group">
            <button class="btn btn-danger" @click="deletedestination(item.id)">
              Delete
            </button>
            &nbsp;
            <a
              class="btn btn-primary"
              :href="'destination/' + item.id + '/edit'"
              >Edit</a
            >
          </div>
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
import moment from "moment";

export default {
  props: ["destinations"],

  data() {
    return {
      destinationList: [],
      moment: moment,
    };
  },

  filters: {
    replace: function (string) {
      return string.replace("_", " ");
    },
  },

  mounted() {
    console.log("Component mounted.");
    this.destinationList = this.destinations;
    setTimeout(() => {
      $("#d_table").DataTable({
        lengthMenu: [
          [5, 10, 25, 50, -1],
          [5, 10, 25, 50, "All"],
        ],
        pageLength: 10,
      });
    });
  },

  methods: {
    deletedestination(id) {
      axios.delete(`/destination/${id}`).then((response) => {
        let i = this.destinationList.map((data) => data.id).indexOf(id);
        this.destinationList.splice(i, 1);
        alert("destination Deleted Successfully");
      });
    },
  },
};
</script>
  
  