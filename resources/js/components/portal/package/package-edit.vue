<template>
  <form @submit.prevent="update" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>Meta Title:</h5>
            <input
              type="text"
              v-model="packages.meta_title"
              class="form-control form-control-solid"
              placeholder="Enter Meta Title"
            />
          </div>
          <div class="form-group">
            <h5>Meta Description:</h5>
            <input
              type="text"
              v-model="packages.meta_description"
              class="form-control form-control-solid"
              placeholder="Enter Meta Description"
            />
          </div>
          
          <div class="form-group">
            <h5>Package Name:</h5>
            <input
              type="text"
              required
              v-model="packages.package_name"
              class="form-control form-control-solid"
              placeholder="Enter Package name"
            />
          </div>

          <div class="form-group">
            <h5>Description</h5>
            <div class="">
              <editor
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
                v-model="packages.description"
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
          </div>

          <div class="form-group">
            <h5>Featured Image</h5>
            <div class="input-group input-group-lg">
              <input
                type="file"
                ref="file"
                @change="handleFileUpload"
                class="form-control form-control-solid"
              />
              <img style="height: 100px" :src="packages.image_path" />
            </div>
          </div>

          <div class="form-group">
            <h5>Package Type:</h5>
            <select
              required
              v-model="packages.package_type"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in packageType"
                :key="item_index"
                :value="item_index"
              >
                {{ item.replace(/[#_]/g, " ") }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Package Speciality:</h5>
            <select
              required
              v-model="packages.product_type"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in productType"
                :key="item_index"
                :value="item_index"
              >
                {{ item.replace(/[#_]/g, " ") }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Languages:</h5>
            <select
              required
              multiple
              v-model="packages.languages"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in languages"
                :key="item_index"
                :value="item_index"
              >
                {{ item.replace(/[#_]/g, " ") }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Recomended:</h5>
            <select required v-model="packages.recomended" class="form-control">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Duration:</h5>
            <select
              required
              v-model="packages.duration"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in duration"
                :key="item_index"
                :value="item_index"
              >
                {{ item.replace(/[#_]/g, " ") }}
              </option>
            </select>
          </div>


          <div class="form-group">
            <h5>Deals & Discount:</h5>
            <select
              required
              v-model="packages.deals_and_discount"
              class="form-control"
            >
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Free Cancelation:</h5>
            <select
              required
              v-model="packages.free_cancelation"
              class="form-control"
            >
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Group Type:</h5>
            <select
              required
              v-model="packages.group_type"
              class="form-control"
            >
              <option value="Private">Private</option>
              <option value="Group">Group</option>
            </select>
          </div>


          <div class="form-group">
            <h5>
              Select Hotels:
              <label class="lbl_select_hotels">
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_hotel_included"
                />
                Included ?</label
              >
            </h5>
            <select
              multiple
              required
              v-model="package_hotel"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in hotels"
                :key="item_index"
                :value="item.id"
              >
                {{ item.name }}
              </option>
            </select>
          </div>
          <!-- :selected="inArray(item, packages.transports)" -->
          <div class="form-group">
            <h5>
              Select Transports:
              <label class="lbl_select_transports"
                ><input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_transport_included"
                />Included ?</label
              >
            </h5>

            <select
              multiple
              required
              v-model="package_transport"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in transports"
                :key="item_index"
                :value="item.id"
              >
                {{ item.company }} - {{ item.model }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Nights</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="packages.nights"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Days</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="packages.days"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Stars</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                placeholder="1 to 5"
                v-model="packages.stars"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Reviews</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                placeholder="enter any random number for reviews"
                v-model="packages.reviews"
                class="form-control form-control-solid"
              />
            </div>
          </div>

            <div class="form-group">
            <h5>City</h5>
            <div class="">
              <select multiple v-model="packages.city" class="form-control">
                  <option v-for="(item,item_index) in cities" :key="item_index" :value="item.name">
                  {{ item.name}}
                  </option>

              </select>
            </div>
          </div>
 

          <div class="form-group">
            <h5>Season</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="packages.seasonality"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <!-- <div class="form-group">
            <h5>Features</h5>
            <div class="">
              <editor
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
                v-model="packages.features"
                :init="{
                  height: 500,
                  menubar: false,
                  plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount',
                  ],
                  toolbar:
                    'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
                }"
              />

            </div>
          </div> -->

          <div class="form-group">
            <h5>
              Visa
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_visa_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.visa"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>
              Meals
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_meals_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.meals"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>
              Optional
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_optional_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.optional"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <h5>Traveling Start Date</h5>
            <div class="input-group input-group-lg">
              <input
                type="date"
                required
                v-model="packages.traveling_date_start"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Traveling End Date</h5>
            <div class="input-group input-group-lg">
              <input
                type="date"
                required
                v-model="packages.traveling_date_end"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Package Location (Put iframe from google map)</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                v-model="packages.location_map"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Package Price</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="packages.package_price"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Package Discount</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="packages.discount"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Package Price After Discount</h5>
            <div class="input-group input-group-lg">
              <input
                style="border: 1px solid red"
                disabled
                type="number"
                :value="calculateTotalAmount"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>
              Acommodation
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_acommodation_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.acommodation"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>
              Guide
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_guide_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.guide"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>
              Additional Services
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_additional_services_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.additional_services"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>
              Insurance
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_insurance_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.insurance"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>
              Flights
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="packages.is_flights_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.flights"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>Important Information</h5>
            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="packages.more_information"
              :init="{
                height: 500,
                menubar: false,
                plugins: [
                  'advlist autolink lists link image charmap print preview anchor',
                  'searchreplace visualblocks code fullscreen',
                  'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                  'pageembed code preview | undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help',
              }"
            />
          </div>

          <div class="form-group">
            <h5>Status:</h5>
            <select v-model="packages.status" class="form-control">
              <option value="1">Active</option>
              <option value="0">In Active</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body">
            ADD NEW ITENARY<i
              class="fa fa-plus pull-right"
              @click="addRow"
              style="font-size: 25px; color: #337ab7; cursor: pointer"
            ></i>
            <table class="table table-bordered">
              <thead class="text text-success">
                <tr>
                  <th>Day</th>
                  <th>Detail</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(itenary, index) in itenaries" :key="index">
                  <td>
                    <input
                      v-model="itenary.day"
                      class="form-control"
                      type="text"
                    />
                  </td>
                  <td>
                    <input
                      v-model="itenary.detail"
                      class="form-control"
                      type="text"
                    />
                  </td>

                  <td>
                    <i
                      @click="deleteRow(index)"
                      class="fa fa-remove"
                      style="font-size: 25px; color: red; cursor: pointer"
                    ></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <h5>Package Images</h5>
            <div class="input-group input-group-lg">
              <update-media
                server="/package/uploadImage"
                media-file-path="/storage/uploads/package_images"
                :media-server="'/package/media/' + this.packages.id"
                @added-media="addedMedia"
                @deleted-media="deletedMedia"
                @saved-media="savedMedia"
              >
              </update-media>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body">
            ADD NEW FAQs<i
              class="fa fa-plus pull-right"
              @click="addFaqRow"
              style="font-size: 25px; color: #337ab7; cursor: pointer"
            ></i>
            <table class="table table-bordered">
              <thead class="text text-success">
                <tr>
                  <th>Question</th>
                  <th>Answer</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(faq, index) in faqs" :key="index">
                  <td>
                    <input
                      v-model="faq.question"
                      class="form-control"
                      type="text"
                    />
                  </td>
                  <td>
                    <input
                      v-model="faq.answer"
                      class="form-control"
                      type="text"
                    />
                  </td>

                  <td>
                    <i
                      @click="deleteFaqRow(index)"
                      class="fa fa-remove"
                      style="font-size: 25px; color: red; cursor: pointer"
                    ></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body">
            ADD NEW DESTINATION<i
              class="fa fa-plus pull-right"
              @click="addDestinationRow"
              style="font-size: 25px; color: #337ab7; cursor: pointer"
            ></i>
            <table class="table table-bordered">
              <thead class="text text-success">
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(destination, index) in destinations" :key="index">
                  <td>
                    <input
                      v-model="destination.name"
                      class="form-control"
                      type="text"
                    />
                  </td>
                  <td>
                    <input
                      v-model="destination.description"
                      class="form-control"
                      type="text"
                    />
                  </td>

                  <td>
                    <i
                      @click="deleteDestinationRow(index)"
                      class="fa fa-remove"
                      style="font-size: 25px; color: red; cursor: pointer"
                    ></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button :disabled="isLoading" type="submit" class="btn btn-primary mr-2">
        Submit
      </button>
      <a href="/portal/package/" class="btn btn-secondary">Cancel</a>
      <div v-if="isLoading">
        <LoaderBar />
      </div>
      <!-- Partial View VueJS -->
      <errors :errors="errors" :trimValue="'package.'"></errors>
    </div>
  </form>
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import htmlEditButton from "quill-html-edit-button";

export default {
  props: [
    "packageData",
    "packageType",
    "productType",
    "languages",
    "hotels",
    "transports",
    'duration',
    'cities',
  ],
  components: { Editor },
  mounted() {
    console.log("Component mounted.");
    // console.log(this.packageData.itenary);
    this.packages.hotels.forEach((v, i) => {
      this.package_hotel.push(v.id);
    });
    this.packages.transports.forEach((v, i) => {
      this.package_transport.push(v.id);
    });
  },

  data() {
    return {
      packages: this.packageData,
      errors: [],
      isLoading: false,
      packageImages: [],
      featured_image: "",
      deletedImages: [],
      addedImages: [],
      savedImages: [],
      package_hotel: [],
      package_transport: [],
      itenaries:
        this.packageData.itenary == null
          ? [{ day: "", detail: "" }]
          : JSON.parse(this.packageData.itenary),

      faqs:
        this.packageData.faqs == null
          ? [{ question: "", answer: "" }]
          : JSON.parse(this.packageData.faqs),

      destinations:
        this.packageData.destinations == null
          ? [{ name: "", description: "" }]
          : JSON.parse(this.packageData.destinations),

      hotel_id: [],
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
  computed: {
    calculateTotalAmount: function () {
      let total = this.packages.package_price - this.packages.discount;
      this.packages.net_amount = total;
      return total;
    },

    //   package_hotels: function () {
    //  let  p = this.packages.hotels;
    //     let rows = [];
    //     p.forEach(function (v, i) {
    //       rows.push(v.pivot.hotel_id);
    //     });

    //     return rows;
    //   },

    //   package_transports: function () {
    //  let  p = this.packages.transports;
    //     let rows = [];
    //     p.forEach(function (v, i) {
    //       rows.push(v.pivot.transport_id);
    //     });

    //     return rows;
    //   },
  },

  methods: {
    handleFileUpload(event) {
      this.featured_image = event.target.files[0];
      console.log(event.target.files[0]);
    },

    addedMedia(images) {
      console.log("added media" + images);
      images.forEach((image) => {
        this.addedImages.push(image.name);
      });
    },
    deletedMedia(images) {
      console.log("deleted media" + images);
      images.forEach((image) => {
        this.deletedImages.push(image.name);
      });
    },
    savedMedia(images) {
      console.log("saved media" + images);
    },
    addRow: function () {
      this.itenaries.push({ day: "", detail: "" });
    },
    deleteRow(index) {
      this.itenaries.splice(index, 1);
    },
    addFaqRow: function () {
      this.faqs.push({ question: "", answer: "" });
    },
    deleteFaqRow(index) {
      this.faqs.splice(index, 1);
    },

    addDestinationRow: function () {
      this.destinations.push({ name: "", description: "" });
    },

    deleteDestinationRow: function (index) {
      this.destinations.splice(index, 1);
    },

    update() {
      this.isLoading = true;
      axios
        .post(
          `/package/${this.packages.id}`,
          {
            _method: "PUT",
            package: this.packages,
            package_transport: this.package_transport,
            package_hotel: this.package_hotel,
            itenaries: this.itenaries,
            destinations: this.destinations,
            faqs: this.faqs,
            featured_image: this.featured_image,
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
            window.location.href = "/portal/package";
          }
        })
        .catch((err) => {
          console.log(err.response.data.errors);
          this.errors = err.response.data.errors;
        })

        .finally(() => (this.isLoading = false));
    },

    inArray: function (item, array) {
      var length = array.length;
      for (var i = 0; i < length; i++) {
        if (array[i].id == item.id) {
          return true;
        }
      }
      return false;
    },
  },
};
</script>

