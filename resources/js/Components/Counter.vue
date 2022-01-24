<template>
	<div>
		<p>
			<router-link to="/home">Home</router-link>
			<router-link to="/about">About</router-link>
		</p>
		<router-view></router-view>
	</div>
</template>

<script>
export default {
	data() {
		return {
			
		};
	},
};
</script>