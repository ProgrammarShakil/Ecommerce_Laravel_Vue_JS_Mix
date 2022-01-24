<template>
	<div>
		<button @click="counter--" class="dec-button">-</button>
		{{ counter }}
		<button @click="counter++" class="inc-button">+</button>

		<h1>Hello App!</h1>
		<p>
			<router-link to="/home">Go to Foo</router-link>
			<router-link to="/about">Go to Bar</router-link>
		</p>
		<router-view></router-view>
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