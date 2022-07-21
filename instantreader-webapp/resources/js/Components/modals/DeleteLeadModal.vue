<template>
    <!-- Background -->
    <div class="background flex-container-center" v-if="show">
        <!-- Main Modal -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3>Delete Lead</h3>
                <span class="close" @click="removeModal">&times</span>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p>Are you sure you want to delete this lead?</p>
                <div class="btn-container">
                    <button
                        @click="removeModal"
                        type="button"
                        class="btn btn-secondary"
                    >
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["show"],
    methods: {
        removeModal() {
            this.$emit("close");
        },
    },
};
</script>

<style scoped>
@import "../../../../public/crm-site/assets/css/sb-admin-2.css";
button {
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
}
.background {
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
}

.flex-container-center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.modal-content {
    position: relative;
    background-color: #f6f0f0;
    width: 500px;
    max-width: 85%;
}

.modal-header {
    background-color: white;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4);
    color: #282525;
    display: flex;
}
.modal-header h3 {
    font-size: 1.7rem;
    margin: 5px 0;
}

.modal-body {
    padding: 2rem 3rem;
}

.modal-body p {
    text-align: center;
}

.btn-container {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.close {
    color: #aaaaaa;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #282525;
    text-decoration: none;
    cursor: pointer;
}
</style>
