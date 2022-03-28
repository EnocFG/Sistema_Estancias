const express = require("express");

const app = express();

//Configuración para definir el puerto
app.set('port', process.env.PORT || 3000);

//Middlewares funciones que se ejecutan antes de la funcionalidad
app.use(express.json());
//Rutas urls
app.use(require('./rutas/datos'));
//Iniciando servidor
app.listen(app.get('port'), () => {
  console.log('Server on port', app.get('port'));
})