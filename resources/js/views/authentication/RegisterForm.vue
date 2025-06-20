<template>
    <form @submit.prevent="register">
        <h2 class="mb-3">Регистрация</h2>
        <input v-model="form.name" type="text" placeholder="Имя" required />
        <input v-model="form.email" type="email" placeholder="Эл. почта" required />
        <input v-model="form.password" type="password" placeholder="Пароль" required />
        <input v-model="form.password_confirmation" type="password" placeholder="Подтверждение пароля" required />
        <button type="submit" class="action-button">Зарегистрироваться</button>
        <p v-if="error">{{ error }}</p>
    </form>
</template>

<script setup>
import { reactive, ref } from 'vue'
import axios from 'axios'

const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
})

const error = ref('')

async function register() {
    error.value = ''
    try {
        const res = await axios.post('/api/register', form)
        localStorage.setItem('token', res.data.token)
        alert('Registered successfully!')
    } catch (err) {
        error.value = err.response?.data?.message || 'Registration failed.'
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
