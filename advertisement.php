<?php include "header.php"; ?>				

 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-md offset-md-1">
 	<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/index.php">На головну</a></li>
    <li class="breadcrumb-item active" aria-current="page">Оголошення</li>
  </ol>
</nav>
</div>
</div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
 <div class="slider2">
            <div><img src="img/k1.png"  alt=""></div>
            <div><img src="img/k2.png"  alt=""></div>
            <div><img src="img/k3.png"  alt=""></div>
            <div><img src="img/k4.png" alt=""></div>
            <div><img src="img/k5.png"  alt=""></div>
            <div><img src="img/k6.png" alt=""></div>
            
          </div>
      </div>    
</div>
<img src="img/2.jpg" class="img-fluid ogol" alt="main-pic">  
<div class="container">
  <div class="row">
    <div class="col-md-5 offset-md-1">
      <h3>Найближчі зустрічі:</h3>
      <p class="graphic">15.03.2023 о 17:00 -  м. Дніпро, Запорізьке шоссе 63 <br>
      18.03.2023 о 19:00 -  м. Дніпро, вул. Каштанова 1<br>
      19.03.2023 о 17:00 -  м. Дніпро, пр. Героїв 2<br>
      24.03.2023 о 13:00 -  м. Дніпро, вул. Каштанова 1<br>
      02.04.2023 о 20:00 -  м. Дніпро, Запорізьке шоссе 63<br>
      06.04.2023 о 14:00 -  м. Дніпро, пр. Героїв 2<br>
      16.04.2023 о 17:00 -  м. Дніпро, пр. Героїв 2<br>
      05.05.2023 о 11:00 -  м. Дніпро, вул. Каштанова 1</p>
    </div>
    <div class="col-md-5">
      <form action="https://formspree.io/f/xgebkpal" method="post" class="rem">
        <div class="formrem">
      <h4>Отримувати нагадування на пошту</h4>
      <div class="mb-3">
        <label for="name" class="form-label">Ваше ім'я</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Ваш еmail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
      </div>  
      <div class="mb-3">
        <label for="subject" class="form-label">Тема</label>
        <input type="text" class="form-control" id="subject" placeholder="Отримувати нагадування">
      </div>  
       <div class="mb-3">
       <button type="submit" class="btn btn btn-outline-dark">Надіслати</button>
       </div> 
       </div>
       <br>
        <center><p id="my-form-status"></p></center>
       </form> 
       
      </div>
           
    </div>
  </div>
</div>
<script>
    let form = document.querySelector("form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      let status = document.getElementById("my-form-status");
      let data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Дякую за Ваше звернення!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Ой! Під час заповнення форми виникла проблема"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Ой! Під час заповнення форми виникла проблема"
      });
    }
    form.addEventListener("submit", handleSubmit)
  </script>
</body>

<?php include "footer.php"; ?>	
 		
 					
							 
			
        
        
        
 




      	
        
      
 	
 









 