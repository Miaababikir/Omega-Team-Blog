<template>
    <div>
        <div v-for="reply in data" :key="reply.id">
            <reply :data="reply"></reply>
        </div>
    </div>
</template>

<script>

    import Reply from './Reply';

    export default {
        components: { Reply },
        props: ['data']
    };
</script>

<style scoped></style>
