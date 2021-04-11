// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: "AIzaSyB5HS-br0CNSydTNy9n5oZFW2Iy4y5mjlY",
    authDomain: "formulario-f802e.firebaseapp.com",
    projectId: "formulario-f802e",
});

var db = firebase.firestore();

//Codigo para agregar registros a mi colección
function agregar(){
    var curp = document.getElementById('curp').value;
    var nombre = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellidos').value;
    var edad = document.getElementById('edad').value;
    var domicilio = document.getElementById('domicilio').value;
    var municipio = document.getElementById('municipio').value;
  
    console.log(curp, nombre, apellidos, edad, domicilio, municipio);
      db.collection("users").add({
      Curp: curp,
      Nombre: nombre,
      Apellidos: apellidos,
      Edad: edad,
      Domicilio: domicilio,
      Municipio: municipio
      })
      .then(function(docRef) {
          console.log("Document written with ID: ", docRef.id);
          document.getElementById('curp').value = '';
          document.getElementById('nombre').value = '';
          document.getElementById('apellidos').value = '';
          document.getElementById('edad').value = '';
          document.getElementById('domicilio').value = '';
          document.getElementById('municipio').value = '';
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
}

//Codigo para Leer o Mostrar registros de mi colección
//Leer el id de la tabla
var tabla = document.getElementById('tabla');

db.collection("users").onSnapshot((querySnapshot) => {
    tabla.innerHTML = ''; //Limpiar mi tabla
  querySnapshot.forEach((doc) => {
      console.log(`${doc.id} => ${doc.data().last}`);
      tabla.innerHTML += `
      <tr>
          <th scope="row">${doc.id}</th>
          <td>${doc.data().Curp}</td>
          <td>${doc.data().Nombre}</td>
          <td>${doc.data().Apellidos}</td>
          <td>${doc.data().Edad}</td>
          <td>${doc.data().Domicilio}</td>
          <td>${doc.data().Municipio}</td>
          <td><button class="btn btn-danger" onclick="eliminar('${doc.id}')">Eliminar</button></td>
          <td><button class="btn btn-warning" onclick="editar('${doc.id}','${doc.data().first}','${doc.data().last}','${doc.data().born}')">Editar</button></td>
      </tr>
      `
      });
  });

  //borrar documento
  function eliminar(id){
      db.collection("users").doc(id).delete().then(() => {
          console.log("Document successfully deleted!");
      }).catch((error) => {
          console.error("Error removing document: ", error);
      });
  }

  //Editar Documento
  function editar(id, curp, nombre, apellidos, edad, domicilio, municipio){
      console.log(id);
      var curp = document.getElementById('curp').value = curp;
      var nombre = document.getElementById('nombre').value = nombre;
      var apellidos = document.getElementById('apellidos').value = apellidos;
      var edad = document.getElementById('edad').value = edad;
      var domicilio = document.getElementById('domicilio').value = domicilio;
      var municipio = document.getElementById('municipio').value = municipio;
      var boton = document.getElementById('boton');
      boton.innerHTML = 'Editar';

      boton.onclick = function(){
          var washingtonRef = db.collection("users").doc(id);

          var curp = document.getElementById('curp').value;
          var nombre = document.getElementById('nombre').value;
          var apellidos = document.getElementById('apellidos').value;
          var edad = document.getElementById('edad').value;
          var domicilio = document.getElementById('domicilio').value;
          var municipio = document.getElementById('municipio').value;

          // Set the "capital" field of the city 'DC'
          return washingtonRef.update({
              Curp: curp,
              Nombre: nombre,
              Apellidos: apellidos,
              Edad: edad,
              Domicilio: domicilio,
              Municipio: municipio
          })
          .then(() => {
              console.log("Document successfully updated!");
              boton.innerHTML = 'Agregar';
              window.location.reload();
          })
          .catch((error) => {
              // The document probably doesn't exist.
              console.error("Error updating document: ", error);
          });
      }
  }