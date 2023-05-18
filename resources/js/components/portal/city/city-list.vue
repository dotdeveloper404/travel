<template>
  <table class="table" id="d_table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in cityList" :key="item.id">
        <td>{{ item.id }}</td>
        <td class="capitalize">{{ item.name }}</td>
        <td>{{ moment(item.created_at).format("DD-MM-YYYY") }}</td>
        <td>
          <div class="btn-group" role="group">
            <button class="btn btn-danger" @click="deletecity(item.id)">
              Delete
            </button>
            &nbsp;
            <a class="btn btn-primary" :href="'city/' + item.id + '/edit'"
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
  props: ["cities"],

  data() {
    return {
      cityList: [],
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
    this.cityList = this.cities;
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
    deletecity(id) {
      axios.delete(`/city/${id}`).then((response) => {
        let i = this.cityList.map((data) => data.id).indexOf(id);
        this.cityList.splice(i, 1);
        alert("city Deleted Successfully");
      });
    },
  },
};
</script>
  
  