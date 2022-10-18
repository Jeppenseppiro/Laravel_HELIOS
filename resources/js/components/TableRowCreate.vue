<template>
  <button @click="addNewRow" class="button-success p-1">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
  </button>
</template>

<script>
  export default {
    mounted() {
      console.log("Table Row Create Button component mounted");
    },
    props: {
      title: String
    },
    methods: {
      addNewRow() {
        this.$emit('addRowEvent')
      }
    },
  };
</script>