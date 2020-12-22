<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-6">
            The Site Stats
        </h1>
        <ul>
            <li><strong>Total Videos:</strong> {{ videos }}</li>
            <li><strong>Total Lessons:</strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                videos: 0,
                lessons: 0
            };
        },

        created() {
            axios.get('http://task-tracker.kharabet.com/api/v1/stats')
                .then(response => response.data)
                .then(data => {
                    this.videos = data.videos;
                    this.lessons = data.lessons;
                });
        }
    };
</script>
