<template>
	<div>
		<div class="card">
			<div class="card-header">
			<div class="row">
				<div class="col-6 ">
				    <h4 class="card-title">Categories</h4>
				</div>
				<div class="col-6 text-end">
					<router-link to="/categories" class="btn btn-success btn-sm text-end"> Back </router-link>
				</div>
			</div>
			</div>
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
					</tr> 
					</tbody>
				</table>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "create-category"
};
</script>

<style scoped>

</style>