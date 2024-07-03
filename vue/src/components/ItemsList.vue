<template>
  <div>
    <h1>Items List</h1>
    <ul>
      <li v-for="(item, index) in items" :key="index">{{ item.title }}</li>
    </ul>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from 'vue';

interface Item {
  title: string;
  body: string;
}

export default defineComponent({
  name: 'ItemsList',
  setup() {
    const items = ref<Item[]>([]);

    onMounted(async () => {
      const response = await fetch('https://jsonplaceholder.typicode.com/posts');
      items.value = await response.json();
    });

    return {
      items,
    };
  },
});
</script>

<style scoped>
ul {
  list-style: none;
  padding: 0;
}

li {
  padding: 8px;
  border-bottom: 1px solid #ccc;
}
</style>
