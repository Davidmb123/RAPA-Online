<body>
<div class="background">
    <input type="checkbox" id="check">
    <label for="check"> 
        <i class="material-icons" id="btn">reorder</i>
        <i class="material-icons" id="cancel">highlight_off</i>
    </label>
    
        <div class="sidebar">
            <header>RAPA</header>
            <div class="sidebar-buttons"  onclick=reload()><i class="material-icons" style="font-size:15px;" >dashboard</i><span>Inicio</span></div>
            <div class="sidebar-buttons"><i class="material-icons" style="font-size:15px">folder</i><span>Proyectos</span></div>
            <div class="sidebar-buttons"><i class="material-icons" style="font-size:15px">class</i><span>Referencias</span></div>
            <div class="sidebar-buttons"><i class="material-icons" style="font-size:15px">help_outline</i><span>Ayuda</span></div>
            <div class="sidebar-buttons" onclick=logOut()><i class="material-icons" style="font-size:15px">exit_to_app</i><span>Salir</span></div>   
        </div>
        <div class="input-forms" id="input-forms-id">
            <form id="ref-type-form">
                <button type="button" class="type-btn" id="revista-btn" onclick="displayRefForm('ref-rev-form','ref-type-form');"> Revista </button>
                <button type="button" class="type-btn" onclick="displayRefForm('ref-p-form','ref-type-form');"> Periódico </button>
                <button type="button" class="type-btn"  onClick="displayRefForm('ref-l-form','ref-type-form')"> Libro </button>
                <button type="button" class="type-btn"  onClick="displayRefForm('ref-en-form','ref-type-form')"> Enciclopedia </button>
                <button type="button" class="type-btn" onClick="displayRefForm('ref-web-form','ref-type-form')"> Referencia Web </button>
            </form>
            <form class="input" id="ref-rev-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título" required>
			    <input type="text" class="input-field" placeholder="Nombre de Revista" required>
			    <input type="text" class="input-field" placeholder="Volumen" required>
                <input type="text" class="input-field" placeholder="Páginas" required>
                <input type="text"  class="input-field" placeholder="Recuperado" required>
            </form>
            <form class="input" id="ref-en-form">
                <input type="text" class="input-field-en" placeholder="Autor" required>
			    <input type="text" class="input-field-en" placeholder="Título" required>
			    <input type="text" class="input-field-en" placeholder="Año de Publicación" required>
			    <input type="text" class="input-field-en" placeholder="Nombre Enciclopedia" required>
                <input type="text" class="input-field-en" placeholder="Volumen" required>
                <input type="text"  class="input-field-en" placeholder="Páginas" required>
                <input type="text"  class="input-field-en" placeholder="Lugar de Publicación" required>
                <input type="text"  class="input-field-en" placeholder="Editorial" required>
                <input type="text"  class="input-field-en" placeholder="Recuperado" required>
            </form>
            <form class="input" id="ref-l-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título" required>
			    <input type="text" class="input-field" placeholder="Lugar de Publicación" required>
			    <input type="text" class="input-field" placeholder="Editorial" required>
                <input type="text" class="input-field" placeholder="Fecha de Publicación" required>
                <input type="text"  class="input-field" placeholder="Recuperado" required>
            </form>
            <form class="input" id="ref-p-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título Artículo" required>
			    <input type="text" class="input-field" placeholder="Año de Publiación" required>
			    <input type="text" class="input-field" placeholder="Título de Periódico" required>
                <input type="text" class="input-field" placeholder="Páginas" required>
                <input type="text"  class="input-field" placeholder="Recuperado" required>
            </form>
            <form class="input" id="ref-web-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título Artículo" required>
			    <input type="text" class="input-field" placeholder="Asociación del Artículo" required>
			    <input type="text" class="input-field" placeholder="URL" required>
                <input type="text"  class="input-field" placeholder="Recuperado" required>
            </form>
           
        </div>
        <div class="plus-div" >
        <button class="plus-btn"id="pls-btn-id" onclick="scroll_up('input-forms-id','20%');">
            <i id="idBtn" class="fa fa-plus-circle" style="font-size:80px;" aria-hidden="true"></i>
        </button>
    </div>
       
    </div>
   

</body>
    

    

      
   