
const oee = document.querySelectorAll('.oee');
const prog = document.querySelectorAll('.prog');
const prod = document.querySelectorAll('.prod');

const infos = [oee,prog,prod] 
let info = 0;
setInterval(() => {
    for (let index = 0; index < infos[0].length; index++) {
        console.log(info);
        infos[info][index].classList.add('visivel');
        
    }
        
}, 1);

setInterval(() => {
    for (let index = 0; index < infos[0].length; index++) {
        infos[info ][index].classList.remove('visivel');
        
    }
    if (info === infos.length - 1) {
        info = 0;
    }else{
        info++;

    }
    
}, 3000);
