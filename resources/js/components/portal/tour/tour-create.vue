<template>
  <form @submit.prevent="create" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>tour Name:</h5>
            <input
              type="text"
              v-model="tours.tour_name"
              class="form-control form-control-solid"
              placeholder="Enter tour name"
            />
          </div>

          <div class="form-group">
            <h5>Overview</h5>
            <div class="">
              <!-- <quill-editor
                contentType="html"
                toolbar="full"
                v-model:content="tours.description"
                theme="snow"
              ></quill-editor> -->
              <editor
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
                v-model="tours.description"
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
            </div>
          </div>

          <div class="form-group">
            <h5>tour Type:</h5>
            <select
              required
              v-model="tours.tour_type"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in tourType"
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
              v-model="tours.languages"
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
            <select required v-model="tours.recomended" class="form-control">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>

          <div class="form-group">
            <h5>Duration:</h5>
            <select
              required
              v-model="tours.duration"
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
              v-model="tours.deals_and_discount"
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
              v-model="tours.free_cancelation"
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
              v-model="tours.group_type"
              class="form-control"
            >
              <option value="Private">Private</option>
              <option value="Group">Group</option>
            </select>
          </div>

          <div class="form-group">
            <h5>
              Select Transports:
              <label class="lbl_select_transports"
                ><input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="tours.is_transport_included"
                />
                Included ?
              </label>
            </h5>
            <select
              multiple
              required
              v-model="tours.transports"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in transports"
                :key="item_index"
                :value="item.id"
              >
                {{ item.company }} {{ item.model }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>tour Speciality:</h5>
            <select
              required
              v-model="tours.product_type"
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
            <h5>Nights</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="tours.nights"
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
                v-model="tours.days"
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
                v-model="tours.stars"
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
                v-model="tours.reviews"
                class="form-control form-control-solid"
              />
            </div>
          </div>

        
          <div class="form-group">
            <h5>City</h5>
            <div class="">
              <select multiple v-model="tours.city" class="form-control">
                  <option v-for="(item,item_index) in cities" :key="item_index" :value="item"></option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <h5>Seasona</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="tours.seasonality"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <!-- <div class="form-group">
            <h5>Features</h5>
            <div class="">
              <editor
                api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
                v-model="tours.features"
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
          </div> -->

          <div class="form-group">
            <h5>
              Visa
              <label>
                <input
                  type="checkbox"
                  true-value="1"
                  false-value="0"
                  v-model="tours.is_visa_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.visa"
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
                  v-model="tours.is_meals_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.meals"
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
                  v-model="tours.is_optional_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.optional"
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
                v-model="tours.traveling_date_start"
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
                v-model="tours.traveling_date_end"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>tour Location (Put iframe from google map)</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                v-model="tours.location_map"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>tour Price</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="tours.tour_price"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>tour Discount</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="tours.discount"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>tour Price After Discount</h5>
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
                  v-model="tours.is_acommodation_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.acommodation"
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
                  v-model="tours.is_guide_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.guide"
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
                  v-model="tours.is_additional_services_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.additional_services"
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
                  v-model="tours.is_insurance_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.insurance"
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
                  v-model="tours.is_flights_included"
                />
                Included?</label
              >
            </h5>

            <editor
              api-key="vr8pakupqq4xfr4f3xwlnv8dohf6u8ps301szas02f8e32ea"
              v-model="tours.flights"
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
              v-model="tours.more_information"
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
            <select v-model="tours.status" class="form-control">
              <option value="1">Active</option>
              <option value="0">In Active</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body">
            <span
              >ADD NEW ITENARY
              <i
                class="fa fa-plus pull-right"
                @click="addRow"
                style="font-size: 25px; color: #337ab7; cursor: pointer"
              ></i>
            </span>
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
            <h5>tour Images</h5>
            <div class="input-group input-group-lg">
              <upload-media server="/tour/uploadImage" @media="sendMe">
              </upload-media>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body">
            <span
              >ADD FAQs
              <i
                class="fa fa-plus pull-right"
                @click="addFaqRow"
                style="font-size: 25px; color: #337ab7; cursor: pointer"
              ></i>
            </span>
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
            <span
              >ADD DESTINATIONS
              <i
                class="fa fa-plus pull-right"
                @click="addDestinationRow"
                style="font-size: 25px; color: #337ab7; cursor: pointer"
              ></i>
            </span>
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
      <a href="/portal/tour/" class="btn btn-secondary">Cancel</a>
      <div v-if="isLoading">
        <LoaderBar />
      </div>
      <!-- Partial View VueJS -->
      <errors :errors="errors" :trimValue="'tour.'"></errors>
    </div>
  </form>
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

import htmlEditButton from "quill-html-edit-button";

import Multiselect from "vue-multiselect";
export default {
  props: ["tourType", "productType", "languages", "transports" , 'duration','cities'],
  mounted() {
    console.log("Component mounted.");
  },
  components: { Multiselect, Editor },
  data() {
    return {
      tours: {
        status: 1,
        net_amount: 0,
      },
      isLoading: false,
      errors: [],
      tourImages: [],
      featured_image: "",
      itenaries: [{ day: "", detail: "" }],
      faqs: [{ question: "", answer: "" }],
      destinations: [{ name: "", description: "" }],
    };
  },
  computed: {
    calculateTotalAmount: function () {
      let total = this.tours.tour_price - this.tours.discount;
      this.tours.net_amount = total;
      return total;
    },
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
      this.featured_image = event.target.files[0];
      console.log(event.target.files[0]);
    },

    sendMe(images) {
      this.tourImages = [];
      images.forEach((image) => {
        this.tourImages.push(image.name);
      });
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

    create() {
      this.isLoading = true;
      axios
        .post(
          "/tour",
          {
            tour: this.tours,
            itenaries: this.itenaries,
            faqs: this.faqs,
            destinations: this.destinations,
            featured_image: this.featured_image,
            images: this.tourImages,
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
            this.isLoading = false;
            window.location.href = "/portal/tour";
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

