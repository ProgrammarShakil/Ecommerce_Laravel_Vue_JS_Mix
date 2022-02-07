<template>
	<div>
		<div class="row justify-content-center">
			<div class="card col-md-6">
				<div class="card-header">
					<div class="row">
						<div class="col-6">
							<h4 class="card-title pt-2"> Update Category</h4>
						</div>
						<div class="col-6 text-end">
							<router-link to="/categories" class="btn btn-success btn-sm text-end"> Back </router-link>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="" @submit.prevent="UpdateCategory">
						<div class="mb-3">
							<label for="add-cat" class="form-label"></label>
							<input type="text" class="form-control" v-model="form.name" id="add-cat" name="add-cat">
							<HasError :form="form" field="name" />
						</div>
						<div class="clearfix">
							<div class="form-check float-left">
								<input :class="{'is-invalid' : form.errors.has('name')}" type="radio" class="form-check-input" v-model="form.status" id="Active" name="Active" value="1">
								<label class="form-check-label text-success" for="Active">Active</label>
							</div>
							<div class="form-check float-right">
								<input type="radio" class="form-check-input" v-model="form.status" name="Inactive" id="Inactive" value="0">
								<label for="Inactive" class="form-check-label text-danger">Pause</label>
							</div>							
							<HasError :form="form" field="status" />
						</div>
					   <div class="row mt-3">
							<div class="col-6">
								<button type="submit" :disabled="form.busy" class="btn btn-primary btn-sm"> Update </button>
							</div> 
							<div class="col-6 text-end">
								<button type="reset"  class="btn btn-danger btn-sm"> Cancel </button>
							</div>
					    </div>
					</form>
				</div>
		   </div>
		</div>
	</div>
</template>

<script>
export default {

	name: "edit-category",

	data(){
		return{
			form: new Form({
				id: null,
				name: null,
				status: null
			})
		}
	},
	mounted() {
		this.getCategory()
	},

	methods:{
		UpdateCategory(){
			this.form.post('update-category/').then( (response) => {
				toastr.success('Category Updated Successfully.');
				this.$router.push('/categories');
			})
		},
		getCategory(){
			axios.get('show-category/' + this.$route.params.slug).then( (response) => {
				// console.log(response.data.category);
				this.form.fill(response.data.category);
			}).catch( (error) => {
				console.log(error);
			})
		}
	}
};
</script>

<style scoped>

</style>