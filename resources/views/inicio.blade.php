@extends('layouts.adminlte')
<link rel="stylesheet" href="{{asset('css/vista1.css')}}">
    @section('content')
    <section id="hero">
      <h1>Inicio</h1>
    </section>

    <section id="nosotros">
      <div class="container">
        <div class="img-container"></div>
        <div class="texto">
        <h2>Sobre <span class="color-acento">Nosotros!</span></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolores doloribus aspernatur. 
        Natus aperiam eum, adipisci illo quia quod beatae odit non officia atque obcaecati. 
        Laborum, fugiat dolorum? Excepturi, sint.</p>
    </div>
  </div>
    </section>

    <section id="coachs">
      <div class="container">
        <h2>Entrenadores!</h2>
        <div class="coach-container">
      <div class="coach">
        <h3>Cbum</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Placeat repellendus temporibus quae officia vel ex eum quasi, id delectus dolorum accusamus nesciunt 
          recusandae, saepe sit pariatur, aliquid cum repellat quis.</p>
      </div>

      <div class="coach">
        <h3>Arnold </h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Placeat repellendus temporibus quae officia vel ex eum quasi, id delectus dolorum accusamus nesciunt 
          recusandae, saepe sit pariatur, aliquid cum repellat quis.</p>
      </div>

      <div class="coach">
        <h3>Ramon Dino</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Placeat repellendus temporibus quae officia vel ex eum quasi, id delectus dolorum accusamus nesciunt 
          recusandae, saepe sit pariatur, aliquid cum repellat quis.</p>
      </div>

      <div class="coach">
        <h3>Coleman</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Placeat repellendus temporibus quae officia vel ex eum quasi, id delectus dolorum accusamus nesciunt 
          recusandae, saepe sit pariatur, aliquid cum repellat quis.</p>
      </div>

      </div>
    </div>
    </section>

    <section id="membresias">
        <div class="container">
        <h2>Membresías</h2>
        <details>
            <summary>Mensualidad</summary>
            <p id="info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae eum officia excepturi. Veniam perspiciatis voluptates repellat, harum, suscipit exercitationem fugiat assumenda iste dolores non provident ab nisi dolorem possimus incidunt.</p>
        </details>
        <details>
            <summary>Anual</summary>
            <p id="info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae eum officia excepturi. Veniam perspiciatis voluptates repellat, harum, suscipit exercitationem fugiat assumenda iste dolores non provident ab nisi dolorem possimus incidunt.</p>
        </details>
        </div>
    </section>
    @endsection
