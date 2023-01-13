<template>
  <form @submit.prevent="update" class="form" >
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <h5>Package :</h5>
            <label
              ><a target="_blank" :href="'/portal/package/'+ booking.package.id + '/edit'">{{ booking.package.package_name }}</a></label
            >
          </div>

          <div class="form-group">
            <h5>Booking Agent:</h5>
            <select
              
              v-model="booking.agent_id"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in agents"
                :key="item_index"
                :value="item.id"
              >
                {{ item.name }}
              </option>
            </select>
          </div>


          <div class="form-group">
            <h5>Booking Status:</h5>
            <select
              required
              v-model="booking.booking_status"
              class="form-control"
            >
              <option
                v-for="(item, item_index) in bookingStatus"
                :key="item_index"
                :value="item_index"
              >
                {{ item }}
              </option>
            </select>
          </div>

          <div class="form-group">
            <h5>Name :</h5>

            <input
              type="text"
              required
              v-model="booking.name"
              class="form-control form-control-solid"
              placeholder="Enter name"
            />
          </div>

          <div class="form-group">
            <h5>Email :</h5>

            <input
              type="text"
              required
              v-model="booking.email"
              class="form-control form-control-solid"
              placeholder="Enter email"
            />
          </div>

          <div class="form-group">
            <h5>Cell :</h5>

            <input
              type="text"
              required
              v-model="booking.cell"
              class="form-control form-control-solid"
              placeholder="Enter cell"
            />
          </div>

          <div class="form-group">
            <h5>Phone :</h5>

            <input
              type="text"
              required
              v-model="booking.phone"
              class="form-control form-control-solid"
              placeholder="Enter phone"
            />
          </div>

          <div class="form-group">
            <h5>Departure City :</h5>

            <input
              type="text"
              required
              v-model="booking.departure_city"
              class="form-control form-control-solid"
              placeholder="Enter departure city"
            />
          </div>

          <div class="form-group">
            <h5>Departure Date :</h5>

            <input
              type="date"
              required
              v-model="booking.departure_date"
              class="form-control form-control-solid"
              placeholder="Enter departure date"
            />
          </div>

          <div class="form-group">
            <h5>Adult :</h5>

            <input
              type="text"
              required
              v-model="booking.adults"
              class="form-control form-control-solid"
              placeholder="Enter adult"
            />
          </div>

          <div class="form-group">
            <h5>Child :</h5>

            <input
              type="text"
              v-model="booking.child"
              class="form-control form-control-solid"
              placeholder="Enter child"
            />
          </div>

          <div class="form-group">
            <h5>Infants :</h5>

            <input
              type="text"
              v-model="booking.infants"
              class="form-control form-control-solid"
              placeholder="Enter child"
            />
          </div>

          <div class="form-group">
            <h5>Contact Preference :</h5>

            <input
              type="text"
              required
              v-model="booking.contact_preference"
              class="form-control form-control-solid"
              placeholder="Enter contact preference"
            />
          </div>

          <div class="form-group">
            <h5>Best time to call :</h5>

            <input
              type="text"
              v-model="booking.best_time_to_call"
              class="form-control form-control-solid"
            />
          </div>

          <div class="form-group">
            <h5>Comment :</h5>

            <input
              type="text"
              v-model="booking.comment"
              class="form-control form-control-solid"  />
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button :disabled="isLoading" type="submit" class="btn btn-primary mr-2">Update Booking</button>
      <a href="/portal/package/bookings" class="btn btn-secondary">Cancel</a>
      <div v-if="isLoading">
        <LoaderBar />
      </div>
      <!-- Partial View VueJS -->
      <errors :errors="errors" :trimValue="'booking.'"></errors>
    </div>
  </form>
</template>

<script>
import "@vueup/vue-quill/dist/vue-quill.snow.css";

export default {
  props: ["bookingData", "bookingStatus",'agents'],
  mounted() {},

  data() {
    return {
      isLoading: false,
      errors:[],
      booking: this.bookingData,
    };
  },
  computed: {},

  methods: {
    update() {
      this.isLoading = true;
      axios
        .post(
          `/packages/${this.booking.package.id}/booking/${this.booking.id}`,
          {
            booking:this.booking,
            _method: "PUT",
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
            window.location.href = "/portal/packages/bookings";
          }
        })
        .catch((err) => {
          console.log(err.response.data.errors);
          this.errors = err.response.data.errors;
          this.isLoading = false;
        })

        .finally(() => (this.loading = false));
    },
  },
};
</script>

