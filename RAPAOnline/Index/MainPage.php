
<head>
    <meta charset="utf-8">
    <title>RAPA Home</title>   
    
    <link rel="stylesheet" href="styleIndex.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <script defer src="modalScript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var shownForm="ref-type-form";
        function logOut(){
            location.href='../LoginRegisterForm/LoginRegisterForm.html';
        }
        function displayRefForm(formToDisplay,formToHide){
            var form=document.getElementById(formToDisplay);
            var typeForm=document.getElementById(formToHide);
            
            if(formToDisplay=="ref-en-form"){
                form.style.visibility="visible";
                form.style.opacity="1";
                form.style.left="28.5%";
            }else{
                form.style.visibility="visible";
                form.style.opacity="1";
                form.style.left="32%"; 
            }
            typeForm.style.left="10%";
            hide_form(shownForm);   
            changeBtnIcon();
            shownForm=formToDisplay;
            
        }
        function changeBtnIcon(){
            var plusBtn=document.getElementById("idBtn");
            if(plusBtn.className=="fa fa-plus-circle"){
                plusBtn.className="fa fa-arrow-circle-left";
                plusBtn.style.transform="rotate(-45deg)";
            }else if(plusBtn.className=="fa fa-arrow-circle-left"){
                plusBtn.className="fa fa-plus-circle";
                plusBtn.style.transform="rotate(0deg)";

            }
           

        }
        function hide_form(form){
            var formToHide=document.getElementById(form);
            formToHide.style.opacity=0;
            formToHide.style.visibility="hidden";
           
        }
        function show_form(form){
            var formToShow=document.getElementById(form);
            formToShow.style.opacity=1;
            formToShow.style.visibility="visible";
        }
        function btnPressed(){

        }
        function scroll_up(element,pos){
            var elem=document.getElementById(element);
            var pls=document.getElementById("pls-btn-id");
            var plsI=document.getElementById("idBtn");
            var btnTextClass=plsI.className;
            pls.style.transition="all .5s ease";
            elem.style.transition="all .5s ease";
            
            if(btnTextClass=="fa fa-plus-circle"){
                if(pls.style.top=="5%"){
                    pls.style.top="42%";
                    pls.style.transform="rotate(0deg)";
                    elem.style.top="150%";
                }else{
                    pls.style.transform="rotate(45deg)";
                    pls.style.top="5%";
                    elem.style.top=pos;
                }
            }else{
                goBack(shownForm);
            }
         
         
        }
       
       function goBack(formToHide){
            var refForm=document.getElementById(formToHide);
            var typeForm=document.getElementById("ref-type-form");
            show_form("ref-type-form");
            refForm.style.left="60%";
            hide_form(formToHide);   
            typeForm.style.left="39%";
            changeBtnIcon();
            shownForm="ref-type-form";

           
       }
        function reload(){
            window.location.reload();
        }
        

    </script>

</head>
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
            <div data-modal-target="#lista-proyectosid"class="sidebar-buttons"><i class="material-icons" style="font-size:15px">folder</i><span>Proyectos</span></div>
            <div data-modal-target="#lista-referenciasid" class="sidebar-buttons"><i class="material-icons" style="font-size:15px">class</i><span>Referencias</span></div>
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
                <input type="text" class="input-field-rev" placeholder="Autor" required>
			    <input type="text" class="input-field-rev" placeholder="Título de la revista" required>
			    <input type="text" class="input-field-rev" placeholder="Título del artículo" required>
                <input type="number" class="input-field-rev" placeholder="De la página" required>
                <input type="number" class="input-field-rev" placeholder="A la página" required>
			    <input type="number" class="input-field-rev" placeholder="Volumen" required>
			    <input type="text" class="input-field-rev" placeholder="Edición" required>
                <input type="date" class="input-field-rev" placeholder="Recuperado" required>
                <button type="submit" class="submit-btn"> Crear </button>


            </form>
            <form class="input" id="ref-en-form">
                <input type="text" class="input-field-en" placeholder="Autor" required>
                <input type="number" class="input-field-en" placeholder="Año de Publicación" required>
			    <input type="text" class="input-field-en" placeholder="Título de entrada" required>
                <input type="text" class="input-field-en" placeholder="Título Enciclopedia" required>
                <input type="number" class="input-field-en" placeholder="Volumen" required>
                <input type="number" class="input-field-en" placeholder="De la página" required>
                <input type="number" class="input-field-en" placeholder="A la página" required>
                <input type="text" class="input-field-en" placeholder="Lugar de Publicación" required>
                <input type="number" class="input-field-en" placeholder="Editorial" required>
                <button type="submit" class="submit-btn"> Crear </button>

            </form>
            <form class="input" id="ref-l-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título" required>
                <input type="text" class="input-field" placeholder="Edición" required>
                <input type="number" class="input-field" placeholder="Volumen" required>
                <input type="text" class="input-field" placeholder="Editorial" required>
			    <input type="text" class="input-field" placeholder="Lugar de Publicación" required>
                <input type="number" class="input-field" placeholder="Año de publicación" required>
                <button type="submit" class="submit-btn"> Crear </button>

            </form>
            <form class="input" id="ref-p-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título Artículo" required>
			    <input type="number" class="input-field" placeholder="Año de Publiación" required>
			    <input type="text" class="input-field" placeholder="Título de Periódico" required>
                <input type="number" class="input-field" placeholder="De la página" required>
                <input type="number" class="input-field" placeholder="A la página" required>
                <input type="date"  class="input-field" placeholder="Recuperado" required>
                <button type="submit" class="submit-btn"> Crear </button>

            </form>
            <form class="input" id="ref-web-form">
                <input type="text" class="input-field" placeholder="Autor" required>
			    <input type="text" class="input-field" placeholder="Título Artículo" required>
                <input type="url" class="input-field" placeholder="URL" required>
			    <input type="text" class="input-field" placeholder="Fecha de publicacion" required>
                <input type="date" class="input-field" placeholder="Recuperado" required>
                <button type="submit" class="submit-btn"> Crear </button>

            </form>
           
        </div>
        
        <div class="plus-div">
            <button class="plus-btn"id="pls-btn-id" onclick="scroll_up('input-forms-id','20%');">
                <i id="idBtn" class="fa fa-plus-circle" style="font-size:80px;" aria-hidden="true"></i>
            </button>
        </div>
        
       
        
    </div>
    <div id="overlay"></div>

    <div class="lista" id="lista-referenciasid">
    
        <div class="lista-referencias">
            <div class="lista-header">
                <div class="title">
                    <h2>Lista de Referencias</h2>
                </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="referencias">
                <ul>
                    <li>Esta es una referencia</li>
                   
            


                </ul>

            </div>
        
        </div>
    </div>
    
    <div class="lista" id="lista-proyectosid">
    
        <div class="lista-proyectos">
            <div class="lista-header">
                <div class="title">
                    <h2>Lista de Proyectos</h2>
                </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="referencias">
                <ul>
                    <li>Esta es una referencia</li>
                   
            


                </ul>

            </div>
        
        </div>
    </div>

        


  
  

      
   
</body>
</html>