<template>
  <div class="form-header dark:form-dark-header flex items-center justify-between">
    <div class="flex space-x-3">
      {{ title }}
    </div>
    <div class="flex space-x-3">
      <button-table-row-create-component @addRowEvent="addRowEvent"/>
    </div>
  </div>
</template>

<script>

  export default {
    mounted() {
      console.log("Header Create component mounted");
    },
    props: {
      title: String
    },
    methods: {
      addRowEvent() {
        this.$emit('addRowTable')
        // console.log('button clicked')
      }
    },
  };
</script>