window.addEventListener('load', recargar);

//Metodo recargar
function recargar() {
    var peticion = new XMLHttpRequest();

    peticion.onreadystatechange = function () {
        if (this.readyState == 4) {
            document.getElementById('tblCuerpo').innerHTML = this.responseText;
            asignarEventos();
        }
    };
    peticion.open('GET', 'alumno/recargar');
    peticion.send();
}

function asignarEventos() {
  document.getElementById('btn').addEventListener('click', accion);
  var btnEdit = document.getElementsByClassName('btnEditar');
  var btnElim = document.getElementsByClassName('btnEliminar');
  for (var i = 0; i < btnEdit.length; i++) {
      btnEdit[i].addEventListener('click', editar);
      btnElim[i].addEventListener('click', eliminar);
  }
}

function editar(){
  var peticion = new XMLHttpRequest();

  peticion.onreadystatechange = function () {
      if (this.readyState == 4) {
          document.getElementById('frm').innerHTML = this.responseText;
          recargar();
      }
  };
  //Actualizacion de el registro
  peticion.open('GET', 'alumno/findById/' + this.value);
  peticion.send();
  // alert('dsgdsgds');
}

function eliminar(){
  const confirm = window.confirm("¿Deseas eliminar al alumno "+this.value+"?");
  if (confirm) {
var peticion = new XMLHttpRequest();

peticion.onreadystatechange = function () {
if (this.readyState == 4) {
  recargar();
}
};
//ELiminacion de el registro
peticion.open('GET', 'alumno/delete/' + this.value);
peticion.send();
}
}

function limpiar(){
  document.getElementById('nombres').value = "";
    document.getElementById('apellidos').value = "";
    document.getElementById('direccion').value = "";
    document.getElementById('fecha_nacimiento').value = "";
}

function accion() {
  var id_alumno = document.getElementById('id_alumno').value;
  var nombres = document.getElementById('nombres').value;
  var apellidos = document.getElementById('apellidos').value;
  var direccion = document.getElementById('direccion').value;
  var fecha_nacimiento = document.getElementById('fecha_nacimiento').value;

  if (nombres == "" && apellidos == "" && direccion == "" && fecha_nacimiento == "") {
      alert('Llene los campos!');
      return;
  }
  var peticion = new XMLHttpRequest();
  peticion.onreadystatechange = function () {
      if (this.readyState == 4) {
          document.getElementById('tblCuerpo').innerHTML = this.responseText;
          recargar();
          limpiar();
      }
  };
  var datos = 'nombres=' + nombres + "&apellidos=" + apellidos + "&direccion=" + direccion + "&fecha_nacimiento=" + fecha_nacimiento ;
  if (this.value == "actualizar") {
      datos += '&id_alumno=' + id_alumno;
  }

  peticion.open('POST', 'alumno/' + this.value);
  peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  peticion.send(datos);
}

