<template>
	<div>
		<div class="row justify-content-center">
			<div class="card col-md-9">
				<div class="card-header">
					<div class="row">
						<div class="col-6 ">
							<h4 class="card-title">Categories</h4>
						</div>
						<div class="col-6 text-end">
							<router-link to="/add-category" class="btn btn-success btn-sm text-end"> Add Catagory </router-link>
						</div>
					</div>
			    </div> <!-- /card-header -->
			    <div class="card-body">
					<table class="table text-center">

						<thead class="bg-primary">
							<tr>
								<th><input type="checkbox"></th>
								<th>SL No.</th>
								<th>Name</th>
								<th>Slug</th>
								<th>Time</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>    
							<tr v-for="(category , index) in categories" :key="category.name">
								<th><input type="checkbox" :value="category.id" v-model="category_ids"></th>
								<td>{{ index + 1 }}</td>
								<td>{{ category.name }}</td>
								<td>{{ category.slug }}</td>
								<td> {{ category.created_at | time }}</td>
								<td>
								   <p v-if="category.status == 1" :class="statusColor(category.status)">
								       Active
								   </p>
								   <p v-else-if="category.status == 0" :class="statusColor(category.status)">
								       Pause
								   </p>
								  
								</td>
								<td>
									<router-link :to=" `/edit-category/${category.slug}` " class="btn btn-info btn-sm" >Edit</router-link>

									<button @click="removeStatus(category.slug)" type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr v-if="ifDidntGetData()">
							    <td colspan="6">
								    <h3 class="text-danger text-center">Data not found</h3>
								</td>
							</tr>
						</tbody>

					</table>
					
			    </div> <!-- /card-body -->
			    
		   </div> <!-- /card -->
		</div>
	</div>
</template>

<script>
export default {

	name: "manage",
	data(){
		return{
			category_ids : []
		}
	},

	mounted() {
		this.$store.dispatch('getCategories');
	},

	computed: {
		categories(){
			return this.$store.getters.catPass;
		}
	},

	methods: {

		statusColor(status){
			let data = {1: 'text-success', 0: 'text-warning'}
			return data[status]; // return 0 or 1
		},

		removeStatus(slug){
			swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!',
				cancelButtonText: 'No, cancel!',
				reverseButtons: true
				}).then((result) => {
					
				if (result.isConfirmed) {
					axios.get("remove-category/" + slug).then( (response) => {
						toastr.success("Category Deleted Successfully");
						this.$store.dispatch('getCategories'); // after delete fetch data

					}).catch( (error) => {
						console.log(error);
					})

				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swal.fire(
					'Cancelled',
					'Your imaginary file is safe :)',
					'error'
					)
				}
			})
			
		},

		ifDidntGetData(){
			return (this.categories.length < 1);
		}
	}
}
</script>

<style scoped>

</style>