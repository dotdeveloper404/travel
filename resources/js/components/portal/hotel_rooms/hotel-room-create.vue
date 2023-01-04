<template>
  <form @submit.prevent="create" class="form" enctype="multipart/form-data">
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
          </div>

          <div class="form-group">
            <h5>Stars :</h5>
            <input
              type="number"
              :max="5"
              :min="1"
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
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.description" theme="snow"></quill-editor>
           
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
              
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.property_info" theme="snow"></quill-editor>
           
            </div>
          </div>

          <div class="form-group">
            <h5>Main Amenities</h5>
            <div class="">
           
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.main_amenities" theme="snow"></quill-editor>
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
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.about_this_property" theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>At a glance</h5>
            <div class="">
              
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.at_a_glance" theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Property amenities</h5>
            <div class="">
             
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.property_amenities" theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Room amenities</h5>
            <div class="">
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.room_amenities" theme="snow"></quill-editor>
            </div>
          </div>

          
          <div class="form-group">
            <h5>About this area</h5>
            <div class="">
             
              <quill-editor contentType="html" toolbar="full" v-model:content="hotel.about_this_area" theme="snow"></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Status:</h5>
            <select v-model="hotel.status" class="form-control">
                <option  value="1">Active</option>
                <option value="0">In Active</option>
            </select>
          </div>

        </div>

        <div class="col-md-12">
          <div class="form-group">
            <h5>Hotel Images</h5>
            <div class="input-group input-group-lg">
              <upload-media server="/hotel/uploadImage" @media="sendMe">
              </upload-media>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/portal/hotel/" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</template>

<script>

import '@vueup/vue-quill/dist/vue-quill.snow.css';


export default {

  mounted() {
    console.log("Component mounted.");
  },
  
  props:['hotelId'],


  data() {
    return {
      hotel: {
        status : 1
      },
      hotelImages: [],
    };
  },
  methods: {
    sendMe(images) {
      // console.log('send', images);
      // this.$emit('media-images',images);
      this.hotelImages = [];
      images.forEach((image) => {
        this.hotelImages.push(image.name);
      });
      // this.hotelImages = images.name;
    },
    create() {
      axios
        .post(
          "/hotel",
          {
            hotel: this.hotel,
            images: this.hotelImages,
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
            window.location.href = "/portal/hotel";
          }
        })
        .catch((err) => console.log(err))
        .finally(() => (this.loading = false));
    },
  },
};
</script>

