<template>
	<div>
		<button @click="counter--" class="dec-button">-</button>
		{{ counter }}
		<button @click="counter++" class="inc-button">+</button>
	</div>
</template>

<script>
export default {
	name: "Counter",
	data() {
		return {
			counter: 0,
		};
	},
};
</script>