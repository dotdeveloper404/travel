<template>
    <DataTable  :columns="columns"  :options="{select: true, search:true}"  id="package_booking_table" class="table table-striped border rounded gy-5 gs-7">
      <thead>
        <tr>
          <th>ID</th>
          <th>Package Name</th>
          <th>Package Type</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Departure City</th>
          <th>Departure Date</th>
          <th>Adult</th>
          <th>Child</th>
          <th>Infants</th>
          <th>Contact Preference</th>
          <th>Best Time To Call</th>
          <th>Created Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in bookingList" :key="item.id">
          <td>{{ item.id }}</td>
          <td>{{ item.package.package_name }}</td>
          <td>{{ item.package.package_type.replace('_',' ').toUpperCase() }}</td>
          <td>{{ item.name }}</td>
          <td>{{ item.email }}</td>
          <td>{{ item.phone }}</td>
          <td>{{ item.departure_city }}</td>
          <td>{{ item.departure_date }}</td>
          <td>{{ item.adults }}</td>
          <td>{{ item.child }}</td>
          <td>{{ item.infants }}</td>
          <td>{{ item.contact_preference }}</td>
          <td>{{ item.best_time_to_call }}</td>
          <td>{{  moment(item.created_at).format("DD-MM-YYYY") }}</td>
          <td>
            <div class="btn-group" role="group">
              <button class="btn btn-danger" @click="deleteBooking(item.package.id,item.id)">
                Delete
              </button>
              &nbsp;
              <a class="btn btn-primary" :href="'/portal/packages/'+item.package.id+'/booking/'+item.id+'/edit'"
                >Edit</a
              >
            </div>
          </td>
        </tr>
      </tbody>
    </DataTable >
  </template>
    
  <script>
   import DataTable from 'datatables.net-vue3'
   import DataTablesLib from 'datatables.net';
   DataTable.use(DataTablesLib);
  export default {
    props: ["bookings"],
  
    data() {
      return {
        bookingList: [],
        moment : moment
      };
    },
  
    mounted() {
      console.log("Component mounted.");
      this.bookingList = this.bookings;
    },
  
    methods: {
  
      deleteBooking(package_id,id) {
        axios.delete(`/packages/${package_id}/booking/${id}`).then((response) => {
          let i = this.bookingList.map((data) => data.id).indexOf(id);
          this.bookingList.splice(i, 1);
          swal('Success', 'Booking Deleted Successfully', 'Success');
        });
      },
    },
  };
  </script>
  
  