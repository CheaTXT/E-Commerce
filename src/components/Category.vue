<template>
  <div :style="{ backgroundColor: bgColor }" class="category">
    <img :src="image" />
    <p class="name">{{ name }}</p>
    <p class="qty">{{ qty }} items</p>
  </div>
</template>

<script>
export default {
  name: "Category",
  props: ["image", "bgColor", "name", "qty"],
};
</script>

<style>

.category {
  width: 136px;
  height: 177px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 10px;
  /* border: 1px solid var(--NestMart-Brand-1-Light, #81b13d); */
  box-shadow: 20px 20px 40px 0px rgba(24, 24, 24, 0.07);
}
.name {
  color: var(--NestMart-TextHeading, #253d4e);
  text-align: center;
  font-family: Quicksand;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  line-height: 20px;
  letter-spacing: -0.006px;
}
.qty {
  color: var(--NestMart-Text-Muted, #b6b6b6);
  text-align: center;
  font-family: Lato;
  font-size: 12px;
  font-style: normal;
  font-weight: 400;
  line-height: 18px; /* 150% */
  font-family: "Quicksand", sans-serif;
}
p{
  font-family: "Quicksand", sans-serif;
}

</style>
