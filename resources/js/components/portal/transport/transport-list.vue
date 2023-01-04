<template>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Company</th>
          <th>Type</th>
          <th>Model</th>
          <th>Year</th>
          <th>Created Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in transportList" :key="item.id">
          <td>{{ item.id }}</td>
          <td>{{ item.company }}</td>
          <td>{{ item.type.replace('_',' ').toUpperCase() }}</td>
          <td>{{ item.model }}</td>
          <td>{{ item.made_year }}</td>
          <td>{{ moment(item.created_at).format('DD-MM-YYYY') }}</td>
          <td>
            <div class="btn-group" role="group">
              <button class="btn btn-danger" @click="deletetransport(item.id)">
                Delete
              </button>
              &nbsp;
              <a class="btn btn-primary" :href="'transport/' + item.id + '/edit'"
                >Edit</a
              >
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </template>
    
  <script>

import moment from "moment";


  export default {
    props: ["transports"],
  
    data() {
      return {
        transportList: [],
        moment : moment,
      };
    },

    filters:{
      replace : function(string){
        return string.replace('_',' ');
      }
    },
  
    mounted() {
      console.log("Component mounted.");
      this.transportList = this.transports;
    },
  
    methods: {
      deletetransport(id) {
        axios.delete(`/transport/${id}`).then((response) => {
          let i = this.transportList.map((data) => data.id).indexOf(id);
          this.transportList.splice(i, 1);
          alert("transport Deleted Successfully");
        });
      },
    },
  };
  </script>
  
  