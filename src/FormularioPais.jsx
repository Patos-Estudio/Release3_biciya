import React, { useState } from 'react';

const CreateCountry = () => {
  const [name, setName] = useState('');
  const [population, setPopulation] = useState('');
  const [editing, setEditing] = useState(false); // Estado para controlar la edición

  const handleSubmit = (e) => {
    e.preventDefault();

    const countryData = {
      name: name,
      population: population
    };

    fetch('http://127.0.0.1:8000/api/countries/', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(countryData)
    })
      .then(response => response.json())
      .then(data => {
        console.log('País creado exitosamente:', data);
      })
      .catch(error => console.error('Error al crear el país:', error));

    setName('');
    setPopulation('');
  };

  const handleEdit = () => {
    setEditing(!editing); // Cambiar el estado a su valor opuesto
  };

  return (
    <div className='container text-center'>
      <h1>Agregar Estacion</h1>
      <form onSubmit={handleSubmit}>
        <div>
          <label>Nombre de la Estacion:</label>
          <input type="text" value={name} onChange={(e) => setName(e.target.value)} className='form-control' />
        </div>
        <div>
          <label>Ubicacion:</label>
          <input type="text" value={population} onChange={(e) => setPopulation(e.target.value)} className='form-control' />
        </div>
        <button type="submit" className='btn btn-primary btn-sm mt-4'>Guardar</button>
      </form>

      {/* Botones de Editar y Eliminar */}
      <div className="d-flex justify-content-center mt-4">
        {editing ? (
          <button className="btn btn-secondary btn-sm mx-2" onClick={handleEdit}>
            Cancelar
          </button>
        ) : (
          <button className="btn btn-info btn-sm mx-2" onClick={handleEdit}>
            Editar
          </button>
        )}
        <button className="btn btn-danger btn-sm mx-2">Eliminar</button>
      </div>

      {/* Cajas de texto de edición */}
      {editing && (
        <div>
          <h2>Editar Estación</h2>
          <div>
            <label>Nombre de la Estacion:</label>
            <input type="text" value={name} onChange={(e) => setName(e.target.value)} className='form-control' />
          </div>
          <div>
            <label>Ubicacion:</label>
            <input type="text" value={population} onChange={(e) => setPopulation(e.target.value)} className='form-control' />
          </div>
          <button className="btn btn-primary btn-sm mt-4">Guardar Cambios</button>
        </div>
      )}
    </div>
  );
};

export default CreateCountry;





