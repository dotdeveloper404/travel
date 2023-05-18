 
    <template>
  <form @submit.prevent="create" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
         

          <div class="form-group">
            <h5>Name:</h5>
            <input
              type="text"
              required
              v-model="country.name"
              class="form-control form-control-solid"
              placeholder="Enter country name"
            />
          </div>

          <div class="form-group">
            <h5>Associate City:</h5>
            <input
              type="text"
              v-model="country.capital"
              class="form-control form-control-solid"
              placeholder=""
            />
          </div>

          <div class="form-group">
            <h5>Meta Title:</h5>
            <input
              type="text"
              v-model="country.meta_title"
              class="form-control form-control-solid"
              placeholder="Enter country meta title"
            />
          </div>

          <div class="form-group">
            <h5>Meta Description:</h5>
            <input
              type="text"
              v-model="country.meta_description"
              class="form-control form-control-solid"
              placeholder="Enter country meta description"
            />
          </div>

          <div class="form-group">
            <h5>Top Country:</h5>
            <select class="form-control" v-model="country.top">
              <option value="1">1</option>
              <option value="0">0</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Content:</h5>
            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="country.content"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                // toolbar: 'pageembed code preview',
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>Image:</h5>
            <input type="file" name="image" 
            @change="handleFileUpload"
            
            class="form-control" />
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button :disabled="isLoading" type="submit" class="btn btn-primary mr-2">
        Submit
      </button>
      <a href="/portal/country/" class="btn btn-secondary">Cancel</a>

      <div v-if="isLoading">
        <LoaderBar />
      </div>
    </div>

    <!-- Partial View VueJS -->
    <errors :errors="errors" :trimValue="'country.'"></errors>
  </form>
</template>


<script>
import Editor from "@tinymce/tinymce-vue";
import "@vueup/vue-quill/dist/vue-quill.snow.css";


export default {
  mounted() {},
  components: { Editor },
  data() {
    return {
      country: {},
      isLoading: false,
      image: "",
      errors: [],
    };
  },
  methods: {
    handleFileUpload(e){
      this.image = e.target.files[0]
    },
    create() {
      this.isLoading = true;
      axios
        .post(
          "/country",
          {
            country: this.country,
            image: this.image,
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
            window.location.href = "/portal/country";
            this.isLoading = false;
          }
        })
        .catch((err) => {
          console.log(err.response.data.errors);
          this.errors = err.response.data.errors;
        })
        .finally(() => (this.isLoading = false));
    },
  },
};
</script>


  