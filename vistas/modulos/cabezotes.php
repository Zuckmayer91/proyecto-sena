

<div class="container-fluid barraSuperior" id="top">

   <div class="container">
         
        <div class="row">

           <!-- redes sociales -->
           <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">

                <ul>
                    <!-- <li>
                        <a href= "https://www.facebook.com/Kowbags-113481310068941" target="_blank">

                        <i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>                     

                        </a>
                    
                    </li>

                    <li>
                        <a href= "https://www.instagram.com/kowbags/" target="_blank">

                        <i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>                     

                        </a>
                    
                    </li>

                    <li>
                        <a href= "https://www.facebook.com/Kowbags-113481310068941" target="_blank">

                        <i class="fa fa-linkedin redSocial instagramBlanco" aria-hidden="true"></i>                     

                        </a>
                    
                    </li> -->
                   
                    <?php 
                    $social = ControladorPlantilla:: ctrEstiloPlantilla();
                    $jsonRedesSociales = json_decode($social["redes sociales"], true);

                    foreach ($jsonRedesSociales as $key => $value) {
                       echo '<li>
                        <a>
                        
                        <a href="'.$value["url"].'" target="blank">
                        <i class= "fa '.$value["red"]. ' redSocial ' .$value[
                           "estilo"].'" aria-hidden="true"></i>
                        </a>
                       
                       </li>';
                    }
                    
                    ?>
                </ul>
           
           </div>

           <!-- Registro -->

           <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
              <ul>

                <li><a href= "#modalIngreso" data-toggle="modal">Ingresar</a></li>             
                

                 <li>|</li>

                 <li><a href= "#modalRegistro" data-toggle="modal">Crea una cuenta</a></li>                             
                
              
              
              
              </ul>
           
           
           </div>
        
        </div>
   
   </div>


</div>

<!-- Header -->

<header class="container-fluid">

   <div class="container">
       
        <div class="row" id="cabezote">

        <!-- Logotipo -->

            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
               
               <a href="#"></a>
               <img src="http://localhost/backend/ <?php echo $social["logo"]; ?>"  class="img-responsive" alt="logo-kow">
            
            </div>

           <!-- bloque de categorias y buscador -->

                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" >

                <!-- boton categorias -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">

                       <p > Categorias
                          <span class="pull-right">
                           <i class="fa fa-bars" aria-hiden="true"></i>
                          </span>                      
                       
                       </p >
                    
                    </div>  

                <!-- Buscador           -->

                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12 backColor" id="buscador">
                  <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                   
                    <span class="input-group-btn">
                        <a href="#">
                        
                           <button class="btn btn-default backColor" type="submit">
                              
                           <i class="fa fa-search"></i>
                           
                           </button>
                        
                        </a>

                        
                    </span>                      

                   

                 </div>  

                                 
             </div>
            <!-- Carrito -->
            <div class=" col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                
                    <a href="#">
                                
                                <button class="btn btn-default pull-left backColor">
                                
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                
                                </button>
                            
                    </a>

                    <p>TU CESTA<span class="cantidadCesta">3</span><br> USD $ <span class="sumaCesta">20</span></p>

            
            </div>
        
        </div>  

        <!-- Categorias  -->

        <div class=" col-xs-12 backColor" id="categorias">


        <div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" >
        
        
            <h4> 
               <a href="#" class="pixelCategorias">Lorem ipsum</a>
            
            </h4>

            <hr>

            <ul>

            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            
            
            
            </ul>
        
        </div>   


        <div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" >
        
        
            <h4> 
               <a href="#" class="pixelCategorias">Lorem ipsum</a>
            
            </h4>

            <hr>

            <ul>

            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            
            
            
            </ul>
        
        </div>   


        <div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" >
        
        
            <h4> 
               <a href="#" class="pixelCategorias">Lorem ipsum</a>
            
            </h4>

            <hr>

            <ul>

            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            
            
            
            </ul>
        
        </div>   

        <div class=" col-lg-2 col-md-3 col-sm-4 col-xs-12" >
        
        
            <h4> 
               <a href="#" class="pixelCategorias">Lorem ipsum</a>
            
            </h4>

            <hr>

            <ul>

            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
             <li> <a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
            
            
            
            </ul>
        
        </div>   

     </div>    


   </div>


</header>