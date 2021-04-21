<template>
      
                  
           <div class="mobile" style="background-color: #fff !important"> 
        <div class="top"></div>
        <div class="bottom"></div>
        <!--debut screen <div class="screen"> -->
            <!-- <img src="https://i.ibb.co/vPv6tT2/bg.jpg">  -->
            <main class="py-4">
                <div class="appbar " >
                    <div class="col_name">
                        <div class="title">
                            Only Pure
                        </div>
                    </div>
                    <div class="col_menu "  >
                        <div class="my_menu nav has-shadow" >
                             <!-- <li class="nav-item "> -->
                                 <!-- <router-link class="mytextmenu" to="/">Home</router-link> -->
                             <!-- </li> -->

                            <li class="nav-item ">
                                <router-link class="nav-link" to="/store">Store</router-link>
                            </li>

                            <li class="nav-item ">
                                <router-link class="nav-link" to="/panier">Panier  <span class="badge badge-pill badge-danger">6</span></router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link" to="/question">Quesions</router-link> 
                            </li>

                            <li class="nav-item ">
                                <router-link class=" nav-item is-tab" to="/avisClient">Avis Clients</router-link> 
                            </li>

                        </div>
                        
                    </div>                      
                            <div class="container test scrollbar"  >  
                                <router-view></router-view>  
                            </div> 
                                
                </div>
            </main>
        <!--fin screen </div> -->
    </div>
        
    
</template>

<script>
    export default {}
    
</script>

<style>
              .appclasse {
                
                background-color:#E9E3E2;
                background-attachment: inherit;
                /* padding: 0px 10px 0px 0px; */
                /* margin: 0px 1px 0px 0px; */
                width: 440px;
                height: 712px;
              }    

               .scrollbar {
                   /* overflow: scroll; */
                   	margin-left: 20px;
                    margin-right: 0px;
                    float: left;
                    height: 300px;
                    width: 65px;
                    background: #F5F5F5;
                    overflow-y: scroll;
                    margin-bottom: 25px; 
                }
                
                .test{
                    background-color:#E9E3E2;
                    width: 440px;
                    height: 712px;
                    border: 0px; 
                    /* margin: 0px;  */
                    padding: 0px;
                }
</style>


