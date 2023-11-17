<template>
  <div class="content">
    <div class="row1">
      <Category
        v-for="category in store.categories"
        :key="category.id"
        :image="category.image"
        :bgColor="category.color"
        :name="category.name"
        :group="category.group"
        :qty="category.item"
        
      />
    </div>
    <div class="row2">
        <Promotion
          v-for="promotion in store.promotions"
          :key="promotion.id"
          :description="promotion.title"
          :bgColor="promotion.color"
          :image="promotion.image"
          
        />
    </div>
  </div>
</template>

<script>
import Button from "./components/Button.vue";
import Category from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";

import { useStore } from "./stores/store";
export default {
  name: "App",
  components: {
    Button,
    Category,
    Promotion,
  },
  setup() {
    const store = useStore();
    return { store };
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap");
body {
  position: relative;
  left: -170px;
}
.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
}
.row1 {
  display: flex;
  gap: 20px;
}
.row2 {
  display: flex;
  align-items: center;
  gap: 10px;
  justify-items: center;
}
</style>
