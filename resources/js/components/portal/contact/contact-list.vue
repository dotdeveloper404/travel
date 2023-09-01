<template>
  <table class="table table-striped border rounded gy-5 gs-7">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in this.contacts" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.name }}</td>
        <td>{{ item.email }}</td>
        <td>{{ item.subject }}</td>
        <td>
          <div class="btn-group" role="group">
            <button class="btn btn-danger" @click="deleteContact(item.id)">
              Delete
            </button>
            &nbsp;
            <a class="btn btn-primary" :href="'contact/' + item.id + '/edit'"
              >View</a
            >
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</template>
    
  <script>
export default {
  props: ["contacts"],

  data() {
    return {};
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    deleteContact(id) {
      axios.delete(`/contact/${id}`).then((response) => {
        let i = this.contacts.map((data) => data.id).indexOf(id);
        this.contacts.splice(i, 1);
        alert("contact Deleted Successfully");
      });
    },
  },
};
</script>
  
  