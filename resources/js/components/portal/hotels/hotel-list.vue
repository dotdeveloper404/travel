<template>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stars</th>
        <th>Location</th>
        <th>Contact # 1</th>
        <th>Contact # 2</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in hotelList" :key="item.id">
        <td>{{ item.id }}</td>
        <td>{{ item.name }}</td>
        <td>{{ item.stars }}</td>
        <td>{{ item.city }} {{ item.state }} {{ item.country }}</td>
        <td>{{ item.contact_no_1 }}</td>
        <td>{{ item.contact_no_2 }}</td>
        <td>
          <div class="btn-group" role="group">
            <button class="btn btn-danger" @click="deleteHotel(item.id)">
              Delete
            </button>
            &nbsp;
            <a class="btn btn-primary" :href="'hotel/' + item.id + '/edit'"
              >Edit</a
            >
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</template>
  
<script>
export default {
  props: ["hotels"],

  data() {
    return {
      hotelList: [],
    };
  },

  mounted() {
    console.log("Component mounted.");
    this.hotelList = this.hotels;
  },

  methods: {
    deleteHotel(id) {
      axios.delete(`/hotel/${id}`).then((response) => {
        let i = this.hotelList.map((data) => data.id).indexOf(id);
        this.hotelList.splice(i, 1);
        alert("Hotel Deleted Successfully");
      });
    },
  },
};
</script>

