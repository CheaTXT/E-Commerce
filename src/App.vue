<template>
  <div class="content">
    <Menu title="Featured Categories" />
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
    <Menu title="Popular Products" />
    <div class="pd">
      <Product
        v-for="product in store.products"
        :key="product.id"
        :bgColor="product.bgColor"
        :label="product.label"
        :img="product.image"
        :des="product.des"
      />
    </div>
  </div>
</template>

<script>
import Button from "./components/Button.vue";
import Category from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
import Menu from "./components/Menu.vue";
import Product from "./components/Product.vue";
import { mapState } from "vuex";
import { useStore } from "./stores/store";

export default {
  name: "App",
  components: {
    Button,
    Category,
    Promotion,
    Menu,
    Product,
  },
  setup() {
    const store = useStore();
    return { store };
  },
  computed: {
    ...mapState(["menu"]),
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap");

.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
  position: relative;
  left: -165px;
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
.pd {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  justify-content: space-between;
}
</style>
