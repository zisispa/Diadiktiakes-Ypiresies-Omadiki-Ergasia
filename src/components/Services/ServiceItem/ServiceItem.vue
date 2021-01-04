<template>
  <div class="flex items-center justify-center flex-col">
    <div class="flex items-center justify-center mb-2">
      <div
        class="flex items-center justify-center h-20 w-20 rounded-md bg-indigo-500 text-white"
      >
        <slot name="icon"></slot>
      </div>
    </div>
    <div class="text-lg leading-6 font-medium text-gray-900 text-center">
      {{ heading }}
    </div>
    <div class="mt-2 text-base text-gray-500 text-center">
      {{ content }}
    </div>
  </div>
</template>

<script>
export default {
  props: ["heading", "content", "icon"],
};
</script>

<style>
</style>