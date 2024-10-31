import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Dashboard from './components/Dashboard.vue'; // Add your Dashboard or other components here
import Notifications from './components/Notifications.vue';

const routes = [
    { path: '/login', component: Login },
    { path: '/register', component: Register },
    { path: '/dashboard', component: Dashboard },
    { path: '/notifications', component: Notifications },
    { path: '/', redirect: '/login' } // Redirect to login by default
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
