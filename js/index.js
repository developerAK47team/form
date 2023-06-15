const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");


form.onsubmit = (e)=>{
  e.preventDefault();
  statusTxt.style.display = "block";
 statusTxt.style.color = "#0D63FD";
  
  
  letl xhr = new XMLHttpRequest();
  xhr.open("POST", "message.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState == 4 && xhr.status == 200){
      let response = xhr.response;
      if(response.indexOf("Fill all fields")!= -1 || response.indexOf("Enter valid email") || response.indexOf("MESSAGE NOT SENT SUCCESSFULY")){
        statusTxt.style.color = "red";
      }else{
        form.reset();
        setTimeout(()=>{
          statusTxt.style.display = "none";
        },3000);
      }
      console.log(response);
      statusTxt.innerText = response;
    }
  }
  let formdata = new FormData(form);
  xhr.send(formdata);
}