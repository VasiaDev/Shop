<template>
    <form @submit.prevent="login">
        <h2 class="mb-3">Вход</h2>
        <input v-model="form.email" type="email" placeholder="Эл. почта" required />
        <input v-model="form.password" type="password" placeholder="Пароль" required />
        <button type="submit" class="action-button">Войти</button>
        <p v-if="error" style="color: red; margin-top: 10px;">{{ error }}</p>
    </form>
</template>

<script setup>
import { reactive, ref } from 'vue'
import axios from 'axios'

// Эмитим событие в родительский компонент
const emit = defineEmits(['login-success'])

const form = reactive({
    email: '',
    password: ''
})

const error = ref('')

async function login() {
    error.value = ''
    try {
        const res = await axios.post('/api/login', form)
        localStorage.setItem('token', res.data.token)

        // Уведомляем App.vue о входе
        emit('login-success')
    } catch (err) {
        error.value = err.response?.data?.message || 'Ошибка входа.'
    }
}
</script>

<style scoped>
.action-button {
    display: block;
    width: 100%;
    max-width: 250px;
    margin: 20px auto 0;
    padding: 12px 25px;
    background-color: #ff6b00;
    border: none;
    border-radius: 25px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    box-shadow: 0 4px 10px rgba(255, 107, 0, 0.3);
}

.action-button:hover {
    background-color: #e95c00;
    transform: scale(1.02);
}
</style>
