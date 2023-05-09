<template>
    <v-card
      max-width="450"
      class="mx-auto"
    >
      <v-toolbar
        color="cyan"
        dark
      >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
  
        <v-toolbar-title>Inbox</v-toolbar-title>
  
        <v-spacer></v-spacer>
  
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
      </v-toolbar>
  
      <v-list three-line>
        <template v-for="(item, index) in items">
          <v-subheader
            v-if="item.header"
            :key="item.header"
            v-text="item.header"
          ></v-subheader>
  
          <v-divider
            v-else-if="item.divider"
            :key="index"
            :inset="item.inset"
          ></v-divider>
  
          <v-list-item
            v-else
            :key="item.titulo"
          >
            <v-list-item-avatar>
              <v-img :src="avatar"></v-img>
            </v-list-item-avatar>
  
            <v-list-item-content>
              <v-list-item-title v-html="item.titulo"></v-list-item-title>
              <v-list-item-subtitle v-html="item.contenido"></v-list-item-subtitle>
              <p>Comentarios</p>
              <p v-for="(itemcomenta) in item.comentario_publicacion"><b>{{ itemcomenta.autor }}:</b> {{  itemcomenta.contenido }}</p>
            </v-list-item-content>
          </v-list-item>
        </template>
      </v-list>
    </v-card>
  </template>

<script>
  export default {
    data: () => ({
      avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
      selected: [3],
      items: [],
    }),
    async mounted() {
        await this.getAllpulicaciones();
        console.log({test:this.items});
    },
    methods: {
        getAllpulicaciones(){
            axios.get('http://127.0.0.1:8000/publicaciones').then(response => {
                console.log({response});
                this.items = response.data.response
            })
        }
    }
  }
</script>

