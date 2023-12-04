let save_btn = document.getElementsByClassName("class_chain");
let len = save_btn.length;
let btnX = document.getElementsByClassName("btnX");
for(let i=0;i<len;i++)
{
    btnX[i].addEventListener("click",function(){
    
      let x=  save_btn[i].classList;
     
      for(value=0;value<x.length;value++)
      {
        
        if(x[value]=="fa-regular")
         {
            save_btn[i].classList.replace("fa-regular","fa-solid");
            save_btn.setAttribute("name","w1-1");
            save_btn.removeAttribute("name","w1-2");
            
         }else if(x[value]=="fa-solid")
         { 
            save_btn[i].classList.replace("fa-solid","fa-regular");
            save_btn.setAttribute("name","w1-2");
            save_btn.removeAttribute("name","w1-1");
         }
         console.log(x[value]);
      }
      
      console.log("  ");
      console.log(btnX[i]);

    });
}