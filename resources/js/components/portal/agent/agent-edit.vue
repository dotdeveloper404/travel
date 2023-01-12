<template>
  <form @submit.prevent="update" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>Agent Name:</h5>
            <input
              type="text"
              required
              v-model="agent.name"
              class="form-control form-control-solid"
              placeholder="Enter agent name"
            />
          </div>

          <div class="form-group">
            <h5>Email:</h5>
            <input
              type="text"
              required
              v-model="agent.email"
              class="form-control form-control-solid"
              placeholder="Enter email address"
            />
          </div>

          <div class="form-group">
            <h5>Agent Password:</h5>
            <input
              type="password"
              v-model="agent.password"
              class="form-control form-control-solid"
              placeholder="Enter agent password"
            />
          </div>

          <div class="form-group">
            <h5>Status:</h5>
            <select v-model="agent.status" class="form-control">
              <option value="1">Active</option>
              <option value="0">In Active</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/portal/agent/" class="btn btn-secondary">Cancel</a>
    </div>
     <!-- Partial View VueJS -->
     <errors :errors="errors" :trimValue="'agent.'"></errors>

  </form>
</template>
  
  <script>
export default {
  props: ["agent"],
  data() {},
  methods: {
    update() {
      axios
        .post(
            `/agent/${this.agent.id}`,
          {
            _method: "PUT",
            agent: this.agent,
          },
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
            _token: csrfToken,
          }
        )
        .then((response) => {
          if (response.data.success) {
            window.location.href = "/portal/agent";
          }
        })
        .catch((err) => console.log(err))

        .finally(() => (this.loading = false));
    },
  },
};
</script>
  
  