 
    <template>
  <form @submit.prevent="create" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <h5>Select City:</h5>
            <select v-model="destination.city_id" class="form-control capitalize">
              <option
                v-for="(item, item_index) in cities"
                :key="item_index"
                :value="item.id"
              >

                {{ item.name }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Name:</h5>
            <input
              type="text"
              required
              v-model="destination.name"
              class="form-control form-control-solid"
              placeholder="Enter destination name"
            />
          </div>

          <div class="form-group">
            <h5>Meta Title:</h5>
            <input
              type="text"
              v-model="destination.meta_title"
              class="form-control form-control-solid"
              placeholder="Enter destination meta title"
            />
          </div>

          <div class="form-group">
            <h5>Meta Description:</h5>
            <input
              type="text"
              v-model="destination.meta_description"
              class="form-control form-control-solid"
              placeholder="Enter destination meta description"
            />
          </div>

          <div class="form-group">
            <h5>Top Place:</h5>
            <select class="form-control" v-model="destination.top">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Content:</h5>
            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="destination.content"
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
      <a href="/portal/destination/" class="btn btn-secondary">Cancel</a>

      <div v-if="isLoading">
        <LoaderBar />
      </div>
    </div>

    <!-- Partial View VueJS -->
    <errors :errors="errors" :trimValue="'destination.'"></errors>
  </form>
</template>


<script>
import Editor from "@tinymce/tinymce-vue";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

import htmlEditButton from "quill-html-edit-button";

export default {
  mounted() {},
  props: ["cities"],
  components: { Editor },
  data() {
    return {
      destination: {},
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
          "/destination",
          {
            destination: this.destination,
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
            window.location.href = "/portal/destination";
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


  