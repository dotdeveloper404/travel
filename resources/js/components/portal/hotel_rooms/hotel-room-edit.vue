<template>
  <form @submit.prevent="update" class="form">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>Hotel Name:</h5>
            <input
              type="text"
              required
              v-model="hotel.name"
              class="form-control form-control-solid"
              placeholder="Enter name"
            />
            <!-- <span class="form-text text-muted">Please enter your full name</span> -->
          </div>

          <div class="form-group">
            <h5>Stars:</h5>
            <input
              type="number"
              required
              v-model="hotel.stars"
              class="form-control form-control-solid"
              placeholder="1,2,3,4,5 stars"
            />
          </div>

          <div class="form-group">
            <h5>Type:</h5>
            <select v-model="hotel.type" class="form-control">
                <option  value="0">None</option>
                <option  value="1">Featured</option>
                <option  value="2">Top Rated</option>
                <option  value="3">Best Seller</option>
            </select>
          </div>

          

          <div class="form-group">
            <h5>Description</h5>
            <div class="">
              <quill-editor v-model:content="hotel.description" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
             
            </div>
          </div>

          <div class="form-group">
            <h5>City</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="hotel.city"
                class="form-control form-control-solid"
              />
            </div>
          </div>
          <div class="form-group">
            <h5>State</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="hotel.state"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Country</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="hotel.country"
                class="form-control form-control-solid"
              />
            </div>
          </div>

       

          <div class="form-group">
            <h5>Property Info</h5>
            <div class="">
              <quill-editor v-model:content="hotel.property_info" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Main Amenities</h5>
            <div class="">
            
              <quill-editor v-model:content="hotel.main_amenities" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>About this area</h5>
            <div class="">
             
              <quill-editor v-model:content="hotel.about_this_area" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>
        </div>

        <div class="col-md-6">

          <div class="form-group">
            <h5>Contact #1</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="hotel.contact_no_1"
                class="form-control form-control-solid"
              />
            </div>
          </div>
          
          <div class="form-group">
            <h5>Contact #2</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                v-model="hotel.contact_no_2"
                class="form-control form-control-solid"
              />

            </div>
          </div>

          <div class="form-group">
            <h5>About this property</h5>
            <div class="">
           
              <quill-editor v-model:content="hotel.about_this_property" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>At a glance</h5>
            <div class="">
              <quill-editor v-model:content="hotel.at_a_glance" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Property amenities</h5>
            <div class="">
           
              <quill-editor v-model:content="hotel.property_amenities" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Room amenities</h5>
            <div class="">
              
              <quill-editor v-model:content="hotel.room_amenities" toolbar="full"  contentType="html"  theme="snow"></quill-editor>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <h5>Hotel Images</h5>
            <div class="input-group input-group-lg">
              <update-media
                server="/hotel/uploadImage"
                media-file-path="/storage/uploads/hotel_images"
                :media-server="'/hotel/media/' + this.hotel.id"
                @added-media="addedMedia"
                @deleted-media="deletedMedia"
                @saved-media = "savedMedia"
              >
              </update-media>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Update</button>
      <a href="/portal/hotel/" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</template>
  
  <script>

import '@vueup/vue-quill/dist/vue-quill.snow.css';

export default {
  props: ["hotelData"],

  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      hotel: this.hotelData,
      hotelImages: this.hotelData.images,
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
          `/hotel/${this.hotel.id}`,
          {
            _method : 'PUT',
            hotel: this.hotel,
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
            window.location.href = "/portal/hotel";
          }
        })
        .catch((err) => console.log(err))
        .finally(() => (this.loading = false));
    },
  },
};
</script>
  
  