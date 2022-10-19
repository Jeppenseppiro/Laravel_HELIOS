<template>
  <div>
    <header-create-component title="Create Distributions" @addRowTable="addRowTableEvent"/>
  </div>
  
  <div class="overflow-x-auto relative shadow-md">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            Distribution ID
          </th>
          <th scope="col" class="py-3 px-6 w-72">
            Distribution Type
          </th>
          <th scope="col" class="py-3 px-6">
            Latitude
          </th>
          <th scope="col" class="py-3 px-6">
            Longitude
          </th>
          <th scope="col" class="py-3 px-6">
            Description
          </th>
          <th scope="col" class="py-3 px-6 w-2">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(rowDistribution, k) in rowDistributions" :key="k" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="py-4 px-6">
            <div>
              <input type="text" id="distribution_id" v-model="rowDistribution.distribution_id" class="table-input" placeholder="Distribution ID" required>
            </div>
          </td>
          <td class="py-4 px-6">
            <select id="countries" class="table-input" required>
              <option selected>Choose a country</option>
              <option value="US">United States</option>
              <option value="CA">Canada</option>
              <option value="FR">France</option>
              <option value="DE">Germany</option>
            </select>
            <!-- <input type="text" id="distribution_id" v-model="rowDistribution.distribution_type" class="table-input" placeholder="Distribution Type" required> -->
          </td>
          <td class="py-4 px-6">
            <input type="text" id="distribution_latitude" v-model="rowDistribution.distribution_latitude" class="table-input" placeholder="Latitude" required>
          </td>
          <td class="py-4 px-6">
            <input type="text" id="distribution_longitude" v-model="rowDistribution.distribution_longitude" class="table-input" placeholder="Longitude" required>
          </td>
          <td class="py-4 px-6">
            <input type="text" id="distribution_description" v-model="rowDistribution.distribution_description" class="table-input" placeholder="Description">
          </td>
          <td class="flex items-center py-5 px-7 space-x-3 ">
            <button @click="deleteRowTableEvent(k)" class="button-danger text-white p-2">
              <span class="far fa-trash-alt fa-xl"></span>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div v-if="!rowDistributions.length <= 0" class="p-2 flex justify-center bg-white">
      <button type="submit" class="button-success p-2 w-full">SUBMIT</button>
    </div>

  </div>
</template>

<script>
  import axios from "axios";

  export default {
    mounted() {
      axios
        .get('/types')
        .then(response => (this.info = response))
      // fetch("/types")
      //   .then(response => response.json())
      //   .then(data => (this.totalVuePackages = data.total));
      console.log(this.info);
    },
    data() {
      return {
        rowDistributions: [{
          distribution_id: '',
          distribution_type: '',
          distribution_latitude: '',
          distribution_longitude: '',
          distribution_description: '',
        }],
        line_num: 1
        
      }
    },
    methods: {
      // async fetchCatFacts() {
      //     const catFactsResponse = await axios.get<AnimalFacts[]>('https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount=5')
      //     this.catFacts = catFactsResponse.data
      // },
      addRowTableEvent() {
        this.rowDistributions.push({
          distribution_id: '',
          distribution_type: '',
          distribution_latitude: '',
          distribution_longitude: '',
          distribution_description: '',
        });
        this.line_num++
        console.log(this.line_num);
      },
      deleteRowTableEvent(index) {
        this.rowDistributions.splice(index, 1);
      }
    },
    
  };
</script>

<style scoped>
  .table-input {
    @apply 
    bg-gray-50 
    border-gray-300 
    text-gray-900 
    text-sm 
    rounded-none 
    focus:ring-blue-500 
    focus:border-blue-500 
    block w-full 
    p-2.5 
    dark:bg-gray-700 
    dark:border-gray-600 
    dark:placeholder-gray-400 
    dark:text-white 
    dark:focus:ring-blue-500 
    dark:focus:border-blue-500
  }
</style>
