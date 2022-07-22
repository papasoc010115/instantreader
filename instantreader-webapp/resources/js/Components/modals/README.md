# Modals

## Using the Component

> To use the component, import the modal that you need in the `<script></script>` section.

> In the `<template></template>` section, insert the modal component with a prop of `show` that expects a boolean value. If `false`, the modal gets removed from the screen. Otherwise, it will show up in full screen mode.

> The modal component emits when a cancel button is pressed (if there is any), or when the close button (x) is clicked. This is how its `@close` event works. Make sure to handle this event in order to exit/close the modal.

> Make sure that the components that do not get behind the modals' backgrounds are modified to have a z-value of 1.
> Example: `z-inndex: 1;` or `z-index: 1 !important;` if the former does not work.

## Example

```
<template>

<AppLayout>

	<EditAssignedUserModal :show="toggle" @close="handleCloseModal" />
	<br />
	<br />

	<center>
		<button @click="handleClick" type="button" class="btn btn-lg btn-dark">
			Click Me
		</button>
	</center>

</AppLayout>

</template>



<script>

	import AppLayout from  "../Layouts/AppLayout.vue";
	import EditAssignedUserModal from  "../Components/modals/EditAssignedUserModal.vue";

	export  default  {

		components:  {
			AppLayout,
			EditAssignedUserModal,
		},
		data()  {
			return  {
				toggle:  false,
			};
		},
		methods:  {
			handleClick()  {
				this.toggle  =  !this.toggle;
			},
			handleCloseModal()  {
				this.toggle  =  false;
			},
		},
	};

</script>



<style  scoped>
	.container  {
		margin-top:  85px;
	}
</style>
```
