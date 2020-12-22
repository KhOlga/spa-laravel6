<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-12">
            Your Tasks
        </h1>
        <ul>
            <li
                v-for="task in tasks"
                v-text="task.name"
            ></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tasks: []
        };
    },

    created() {
        axios.get('http://task-tracker.kharabet.com/api/v1/tasks')
            .then(response => {
                this.tasks = response.data;
            });
    }
};
</script>
