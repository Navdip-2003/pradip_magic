


function getX(event){
    let target = document.getElementById("targetX");
    let evx = document.getElementById(event.id);
    let shap = document.getElementById("Sharp-X");

    if(event.value=="true")
    {
        target.classList.remove("m-auto");
        target.classList.remove("my-3");
        target.classList.add("me-2");
       
        shap.classList.remove("w-100");
         console.log(target.classList);
         evx.value = "false"
      
    }else if(event.value=="false"){

        target.classList.add("m-auto");
        target.classList.add("my-3");
        target.classList.remove("me-2");
       
        shap.classList.add("w-100");
         console.log(target.classList);
         evx.value = "true"
        
    }
}

