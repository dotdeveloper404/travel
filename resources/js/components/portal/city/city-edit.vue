  
    <template>
      <form @submit.prevent="update" class="form" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
             
              
              <div class="form-group">
                <h5>Select Country:</h5>
                <select v-model="city.country_id" class="form-control">
                  <option v-for="(item,item_index) in countries" :key="item_index" :value="item.id"> 
                    {{ item.name }}
                  </option>
    
                </select>
              </div>
    
              <div class="form-group">
                <h5>Name:</h5>
                <input
                  type="text"
                  required
                  v-model="city.name"
                  class="form-control form-control-solid"
                  placeholder="Enter city name"
                />
              </div>
     
          </div>
          </div>
        </div>
        <div class="card-footer">
          <button :disabled="isLoading" type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="/portal/city/" class="btn btn-secondary">Cancel</a>
    
          <div v-if="isLoading">
            <LoaderBar />
          </div>
          
        </div>
        
          <!-- Partial View VueJS -->
          <errors :errors="errors" :trimValue="'city.'"></errors>
    
      </form>
    </template>


  <script>

export default {
  props: ["cityData", "countries"],

  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      city: this.cityData,
      errors:[]
    };
  },
  methods: {
    
    update() {
      axios
        .post(
          `/city/${this.city.id}`,
          {
            _method: "PUT",
            city: this.city,
          },
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          }
        )
        .then((response) => {
          if (response.data.success) {
            window.location.href = "/portal/city";
          }
        })
        .catch((err) => {
          console.log(err.response.data.errors);
          this.errors = err.response.data.errors;
        })
        .finally(() => (this.loading = false));
    },
  },
};
</script>
    
    