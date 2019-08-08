<template>
  <div id="app">
    <message>Hi, there!</message>
    <message>Hi, there again!</message>
  </div>
</template>

<script>
import Message from "./components/Message.vue";

export default {
  components: {
    Message
  },
  name: "app",
  data() {
    return {};
  }
};
</script>

<style>
</style>
