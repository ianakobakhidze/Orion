<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orion</title>
    <link rel="icon" href="pictures/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="container header">
        <div class="first-header">
        <div class="logo">
            <a href="index.html">
                <img src="pictures/logo.png" alt="">
            </a>
        </div>

        <div class="header-nav">
            <a href="#">Home</a>
            <a href="about.php">About us</a>
            <a href="#">Courses</a>
            <a href="#">Tutors</a>
            <a href="#">Contact</a>
        </div>
        </div>
    </header>

    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Form</title>

<style>
body {
  margin: 150px;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #f7f9fc, #eef3f7);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding-top: 60px;
}

.form-card {
  width: 380px;
  background: #ffffff;
  padding: 32px;
  border-radius: 16px;
  box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}

.form-title {
  text-align: center;
  font-size: 22px;
  font-weight: 600;
  color: #1e663e;
  margin-bottom: 6px;
  letter-spacing: 0.5px;
}

.form-subtitle {
  text-align: center;
  font-size: 13px;
  color: #488158;
  margin-bottom: 20px;
}

input {
  width: 100%;
  padding: 12px 14px;
  margin-bottom: 12px;
  border: 1px solid #e0e6ed;
  border-radius: 10px;
  font-size: 14px;
  transition: 0.3s;
}

input:focus {
  outline: none;
  border-color: #54b255;
  box-shadow: 0 0 0 3px rgba(122,166,194,0.15);
}

button {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 10px;
  background: #76cc85;
  color: white;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  background: #71bb8a;
  transform: translateY(-1px);
}

#thankYou {
  display: none;
  text-align: center;
  margin-top: 15px;
  color: #2e7d32;
  font-weight: 600;
  animation: fadeIn 0.4s ease-in-out;
}

@keyframes fadeIn {
  from {opacity: 0; transform: translateY(8px);}
  to {opacity: 1; transform: translateY(0);}
}
</style>
</head>

<body>

<div class="form-card">

  <!-- 👇 ლამაზი სათაური -->
  <div class="form-title">Student Form</div>
  <div class="form-subtitle">Please fill in your details below</div>

  <input type="text" id="name" placeholder="First Name">
  <input type="text" id="surname" placeholder="Last Name">
  <input type="text" id="phone" placeholder="Contact Number">
  <input type="email" id="email" placeholder="Email Address">

  <button onclick="submitForm()">Send Message</button>

  <div id="thankYou">Thank you! 🎉</div>
</div>

<script>
function submitForm() {
  const name = document.getElementById("name").value.trim();
  const surname = document.getElementById("surname").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const email = document.getElementById("email").value.trim();

  if (name && surname && phone && email) {
    document.getElementById("thankYou").style.display = "block";
  } else {
    alert("Please fill all fields!");

  }
}
</script>



</body>
</html>

  </div>
</section>