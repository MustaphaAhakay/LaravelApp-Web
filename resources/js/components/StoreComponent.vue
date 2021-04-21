<template>
   <!-- <div class="container"> -->
        
            <!-- <div class="container-fluid "> -->

                <div class="row ">
                    <div class="col-md-3 scrollbare">

                        <div class="sidemenuContent list-group">
                                <a data-bs-toggle="list" href="#list-home">
                                <div class="item_cat Activemenu">
                                <img src="asset('images/cats/oil.png')" class="imgsidemenu"> 
                                <span class="text">Les oils</span>
                                </div>
                                </a>
                                <div class="item_cat Activemenu">
                                    <img src="asset('images/cats/oil.png')" class="imgsidemenu"> 
                                    <span class="text">Les oils</span>
                                </div>
                                
            
                        </div>

                    </div>
                        
                        <div class="col-md-9">   
                                <div class="list-group">                             
                                
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                    <br>
  
                                </div>                                                                         
                        </div>
>
                </div>
            <!-- </div> -->
      
    <!-- </div> -->

    <!-- start -->

    <!-- end -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.sidebarremenu{
    /* justify-content: space-between; */
    background-color: #ecf0f1;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    /* overflow: scroll; */
    
    /* align-items: center; */
}
.item_cat{
    display: flex;
    flex-direction: column;
    border-bottom-style: solid;
    border-bottom-color: #bdc3c7;
    padding-bottom: 2vmin;
    width: 100%;
    height: 100px;
    align-items: center;
}
.text{
    color: black;
}
.Activemenu{
    background-color: #dfffe0;
    font-weight: bolder;
}
.imgsidemenu {
    width: 4vmin;
    padding-top: 1vmin;
    border-radius: 2vmin;
}
            .appclasse {
                background-color: powderblue;
                background-attachment: inherit;
                padding: 0px;
                margin: 0px 10px 0px 0px;
               width: 440px;
               height: 712px;}
               .rowcss{
                   margin-right: 0px;
               }

                .scrollbare {
                  overflow-y: scroll;
                  height: 690px;
                  width: 20px;
                }
</style>