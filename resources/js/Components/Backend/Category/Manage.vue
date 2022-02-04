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
					<table class="table">

						<thead>
							<tr>
								<th>SL No.</th>
								<th>Name</th>
								<th>Slug</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody class="text-center">    
							<tr v-for="(category , index) in categories" :key="category.name">
								<td>{{ index + 1 }}</td>
								<td>{{category.name}}</td>
								<td>{{category.slug}}</td>
								<td>
								   <p v-if="category.status == 1" :class="statusColor(category.status)">
								       Active
								   </p>
								   <p v-else-if="category.status == 0" :class="statusColor(category.status)">
								       Pause
								   </p>
								  
								</td>
								<td> 
									<button type="button" class="btn btn-danger btn-sm">Edit</button>
									<button @click="removeStatus(category.id)" type="button" class="btn btn-danger btn-sm">Delete</button>
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

		removeStatus(id){
			axios.get("remove-category/" + id).then( (response) => {
                toastr.success("Category Deleted Successfully");
				this.$store.dispatch('getCategories'); // after delete fetch data

            }).catch( (error) => {
                console.log(error);
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