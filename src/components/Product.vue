<template>
  <div class="product">
    <div :style="{backgroundColor : bgColor}" class="row1">{{label}}</div>
    <div class="row2"><img :src="img"/></div>
    <div class="row3"></div>
    <div class="row4">
      <div class="title">{{title}}</div>
      <div class="des">{{des}}</div>
      <div class="star">
        <img
          v-for="index in 5"
          :key="index"
          src="../assets/images/favorite.svg"
          alt=""
        />
        <img src="../assets/images/favorite.svg" alt="" />
        (5.0) <br />
        500 gram
      </div>
    </div>

    <div class="row5">
      <div class="price">
        <span>$2.51</span> <span class="linethrough">7$</span>
      </div>
      <div class="btn">
        <div class="label">Add</div>
        <div class="btn-icon"><i class="uil uil-plus"></i></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: ["bgColor","label","img","title","des"]
};
</script>

<style scoped>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";

.product {
  width: 300px;
  height: 400px;
  border: 1px solid #BCE3C9;
  border-radius: 10px;
  box-shadow: 20px 20px 40px 0px rgba(24, 24, 24, 0.07);
  position: relative;
}
.row1 {
  margin-top: 20px;
  color: white;
  background-color: #3bb77e;
  width: 26%;
  height: 11%;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 0 20px 20px 0;
}
.row2 {
  display: flex;
  justify-content: center;
}
.row4 {
  width: 90%;
  margin: auto;
}
.row5{
  position: absolute;
  bottom: 30px;
  margin-top: 15px;
  display: flex;
  width: 100%;
}
.des {
  font-family: Quicksand;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
}
.star img {
  width: 20px;
}
.linethrough {
  text-decoration: line-through;
}
.row5 {
  padding: 0px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 70px;
  height: 30px;
  border: 1px solid;
  border-radius: 5px;
  padding: 0 10px;
  color: #3bb77e;
  background-color: #DEF9EC;
}
i {
  font-size: 20px;
}
</style>
