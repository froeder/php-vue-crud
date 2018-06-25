<template>
    <v-container>
        <h2>Olá Mundo</h2>
        <v-btn @click="testServer">CLICK ME</v-btn>
        <h4>{{dados.name}}</h4>
        <v-spacer></v-spacer>
        <v-form v-on:submit.prevent="submit" action="http://localhost:80/pagarme/adiciona.php" ref="form">
            <v-text-field
            v-model="dados.name"
            label="Nome"
            ></v-text-field>
            <v-text-field
            v-model="dados.preco"
            label="Preço"
            ></v-text-field>
            <v-btn
            @click="submit"
            >
            submit
            </v-btn>
        </v-form>
    </v-container>
</template>


<script>
import axios from 'axios'

export default {
    data () {
        return {
            dados: {}
        }
    },
    methods: {
        testServer () {
            let uri = 'http://localhost:80/pagarme/adiciona.php'
            axios.get(uri).then((response)=> {
                console.log(response)
                this.name = response.data
            })
        },
        submit () {
            let uri = 'http://localhost:80/pagarme/adiciona.php'
            axios.post(uri, this.dados).then((response) => {
                console.log(response)
            })
        }
    }
}
</script>
