<template>
	<div>
		<div class="card">
			<div class="card-body">
			    I am from Home component.
			</div>
		</div>
		<router-view></router-view>
	</div>
</template>

<script>
export default {
	name: "home"
};
</script>