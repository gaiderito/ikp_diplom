const popupOverlay = document.getElementById("popup-overlay");
const popupOverlay2 = document.getElementById("popup-overlay2");
const popupOverlay3 = document.getElementById("popup-overlay3");
const popup = document.getElementById("popup");
const popup2 = document.getElementById("popup2");
const popup3 = document.getElementById("popup3");
const defect = document.getElementsByClassName('defectol');
const terap = document.getElementsByClassName("terap");
const psyho = document.getElementsByClassName("psyho");
const logop = document.getElementsByClassName("logop");
const firstselect = document.getElementById("prof");
const firstselect1 = document.getElementById("prof1");
  const secondselect = document.getElementById("doctor");
  const secondselect1 = document.getElementById("doctor1");
  const opt = document.querySelector("#doctor option");

  function showPopup() {
    popupOverlay.style.display = "block";
  }
   
  function hidePopup() {
    popupOverlay.style.display = "none";
  }

  function showPopup2() {
    popupOverlay2.style.display = "block";
  }
   
  function hidePopup2() {
    popupOverlay2.style.display = "none";
  }

  function showPopup3() {
    popupOverlay3.style.display = "block";
  }
   
  function hidePopup3() {
    popupOverlay3.style.display = "none";
  }

  function showSecondSelect(){
  
  if (firstselect.value !== ''){
      secondselect.disabled = false;
      if (firstselect.value == 'Дефектолог'){
        for (let i = 0; i < defect.length; i++) {
          defect[i].style.display = 'block';
        }for (let i = 0; i < terap.length; i++) {
          terap[i].style.display = 'none';
       }for (let i = 0; i < psyho.length; i++) {
        psyho[i].style.display = 'none';
     }for (let i = 0; i < logop.length; i++) {
      logop[i].style.display = 'none';
   }
      
   
      }
       else if (firstselect.value == 'Терапевт'){
       for (let i = 0; i < terap.length; i++) {
          terap[i].style.display = 'block';
       }for (let i = 0; i < defect.length; i++) {
        defect[i].style.display = 'none';
      } for (let i = 0; i < psyho.length; i++) {
        psyho[i].style.display = 'none';
     } for (let i = 0; i < logop.length; i++) {
      logop[i].style.display = 'none';
   }


      }
      else if (firstselect.value == 'Психолог'){
        for (let i = 0; i < psyho.length; i++) {
          psyho[i].style.display = 'block';
       } for (let i = 0; i < defect.length; i++) {
        defect[i].style.display = 'none';
      }for (let i = 0; i < terap.length; i++) {
        terap[i].style.display = 'none';
     } for (let i = 0; i < logop.length; i++) {
      logop[i].style.display = 'none';
   }



      }
      else if (firstselect.value == 'Логопед'){
        for (let i = 0; i < logop.length; i++) {
          logop[i].style.display = 'block';
       }for (let i = 0; i < defect.length; i++) {
        defect[i].style.display = 'none';
      }for (let i = 0; i < terap.length; i++) {
        terap[i].style.display = 'none';
     }for (let i = 0; i < psyho.length; i++) {
      psyho[i].style.display = 'none';
   }
      }



     
  }else {
      firstselect.value = '';
      secondselect.disabled = true;
  } 
}





function showSecondSelect2(){
  
  if (firstselect1.value !== ''){
      secondselect1.disabled = false;
      if (firstselect.value == 'Дефектолог'){
        for (let i = 0; i < defect.length; i++) {
          defect[i].style.display = 'block';
        }for (let i = 0; i < terap.length; i++) {
          terap[i].style.display = 'none';
       }for (let i = 0; i < psyho.length; i++) {
        psyho[i].style.display = 'none';
     }for (let i = 0; i < logop.length; i++) {
      logop[i].style.display = 'none';
   }
      
   
      }
       else if (firstselect1.value == 'Терапевт'){
       for (let i = 0; i < terap.length; i++) {
          terap[i].style.display = 'block';
       }for (let i = 0; i < defect.length; i++) {
        defect[i].style.display = 'none';
      } for (let i = 0; i < psyho.length; i++) {
        psyho[i].style.display = 'none';
     } for (let i = 0; i < logop.length; i++) {
      logop[i].style.display = 'none';
   }


      }
      else if (firstselect1.value == 'Психолог'){
        for (let i = 0; i < psyho.length; i++) {
          psyho[i].style.display = 'block';
       } for (let i = 0; i < defect.length; i++) {
        defect[i].style.display = 'none';
      }for (let i = 0; i < terap.length; i++) {
        terap[i].style.display = 'none';
     } for (let i = 0; i < logop.length; i++) {
      logop[i].style.display = 'none';
   }



      }
      else if (firstselect1.value == 'Логопед'){
        for (let i = 0; i < logop.length; i++) {
          logop[i].style.display = 'block';
       }for (let i = 0; i < defect.length; i++) {
        defect[i].style.display = 'none';
      }for (let i = 0; i < terap.length; i++) {
        terap[i].style.display = 'none';
     }for (let i = 0; i < psyho.length; i++) {
      psyho[i].style.display = 'none';
   }
      }



     
  }else {
      firstselect1.value = '';
      secondselect1.disabled = true;
  } 
}