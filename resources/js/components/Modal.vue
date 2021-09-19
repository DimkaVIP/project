<template>
  <div>
    <div class="h2">Сортировка в JS</div>
    <div class="numbers">
      <div class="number" v-for="number in numbers" :key="number">
        {{ number }}
      </div>
    </div>
    <div></div>
  </div>
</template>

<script>
export default {
  props: {
    numbers: {
      type: Array,
    },
  },
  mounted() {
    this.numbers.sort(this.compare);
  },
  methods: {
    compare(a, b) {
      if (a > b) return 1;
      if (a == b) return 0;
      if (a < b) return -1;
    },
  },
};
</script>

<style>
</style>
