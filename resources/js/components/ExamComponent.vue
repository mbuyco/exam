<template>
  <div class="exam">
    <h4><strong>Exam name:</strong> {{ name }}</h4>
    <textarea disabled>{{ description }}</textarea>
  </div>
</template>

<script>
  export default {
    props: ['name', 'description']
  }
</script>

<style scoped>
  .exam {
    border: 1px solid #ddd;
    padding: 20px;
    margin: 15px;
  }
</style>

