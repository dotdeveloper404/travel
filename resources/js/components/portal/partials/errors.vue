<template>
  <div class="col-md-12">
    <div class="form-group">
      <ul>
        <li class="error" v-for="(error, item_index) in errors" :key="item_index">
          {{ error[0].replace(trimValue,' ') }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ["errors","trimValue"],
};
</script>

<style>
.error{
  color:red;
}
</style>