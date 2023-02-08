<template>
  <form @submit.prevent="create" class="form" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>Tour Name:</h5>
            <input
              type="text"
              required
              v-model="tour.tour_name"
              class="form-control form-control-solid"
              placeholder="Enter Tour name"
            />
          </div>

          <div class="form-group">
            <h5>Featured Image</h5>
            <div class="input-group input-group-lg">
              <input
                type="file"
                required
                ref="file"
                @change="handleFileUpload"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Tour Type:</h5>
            <select
              required
              v-model="tour.tour_type"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in tourType"
                :key="item_index"
                :value="item_index">
                {{ item.replace(/[#_]/g,' ') }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Select Transports:</h5>
            <select
            multiple
              required
              v-model="tour.transports"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in transports"
                :key="item_index"
                :value="item.id">
                {{ item.company }}   {{ item.model }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Tour Speciality:</h5>
            <select
              required
              v-model="tour.product_type"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in productType"
                :key="item_index"
                :value="item_index"
              >
                {{ item.replace(/[#_]/g,' ') }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Nights</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="tour.nights"
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
                v-model="tour.days"
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
                v-model="tour.stars"
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
                v-model="tour.reviews"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>City</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="tour.city"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Seasonality</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                required
                v-model="tour.seasonality"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Features</h5>
            <div class="">
              <quill-editor
                contentType="html"
                toolbar="full"
                v-model:content="tour.features"
                theme="snow"
              ></quill-editor>
            </div>
          </div>

          <div class="form-group">
            <h5>Description</h5>
            <div class="">
              <quill-editor
                contentType="html"
                toolbar="full"
                v-model:content="tour.description"
                theme="snow"
              ></quill-editor>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <h5>Traveling Start Date</h5>
            <div class="input-group input-group-lg">
              <input
                type="date"
                required
                v-model="tour.traveling_date_start"
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
                v-model="tour.traveling_date_end"
                class="form-control form-control-solid" />
            </div>
          </div>

          <div class="form-group">
            <h5>Tour Location (Put iframe from google map)</h5>
            <div class="input-group input-group-lg">
              <input
                type="text"
                v-model="tour.location_map"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Tour Price</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="tour.tour_price"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Tour Discount</h5>
            <div class="input-group input-group-lg">
              <input
                type="number"
                required
                v-model="tour.discount"
                class="form-control form-control-solid"
              />
            </div>
          </div>

          <div class="form-group">
            <h5>Tour Price After Discount</h5>
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
            <h5>Status:</h5>
            <select v-model="tour.status" class="form-control">
              <option value="1">Active</option>
              <option value="0">In Active</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body"> 
           ADD NEW ITENARY<i class="fa fa-plus pull-right"  @click="addRow" style="font-size:25px;color:#337ab7;cursor:pointer"></i>
            <table class="table table-bordered">
            <thead class="text text-success">
                <tr>                            
                    <th>Day</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   <tr v-for='(itenary, index) in itenaries' :key="index">                            
                    <td>
                    <input  v-model="itenary.day"  class="form-control" type="text" />
                    </td>
                    <td>
                    <input v-model="itenary.detail" class="form-control" type="text" />
                    </td>
                   
                    <td>
                    <i  @click="deleteRow(index)" class="fa fa-remove" style="font-size:25px;color:red;cursor:pointer"></i>
                    </td>
                </tr>                        
        </tbody>
    </table>
        </div> 
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <h5>Tour Images</h5>
            <div class="input-group input-group-lg">
              <upload-media server="/tour/uploadImage" @media="sendMe">
              </upload-media>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel-body"> 
           ADD NEW FAQs<i class="fa fa-plus pull-right"  @click="addFaqRow" style="font-size:25px;color:#337ab7;cursor:pointer"></i>
            <table class="table table-bordered">
            <thead class="text text-success">
                <tr>                            
                    <th>Day</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   <tr v-for='(faq, index) in faqs' :key="index">                            
                    <td>
                    <input  v-model="faq.question"  class="form-control" type="text" />
                    </td>
                    <td>
                    <input v-model="faq.answer" class="form-control" type="text" />
                    </td>
                   
                    <td>
                    <i  @click="deleteFaqRow(index)" class="fa fa-remove" style="font-size:25px;color:red;cursor:pointer"></i>
                    </td>
                </tr>                        
        </tbody>
    </table>
        </div> 
        </div>

      </div>
    </div>
    <div class="card-footer">
      <button :disabled="isLoading" type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/portal/tour/" class="btn btn-secondary">Cancel</a>
      <div v-if="isLoading">
        <LoaderBar />
      </div>
          <!-- Partial View VueJS -->
          <errors :errors="errors" :trimValue="'tour.'" ></errors>

    </div>
  </form>
</template>

<script>
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import Multiselect from 'vue-multiselect'
export default {
  props: ["tourType", "productType",'transports'],
  mounted() {
    console.log("Component mounted.");
  },
  components: { Multiselect },
  data() {
    return {
     errors : [],
      tour: {
        status: 1,
        net_amount: 0,
       
      },
      isLoading: false,
      tourImages: [],
      featured_image: "",
      itenaries:[{day:'',detail:''}] ,  
      faqs:[{question:'',answer:''}]     
    };
  },
  computed: {
    calculateTotalAmount: function () {
      let total = this.tour.tour_price - this.tour.discount;
      this.tour.net_amount = total;
      return total;
    },
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
    addRow: function() {      
       this.itenaries.push({day:'',detail:''})
    },
    deleteRow(index){    
        this.itenaries.splice(index,1);             
    },  
    addFaqRow: function() {      
       this.faqs.push({day:'',detail:''})
    },
    deleteFaqRow(index){    
        this.faqs.splice(index,1);             
    },  

    create() {
      axios
        .post(
          "/tour",
          {
            tour: this.tour,
            itenaries : this.itenaries,
            faqs : this.faqs,
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
            window.location.href = "/portal/tour";
          }
        })
        .catch(
          (err) => {
            console.log(err.response.data.errors);
            this.errors = err.response.data.errors
          }
         
        )

        .finally(() => (this.loading = false));
    },
  },
};
</script>

