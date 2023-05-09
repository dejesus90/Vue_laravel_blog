<template>
    <v-form
      ref="form"
      v-model="valid"
      lazy-validation
    >
      <v-text-field
        v-model="name"
        :counter="60"
        :rules="nameRules"
        label="Titulo"
        required
        outlined
      ></v-text-field>
  
      <v-textarea
          outlined
          v-model="contenido"
          name="input-7-4"
          :rules="contentRules"
          label="Contenido"
          required
        ></v-textarea>
  
      
  
      <v-btn
        :disabled="!valid"
        @click="validate"
      >
        Guardar
      </v-btn>
  
      
    </v-form>
  </template>

<script>
  export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Titulo requerido',
        v => (v && v.length <= 60) || 'Name must be less than 60 characters',
      ],
      contentRules: [
        v => !!v || 'contenido requerido',
      ],
      
      contenido: ''
    }),

    methods: {
      async validate () {
        this.$refs.form.validate()
        if(this.contenido=='' || this.name == ''){
            return;
        }
        const blog = { titulo: this.name,contenido: this.contenido};
        const response = await axios.post("http://127.0.0.1:8000/nuevapublicacion", blog);
        console.log('pasa',blog);
      },
      
    },
  }
</script>
