
const change=(event)=>{
    const getSpan = document.getElementById("valueX");
    getSpan.innerHTML = event.innerHTML;
}


let idx = document.getElementById("brow");

console.log(idx);

const imageUrl1=(e)=>{
   let pathX = document.getElementById (e.name);
   console.log(pathX);
   let split1 = e.value.split("\\");
   let len =split1.length-1;
  pathX.innerHTML = split1[len];
}

