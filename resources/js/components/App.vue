<template>
  <div id="app">
    <div class="heading">
      <h1>Exams</h1>
    </div>
    <exam-component
      v-for="exam in exams"
      v-bind="exam"
      :key="exam.name"
      @update="update"
      @delete="destroy"
    ></exam-component>
    <div>
      <button @click="create()">Add Exam</button>
    </div>
  </div>
</template>

<script>
  function Exam({ name, description }) {
    this.name = name;
    this.description = description;
  }

  import ExamComponent from './ExamComponent.vue';
  
  export default {
    components: {
      ExamComponent
    },

    data() {
      return {
        exams: []
      };
    },

    methods: {
      create() {},
      destroy() {},
      list() {
        window.axios
          .get('/api/exams')
          .then(({ data }) => {
            console.log('data -- ', data);
            data.forEach((exam) => this.exams.push(new Exam(exam)));
          });
      },
      update() {},
    },

    created() {
      this.list();
    }
  }
</script>

