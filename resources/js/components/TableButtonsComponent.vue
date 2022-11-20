<template>
    <div>
        <button class="btn btn-primary" @click>View</button>
        <button class="btn btn-primary" @click>Edit</button>
        <button class="btn btn-danger" @click>Delete</button>
    </div>
</template>

<script>
export default {
    props: {
        row: {
            type: Object
        }
    }
}
</script>
