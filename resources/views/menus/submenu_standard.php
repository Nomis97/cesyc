	 <section> 
                     <div id="capa_modal" class="div_modal" ></div>
                     <div id="capa_para_edicion" class="div_contenido" >    <span class="glyphicon glyphicon-remove clo"></span>
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                
                                 
                      </div>

                      <div  id="contenido_capa_edicion" ></div>
</section>
                                 <script>
var span = document.getElementsByClassName("clo")[0];
span.onclick = function() {
                              $("#capa_para_edicion").hide();
                      $("#capa_modal").hide();

}
</script>
                                 <!-- <button type="button" class="btn btn-primary" onclick="mostrarseccionSTD(1);" >Informacion</button>
