
    <template>
  <form @submit.prevent="update" class="form" enctype="multipart/form-data">
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
            <input
              type="file"
              name="image"
              class="form-control"
              @change="handleFileUpload"
            />
            <img style="height: 100px" :src="country.image_path" />
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

import htmlEditButton from "quill-html-edit-button";

export default {
  props: ["countryData"],
  components: { Editor },
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      country: this.countryData,
      image : "",
      errors: [],
    };
  },
  setup: () => {
    const modules = {
      name: "htmlEditButton",
      module: htmlEditButton,
      options: {
        debug: true,
      },
    };

    return { modules };
  },
  methods: {
    handleFileUpload(event) {
      this.image = event.target.files[0];
    },

    update() {
      axios
        .post(
          `/country/${this.country.id}`,
          {
            _method: "PUT",
            country: this.country,
            image : this.image,
          },
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          }
        )
        .then((response) => {
          if (response.data.success) {
            window.location.href = "/portal/country";
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

