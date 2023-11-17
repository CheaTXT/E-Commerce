<template>
  <ul>
    <li class="active">All</li>
    <li>Milks & Dairies</li>
    <li>Coffees & Teas</li>
    <li>Pet Foods</li>
    <li>Meats</li>
    <li>Vegetables</li>
    <li>Friuts</li>
  </ul>
</template>
<script>
export default {
  name: "Menu",
};
</script>
<style>
.active {
  font-weight: bold;
}
ul {
    width: 1000px;
  list-style-type: none;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
}
ul li {
  margin-right: 50px; 
}
</style>
