<template>
  <table class="table table-striped border rounded gy-5 gs-7">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in this.agents" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.name }}</td>
        <td>{{ item.email }}</td>
        <td>
          <div class="btn-group" role="group">
            <button class="btn btn-danger" @click="deleteAgent(item.id)">
              Delete
            </button>
            &nbsp;
            <a class="btn btn-primary" :href="'agent/' + item.id + '/edit'"
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
  props: ["agents"],

  data() {
    return {};
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    deleteAgent(id) {
      axios.delete(`/agent/${id}`).then((response) => {
        let i = this.agents.map((data) => data.id).indexOf(id);
        this.agents.splice(i, 1);
        alert("agent Deleted Successfully");
      });
    },
  },
};
</script>
  
  