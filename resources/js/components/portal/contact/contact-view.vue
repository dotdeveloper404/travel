<template>
  <form @submit.prevent="update" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>Contact Person Name:</h5>
            <label>{{ contact.name }}</label>
          </div>

          <div class="form-group">
            <h5>Contact Email:</h5>
            <label>{{ contact.email }}</label>
          </div>

          <div class="form-group">
            <h5>Phone :</h5>
            <label>{{ contact.subject }}</label>
          </div>

          <div class="form-group">
            <h5>Message :</h5>
            <label>{{ contact.message }}</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <a href="/portal/contact/" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</template>
  
  <script>
export default {
  props: ["contact"],
  data() {},
};
</script>
  
  