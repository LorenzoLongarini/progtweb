
    
    {{  Form::open(array('route' => ['catalogo']))  }}
    <div class="multiple-input">
    

        <div class="wrap-input">
            {{  Form::text ('descrizione', null, array('placeholder' => 'Descrizione'),["class" => "search-desc"])}}
        </div>
        
        <div id="qm-icon">
            <div id="icon-btn"><i class='fas fa-question-circle'  style='font-size:24px'></i></div>
            
            <div id="win-tutorial" class="w-tutorial">
                <div class="text-tutorial">
                    <div class="win-title"><h2 class="title-text">TUTORIAL RICERCA PER DESCRIZIONE</h2></div>
                    
                </div>
            </div>

        </div>
        <div id="button-input" class="wrap-input">
            {{  Form::submit ('Cerca', ["class" => "default-btn", "id" => "search-btn"])}}
        </div>
    
    </div>
{{Form::close()}}
<script>
let btn=document.getElementById("icon-btn");
 let win=document.getElementById("win-tutorial");
 btn.onclick=function(){
     win.style.display="block";
 }
 window.onclick=function(event){
     if(event.target==win){
         win.style.display="none";
     }
 }
</script>


