 
    <template>
        <form @submit.prevent="update" class="form" enctype="multipart/form-data">
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
                    <option v-for="(item,item_index) in typeData" :key="item_index" :value="item_index"  >{{item.replace('_' , ' ')}}</option>
                  </select>
                </div>
      
                <div class="form-group">
                  <h5>Description:</h5>
                  <quill-editor toolbar="full"  contentType="html" v-model:content="transport.description" theme="snow"></quill-editor>
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
                  <quill-editor toolbar="full" v-model:content="transport.amenities"  contentType="html" theme="snow"></quill-editor>
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
                    <update-media
                server="/transport/uploadImage"
                media-file-path="/storage/uploads/transport_images"
                :media-server="'/transport/media/' + this.transport.id"
                @added-media="addedMedia"
                @deleted-media="deletedMedia"
                @saved-media="savedMedia"
              >
              </update-media>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="/portal/transport/" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </template>
     
  <script>

  import '@vueup/vue-quill/dist/vue-quill.snow.css';
  
  export default {
    props: ["transportData","typeData"],
  
    mounted() {
      console.log("Component mounted.");
    },
    data() {
      return {
        transport: this.transportData,
        transportImages: this.transportData.images,
        deletedImages: [],
        addedImages: [],
        savedImages : [],
      }
      ;
    },
    methods: {
      addedMedia(images) {
        console.log("added media" + images);
        images.forEach((image) => {
              this.addedImages.push(image.name);
        });
      },
      deletedMedia(images) {
        console.log("deleted media" + images);
          images.forEach((image)=>{
              this.deletedImages.push(image.name);
          });
      },
      savedMedia(images){
        console.log('saved media' + images)
      },
      update() {
        axios
          .post(
            `/transport/${this.transport.id}`,
            {
              _method : 'PUT',
              transport: this.transport,
              deletedImages: this.deletedImages,
              addedImages: this.addedImages,
            },
            {
              headers: {
                "Content-Type": "multipart/form-data",
              },
            
           
            }
          )
          .then((response) => {
            if (response.data.success) {
              window.location.href = "/portal/transport";
            }
          })
          .catch((err) => console.log(err))
          .finally(() => (this.loading = false));
      },
    },
  };
  </script>
    
    