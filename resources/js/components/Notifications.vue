<!-- <template>
    <div>
        <h2>Real-Time Notifications</h2>
        <ul>
            <li v-for="notification in notifications" :key="notification.id">
                {{ notification.message }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            notifications: []
        };
    },
    mounted() {
        window.Echo.channel('brt-channel')
            .listen('.BRTNotification', (event) => {
                this.notifications.push({
                    id: Date.now(),
                    message: `BRT updated: ${event.brt.brt_code} - Status: ${event.brt.status}`
                });
            });
    }
};
</script> -->


<template>
    <div>
        <h2>Real-Time Notifications</h2>
        <ul>
            <li v-for="notification in notifications" :key="notification.id">
                {{ notification.message }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            notifications: []
        };
    },
    // methods: {
    //     async login() {
    //         try {
    //             const response = await axios.post('/api/login', {
    //                 email: this.email,
    //                 password: this.password,
    //             });
    //             // Handle successful login (e.g., store token)
    //         } catch (err) {
    //             this.error = err.response.data.error || 'Login failed';
    //         }
    //     },
    // },
};
</script>

