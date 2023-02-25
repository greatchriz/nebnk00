<script setup>
    import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
</script>


<template>
  <Menu v-slot="{ open }">
    <MenuButton>More</MenuButton>

    <div v-show="open">
      <!--
          Using the `static` prop, the `MenuItems` are always
          rendered and the `open` state is ignored.
        -->
      <MenuItems static>
        <MenuItem><!-- ... --></MenuItem>
        <!-- ... -->
      </MenuItems>
    </div>
  </Menu>
</template>

