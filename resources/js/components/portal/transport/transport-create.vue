 
    <template>
  <form @submit.prevent="create" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <h5>Company:</h5>
            <input
              type="text"
              required
              v-model="transport.company"
              class="form-control form-control-solid"
              placeholder="Enter company"
            />
          </div>

          <div class="form-group">
            <h5>Type:</h5>
            <select v-model="transport.type" class="form-control">
              <option v-for="(item,item_index) in typeData" :key="item_index" :value="item_index">{{item.replace('_' , ' ')}}</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Description:</h5>
            <quill-editor
              toolbar="full"
              v-model:content="transport.description"
              theme="snow"
            ></quill-editor>
          </div>

          <div class="form-group">
            <h5>Model:</h5>
            <input
              type="text"
              required
              v-model="transport.model"
              class="form-control form-control-solid"
              placeholder="Enter model"
            />
          </div>

          <div class="form-group">
            <h5>Year:</h5>
            <input
              type="text"
              required
              v-model="transport.made_year"
              class="form-control form-control-solid"
              placeholder="Enter year"
            />
          </div>

          <div class="form-group">
            <h5>Milleage:</h5>
            <input
              type="text"
              required
              v-model="transport.mileage"
              class="form-control form-control-solid"
              placeholder="Enter mileage"
            />
          </div>

          <div class="form-group">
            <h5>Version:</h5>
            <input
              type="text"
              required
              v-model="transport.version"
              class="form-control form-control-solid"
              placeholder="Enter version"
            />
          </div>

          <div class="form-group">
            <h5>Horse Power:</h5>
            <input
              type="text"
              required
              v-model="transport.horse_power"
              class="form-control form-control-solid"
              placeholder="Enter version"
            />
          </div>

          <div class="form-group">
            <h5>Horse Power:</h5>
            <input
              type="text"
              required
              v-model="transport.horse_power"
              class="form-control form-control-solid"
              placeholder="Enter version"
            />
          </div>

          <div class="form-group">
            <h5>Condition:</h5>
            <input
              type="text"
              required
              v-model="transport.condition"
              class="form-control form-control-solid"
              placeholder="Enter condition"
            />
          </div>

          <div class="form-group">
            <h5>Amenities:</h5>
            <quill-editor
              toolbar="full"
              v-model:content="transport.amenities"
              theme="snow"
            ></quill-editor>
          </div>

          <div class="form-group">
            <h5>Luggage:</h5>
            <input
              type="text"
              required
              v-model="transport.luggage"
              class="form-control form-control-solid"
              placeholder="Enter luggage"
            />
          </div>

          <div class="form-group">
            <h5>Status:</h5>
            <select v-model="transport.status" class="form-control">
              <option value="1">Active</option>
              <option value="0">In Active</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <h5>Transport Images</h5>
            <div class="input-group input-group-lg">
              <upload-media server="/transport/uploadImage" @media="sendMe">
              </upload-media>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button :disabled="isLoading" type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/portal/transport/" class="btn btn-secondary">Cancel</a>

      <div v-if="isLoading">
        <LoaderBar />
      </div>
      
    </div>
    
      <!-- Partial View VueJS -->
      <errors :errors="errors" :trimValue="'transport.'"></errors>

  </form>
</template>

<script>
import "@vueup/vue-quill/dist/vue-quill.snow.css";

export default {
  mounted() {},
  props:['typeData'],
  data() {
    return {
      transport: {
        status: true,
      },
      isLoading:false,
      transportImages: [],
      errors:[],
    };
  },
  methods: {
    sendMe(images) {
      this.transportImages = [];
      images.forEach((image) => {
        this.transportImages.push(image.name);
      });
    },
    create() {
      this.isLoading=true;
      axios
        .post(
          "/transport",
          {
            transport: this.transport,
            images: this.transportImages,
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
            window.location.href = "/portal/transport";
            this.isLoading=false;
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


  