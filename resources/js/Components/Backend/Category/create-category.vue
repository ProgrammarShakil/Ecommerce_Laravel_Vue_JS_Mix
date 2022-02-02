<template>
	<div>
		<div class="card">
			<div class="card-header">
			<div class="row">
				<div class="col-6">
				    <h4 class="card-title"> Add New Category</h4>
				</div>
				<div class="col-6 text-end">
					<router-link to="/categories" class="btn btn-success btn-sm text-end"> Back </router-link>
				</div>
			</div>
			</div>
			<div class="card-body">
				<form action="">
					<div class="mb-3">
						<label for="add-cat" class="form-label"></label>
						<input type="text" class="form-control" id="add-cat" placeholder="" name="add-cat">
					</div>
					<button type="submit" :disabled="form.busy" class="btn btn-primary"> Add </button>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "create-category",
	data(){
		return{
			form: new Form({
				name: null,
				status: 1,
				busy: false
			})
		}
	}
};
</script>

<style scoped>

</style>