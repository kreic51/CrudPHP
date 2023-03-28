document.addEventListener('DOMContentLoaded', () => {
  const modalEditar = document.getElementById('modalEditar');
  const modalEliminar = document.getElementById('modalEliminar');

  modalEditar.addEventListener('show.bs.modal', (e) =>{    
    let id = e.relatedTarget.dataset.id;
    
    const inputId = modalEditar.querySelector('.modal-body #id');
    const inputNombre = modalEditar.querySelector('.modal-body #nombre');
    const inputApaterno = modalEditar.querySelector('.modal-body #apaterno');
    const inputAmaterno = modalEditar.querySelector('.modal-body #amaterno');
    const inputEstatus = modalEditar.querySelector('.modal-body #estatus');


    let url = "helpers/obtenerPersona.php";
    let formData = new FormData();
    
    formData.append('id', id);

    fetch(url, {
      method: "POST",
      body: formData
    })
    .then(respuesta => respuesta.json())
    .then(data => {
      inputId.value = data.Id;
      inputNombre.value = data.Nombre;
      inputApaterno.value = data.Apaterno;
      inputAmaterno.value = data.Amaterno;
      inputEstatus.value = data.Estatus;
    })
    .catch(ex => console.log(ex));

  });


  modalEliminar.addEventListener('show.bs.modal', (e) =>{    
    let id = e.relatedTarget.dataset.id;

    const inputId = modalEliminar.querySelector('.modal-body #id');
    inputId.value = id;
    
  });

});