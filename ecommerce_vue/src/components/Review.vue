<template>
  <section id="review" style="width: 100%">
    <div class="container text-center mx-auto px-5 py-5">
      <h3 class="my-5 movable slideIn">REVIEWS</h3>
      <div class="row gy-10 gx-5">
        <div
          class="card col-6 border-0 border-end border-bottom border-3"
          v-for="item in reviews"
          :key="item.id"
        >
          <div class="row g-5">
            <div class="review col-md-4 movable slideIn slideInLeft">
              <div class="review-image">
                <img
                  :src="`/images/user_images/${item.image}`"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-body text-start">
                <h5 class="card-title">{{ item.title }}</h5>
                <span v-for="i in item.rate">
                  <i class="fa-solid fa-star"></i>
                </span>
                <p class="card-text">{{ item.content }}</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>
</template>

<script setup>
import { useReviewStore } from "@/stores/ReviewStore.js";

const reviews = useReviewStore().reviews;

</script>

<style></style>
