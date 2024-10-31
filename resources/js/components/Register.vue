<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="register">
            <div>
                <label for="name">Name:</label>
                <input type="text" v-model="name" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" v-model="email" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" v-model="password" required />
            </div>
            <button type="submit">Register</button>
        </form>
        <p v-if="error">{{ error }}</p>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
            error: null,
        };
    },
    methods: {
        async register() {
            try {
                await axios.post('/api/register', {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                });
                // Handle successful registration (e.g., redirect or notify)
            } catch (err) {
                this.error = err.response.data.error || 'Registration failed';
            }
        },
    },
};
</script>
