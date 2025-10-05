<template>
  <div class="p-4 bg-white rounded shadow">
    <input v-model="location" placeholder="¿Dónde quieres ir?" class="input" />
    <input type="date" v-model="checkIn" class="input" />
    <input type="date" v-model="checkOut" class="input" />
    <button @click="search" class="btn">Buscar</button>
  </div>
</template>

<script>
export default {
  name: 'SearchBar',
  data() {
    return {
      location: '',
      checkIn: '',
      checkOut: ''
    }
  },
  methods: {
    search() {
      // Aquí puedes emitir un evento o redirigir con filtros
      console.log('Buscando:', this.location, this.checkIn, this.checkOut)
    }
  }
}
</script>

<style scoped>
.input {
  margin: 0.5rem;
  padding: 0.5rem;
  border: 1px solid #ccc;
}
.btn {
  background-color: #00bcd4;
  color: white;
  padding: 0.5rem 1rem;
  border: none;
}
</style>

<template>
  <div class="search-bar">
    <input v-model="location" placeholder="¿Dónde quieres ir?" />
    <input type="date" v-model="checkIn" />
    <input type="date" v-model="checkOut" />
    <select v-model="propertyType">
      <option value="">Tipo de propiedad</option>
      <option value="casa">Casa</option>
      <option value="apartamento">Apartamento</option>
      <option value="cabaña">Cabaña</option>
    </select>
    <button @click="search">Buscar</button>
  </div>
</template>

<script>
export default {
  name: 'SearchBar',
  data() {
    return {
      location: '',
      checkIn: '',
      checkOut: '',
      propertyType: ''
    }
  },
  methods: {
    search() {
      console.log('Filtros:', {
        location: this.location,
        checkIn: this.checkIn,
        checkOut: this.checkOut,
        propertyType: this.propertyType
      })
      // Aquí puedes emitir un evento o redirigir con parámetros
    }
  }
}
</script>

<style scoped>
.search-bar {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  padding: 1rem;
  background: #f9f9f9;
  border-radius: 8px;
}
input, select {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}
button {
  background-color: #00bcd4;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 4px;
}
</style>