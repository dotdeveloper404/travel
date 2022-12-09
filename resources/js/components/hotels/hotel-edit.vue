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
            <h5>Description</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.description"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
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
            <h5>Property Info</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.property_info"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Main Amenities</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.main_amenities"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>About this area</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.about_this_area"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
            </div>
          </div>
        </div>

        <div class="col-md-6">
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
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.about_this_property"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>At a glance</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.at_a_glance"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Property amenities</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.property_amenities"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Room amenities</h5>
            <div class="input-group input-group-lg">
              <editor
                v-model="hotel.room_amenities"
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              />
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
import Editor from "@tinymce/tinymce-vue";

export default {
  props: ["hotelData"],

  components: {
    editor: Editor,
  },

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
          `/hotel/updateHotel/${this.hotel.id}`,
          {
            hotel: this.hotel,
            deletedImages: this.deletedImages,
            addedImages: this.addedImages,
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
  
  