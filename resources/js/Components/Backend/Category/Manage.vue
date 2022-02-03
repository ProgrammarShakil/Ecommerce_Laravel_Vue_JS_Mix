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
							<th>Name</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>    
						<tr class="table-info">
							<td>dfsaff</td>
							<td>Dooley</td>
							<td>july@exampl</td>
							{{categories}}
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
	}
};
</script>

<style scoped>

</style>