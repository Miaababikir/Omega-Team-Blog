<template>
    <div>
        <div class="flex mx-auto px-10 mb-6">
            <div class="flex justify-center px-4"><img class="w-16 h-16 rounded-full mr-4"
                                                       :src="data.owner.image" alt="avatar"></div>
            <div class="flex-1 bg-white py-6 px-10 shadow">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-xl font-semibold">{{ data.owner.name }}</span>
                    <div class="flex items-center text-sm text-grey">
                        <span class="mr-3">{{ data.created_at }}</span>

                        <div v-if="canUpdate">
                            <button class="bg-teal-light py-3 px-3 rounded text-white hover:bg-teal-lighter" @click="edit">
                                Edit
                            </button>

                            <button class="bg-red-light py-3 px-3 rounded text-white hover:bg-red-lighter" @click="destroy(data.id)">
                                Delete
                            </button>
                        </div>

                    </div>
                </div>

                <div v-if="editing">
                    <form :action="'/replies/' + data.id" method="POST" @submit.prevent="update(data.id)">
                    <textarea class="border border-solid border-grey-light shadow w-full mb-3 py-4 px-4 text-lg"
                              name="body" rows="4"
                              required v-model="reply.body">{{ data.body }}</textarea>
                        <button class="bg-green-light text-white py-2 px-8 rounded" type="submit">Update</button>
                    </form>
                </div>

                <p class="text-lg" v-else>
                    {{ data.body }}
                </p>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                editing: false,
                reply: {
                    body: null,
                }
            }
        },
        computed: {
            canUpdate() {
                return this.authorize(user => this.data.user_id === user.id);
            }
        },
        methods: {
            edit() {
                this.editing = !this.editing;
                this.reply.body = this.data.body;
            },
            update(id) {
                axios.put(`/replies/${id}`, this.reply)
                    .then(res => console.log(res))
                    .catch(error => console.log(error));
            },
            destroy(id) {
                axios.delete(`/replies/${id}`, this.reply)
                    .then(res => console.log(res))
                    .catch(error => console.log(error));
            }
        }
    };
</script>

<style scoped></style>
