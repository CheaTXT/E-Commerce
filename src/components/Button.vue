<template>
  <button :style="{ backgroundColor: color, color: bgColor }" class="button">
    {{ text }}
    <i class="uil uil-arrow-right"></i>
  </button>
</template>

<script>
export default {
  name: "Button",
  props: ["text", "color", "bgColor", "icon"],
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
button {
  width: 100px;
  height: 30px;
  border: none;
  border-radius: 3px;
  font-family: "Quicksand", sans-serif;
}
</style>
