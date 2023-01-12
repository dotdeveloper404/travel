<template>
    <data-table v-bind="packageDataTable" @actionTriggered="handleAction"/>
     
</template>
  
<script>
 import "@andresouzaabreu/vue-data-table/dist/DataTable.css";

export default {
  props: ["packages"],

  data() {
    return {
      packageList: [],
    };
  },

  computed: {
    packageDataTable(){
      return {
        data: this.packages,
        columns: [
          "id",
          "package_name",
          "package_type",
          "product_type",
          "nights",
          "days",
          "package_price",
          "discount",
          "net_amount",
          "created_at"
        ]
      };
    }
  },

  mounted() {
    console.log("Component mounted.");
    // swal('Success', 'Package Deleted Successfully', 'Success');
    this.packageList = this.packages;
  },

  methods: {

    deletePackage(id) {
      axios.delete(`/package/${id}`).then((response) => {
        let i = this.packageList.map((data) => data.id).indexOf(id);
        this.packageList.splice(i, 1);
        swal('Success', 'Package Deleted Successfully', 'Success');
      });
    },
    handleAction(actionName, data) {
      console.log(actionName, data);
      window.alert("check out the console to see the logs");
    }
  },
};
</script>

